<?php

namespace App\Http\Livewire\PageBuilder;

use Livewire\Component;
use App\Models\SitePage;
use App\Models\Setting\SiteSetting;
use App\Models\PartnerModel;
class HiringProcessBlock extends Component
{ 

    public $heading             = null;
    public $description         = null;
    public $video_link          = null;
    public $talent_btn_txt      = null;
    public $work_btn_txt        = null;
    public $style_css           = '';
    public $site_view           = false;
    public $hiring_process_bg   = '';
    public $custom_class        = '';



    public $page_id = null;
    public $block_key = null;

    public function render()
    {
        $partner = PartnerModel::all();
        return view('livewire.pagebuilder.partner-block', compact('partner'));
    }

    protected function getListeners(){
        return [
            'update-'.$this->block_key                  => "updateBlockSetting",
            'update-custom-class-'.$this->block_key     => "updateCustomClass",
        ];
    }

    public function mount($page_id, $block_key, $settings, $style_css, $site_view){

        $this->page_id = $page_id;
        $this->block_key = $block_key;

        if( !empty($style_css) ){
            $this->style_css    = !empty($style_css['style']) ? $style_css['style'] : '';
            $this->custom_class = !empty($style_css['custom_class']) ? $style_css['custom_class'] : '';
        }

        if( !empty($site_view) ){
            $this->site_view = true;
        }
        if( !empty( $settings) ){
          
            $this->heading           = !empty($settings['heading']) ? $settings['heading'] : '';
            $this->description       = !empty($settings['description']) ? $settings['description'] : '';
            $this->video_link        = !empty($settings['video_link']) ? $settings['video_link'] : '';
            $this->talent_btn_txt    = !empty($settings['talent_btn_txt']) ? $settings['talent_btn_txt'] : '';
            $this->work_btn_txt      = !empty($settings['work_btn_txt']) ? $settings['work_btn_txt'] : '';
            $this->hiring_process_bg = !empty($settings['hiring_process_bg']) ? $settings['hiring_process_bg'] : '';
        }else{
            $getDefaultValues = SiteSetting::where('setting_type', 'partner-block')->get();
           
            if(!$getDefaultValues->isEmpty()){
                foreach($getDefaultValues as $value){
                    if($value->meta_key == 'heading'){
                        $this->heading          = !empty($value->meta_value) ? json_decode($value->meta_value) : '';
                    } elseif(in_array($value->meta_key, ['description','video_link','talent_btn_txt','work_btn_txt','hiring_process_bg'])){
                        $this->{$value->meta_key} = !empty($value->meta_value) ? $value->meta_value : '';
                    }
                }
            }
        }
    }

    public function updateCustomClass($data){
        $this->custom_class = !empty($data['custom_class']) ? $data['custom_class'] : '';
    }

    public function updateBlockSetting( $data ){
        
        $response = isDemoSite();
        if( $response ){
            $this->dispatchBrowserEvent('showAlertMessage', [
                'type'      => 'error',
                'title'     => __('general.demosite_res_title'),
                'message'   => __('general.demosite_res_txt')
            ]);
            return;
        }
        
        $page               = SitePage::select('id','settings')->find( $this->page_id );
        $page_settings      = !empty( $page->settings ) ? json_decode($page->settings, true) : [];
        $block_key          = explode('__', $this->block_key);
        $id                 = $block_key[0] ;
        $key                = isset($block_key[1]) ? $block_key[1] : '';
        
        if( !empty($page_settings[$key]) && $page_settings[$key]['block_id'] == $id ){
            $newSetting = $page_settings[$key]['settings'];
            parse_str($data, $formData);
           
            foreach($formData as $propertyKey => $data){
                if(isset($this->{$propertyKey})){

                    if( is_array($data) ){
                        $result = SanitizeArray($data);
                        $newSetting[$propertyKey] = $result;
                    }else{
                       $newSetting[$propertyKey]   = sanitizeTextField($data, true);
                    }
                    $this->{$propertyKey}       = $newSetting[$propertyKey];
                }
            }
            $page_settings[$key]['settings']    = $newSetting;
            $settings = json_encode($page_settings);
            $page->update(['settings' => $settings ]);
        }
    }

}
