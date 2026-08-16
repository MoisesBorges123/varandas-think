@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Avatars</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Avatars</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Simple Square Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Round Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Radius Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
											<span class="avatar avatar-md" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
											<span class="avatar avatar-lg" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
											<span class="avatar avatar-xl" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar avatar-xxl" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar avatar-sm" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
	<span class="avatar avatar-md" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
	<span class="avatar avatar-lg" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
	<span class="avatar avatar-xl" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
	<span class="avatar avatar-xxl" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
											<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
											<span class="avatar avatar-lg brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
											<span class="avatar avatar-xl brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
											<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar avatar-sm brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
	<span class="avatar avatar-lg brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
	<span class="avatar avatar-xl brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
	<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
											<span class="avatar avatar-md bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
											<span class="avatar avatar-lg bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
											<span class="avatar avatar-xl bradius" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
											<span class="avatar avatar-xxl bradius" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar avatar-sm bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
	<span class="avatar avatar-md bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
	<span class="avatar avatar-lg bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
	<span class="avatar avatar-xl bradius" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
	<span class="avatar avatar-xxl bradius" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
		<span class="avatar-status"></span>
	</span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
		<span class="avatar-status"></span>
	</span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element9"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list">
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
		<span class="avatar-status"></span>
	</span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element9"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
											<span class="avatar">+8</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element10"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list avatar-list-stacked">
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
	<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
	<span class="avatar">+8</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element10"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar brround">+8</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element11"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list avatar-list-stacked">
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
	<span class="avatar brround">+8</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element11"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar bradius">+8</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element12"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="avatar-list avatar-list-stacked">
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
	<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
	<span class="avatar bradius">+8</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element12"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection