<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartnerModel;
use App\Http\Requests\PartnerRequest;
use Illuminate\Support\Facades\File; // Import File facade
use Illuminate\Support\Facades\Storage; // Import Storage facade
class PartnerController extends Controller
{
public function index()
{
    $partner = PartnerModel::all();
    return view('admin.partner.index',compact('partner'));
}

public function create()
{
    return view('admin.partner.create');
}


public function store(PartnerRequest $request)
{
$validatedData = $request->validated();
$partner = new PartnerModel();
$partner->title = $validatedData['title'];
$partner->url = $validatedData['url'];

if($request->hasFile('image'))
{
    $image = $request->file('image');
    $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
    $image->move('upload/', $fileName);
    $uploadFile = 'upload/' . $fileName;
    $image=$uploadFile;
    $partner->image=$image;
}  

$partner->save();
return redirect('admin/partner')->with('message','Partner Added Successfully');
}

public function edit($partner)
{
    $partner = PartnerModel::findOrFail($partner);
    return view('admin.partner.edit', compact('partner'));
}

public function update(PartnerRequest $request, int $partner)
{
    $validatedData = $request->validated();
    $partner = PartnerModel::findOrFail($partner);

    // Update the fields other than the image
    $partner->title = $validatedData['title'];
    $partner->url = $validatedData['url'];
    if($request->hasFile('image'))
    {
    if ($partner->image) {
            Storage::delete($partner->image); // Use appropriate file storage method
        }
        $image = $request->file('image');
        $fileName = time().rand(1000,50000) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/', $fileName);
        $uploadFile = 'upload/' . $fileName;
        $image=$uploadFile;
        $partner->image=$image;
    }  
    $partner->save();
    return redirect('admin/partner')->with('message', 'Partner Updated Successfully');
}



public function destroy(int $partner)
{
$partner = PartnerModel::findOrFail($partner);
if($partner->image!=null) unlink($partner->image);
$partner->delete();
return back()->withSuccess('Partner has been deleted');

}


}
