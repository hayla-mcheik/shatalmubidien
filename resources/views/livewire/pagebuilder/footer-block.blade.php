<div class="{{ $block_key }} tk-footerwrap {{$custom_class}}" @if(!$site_view) wire:click="$emit('getBlockSetting', '{{ $block_key }}')" @endif>
	@if( !empty($style_css) )
		<style>{{ '.'.$block_key.$style_css }}</style>
	@endif
	<footer class="pt-5 pb-5" >
		<div class="container-fluid">
		  <div class="row">
			<div class="col-md-2 col-12">
			  <div class="logo-text">
			  <img src="{{ asset('images/Group-2.png') }}" class="w-50">
			  </div>
			  <div class="footer-items">
				<ul>
				  <li>
					<img src="{{ asset('images/Language-Skill.png') }}">
					<p>العربية</p>
				  </li>
				  <li>
					<img src="{{ asset('images/Help.png') }}">
				  <p>مساعدة و دعم</p>
				  </li>
				  <li>
					<img src="{{ asset('images/Web-Accessibility.png') }}">
			<p>إمكانية الوصول</p>
				  </li>
				</ul>
			  </div>
			</div>
	  
	  <div class="col-md-2 col-12">
		<div class="footer-text">
		  <h2>المستقلين</h2>
		  <ul>
			<li>الفئات</li>
			<li>المشاريع</li>
			<li>المسابقات</li>
			<li>المستقلين</li>
			<li>الاعضاء</li>
			<li>المستقلين المفضلين</li>
			<li>البرامج</li>
			<li>ادارة مشروع</li>
			<li>وظائف محلية</li>
			<li>معرض الصور</li>
			<li>API للمطورين</li>
			<li>الحصول على رمز التحقق</li>
			<li>تطبيق سطح المكتب</li>
		  </ul>
		</div>
	  </div>
	  
	  <div class="col-md-2 col-12">
		<div class="footer-text">
	  <h2>عن المشروع</h2>
		  <ul>
			<li>معلومات عنا</li>
			<li>كيف تعمل</li>
			<li>الحماية</li>
			<li>المستثمر</li>
			<li>خريطة الموقع</li>
			<li>الستوريات</li>
			<li>الأخبار</li>
			<li>الفريق</li>
			<li>الجوائز</li>
			<li>تصريحات صحفيه</li>
			<li>وظائف</li>
			</ul>
			</div>
			</div>
	  
	  
			<div class="col-md-2 col-12">
			  <div class="footer-text">
		  <h2>الشروط</h2>
				<ul>
	  <li>سياسة الخصوصية</li>
	  <li>الأحكام والشروط</li>
	  <li>سياسة حقوق النشر</li>
	  <li>مدونة لقواعد السلوك</li>
	  <li>الرسوم والمصاريف</li>
				  </ul>
				  </div>
				  </div>
	  
	  
				  <div class="col-md-2 col-12">
					<div class="footer-text">
			   <h2>الشركاء</h2>
					  <ul>
						<li>DMP Soft</li>
						<li>Loadshift</li>
						</ul>
						</div>
						</div>
	  
						<div class="col-md-2 col-12">
						  <div class="footer-text">
		<img src="{{ asset('images/google-play-app-store-removebg-preview-1.png') }}" class="w-100">
							  </div>
	  
							  <div class="social-footer">
								<ul>
								  <li>
									<a href={{ $facebook_link }}>
										<img src="{{ asset('images/Facebook.png') }}" class="w-10">
									</a></li>
								  <li>
									<a href={{ $twitter_link }}>
										<img src="{{ asset('images/Twitter.png') }}" class="w-10">
									</a>
						</li>
								  <li>
									<a href={{ $youtube_link }}>
										<img src="{{ asset('images/YouTube.png') }}" class="w-10">
									</a>
									</li>
								  <li>
									<a href={{ $instagram_link }}>
										<img src="{{ asset('images/Instagram.png') }}" class="w-10">
									</a></li>
								</ul>
							  </div>
							  </div>
	  
		  </div>
		</div>
		<hr>
		<div class="footer-bottom">
		  <div class="container-fluid">
			<div class="row">
			  <div class="col-md-4 col-12">
				<div class="footer-text-bottom d-block">
				  <h2>50,000,000</h2>
				  <h2>المستخدمون المسجلون</h2>
				</div>
				<h2></h2>
			  </div>
			  <div class="col-md-4 col-12">
				<div class="footer-text-bottom d-block">
		  <h2>30,000,000</h2>
		  <h2>تم نشر إجمالي الوظائف</h2>
				</div>
				<h2></h2>
			  </div>
	  
			  <div class="col-md-4 col-12">
				<div class="footer-text-bottom d-block">
	  <h2>Powered by DMP Soft @ 2023</h2>
				</div>
				<h2></h2>
			  </div>
			</div>
		  </div>
	  
		</div>
	  </footer>
	  
</div>











