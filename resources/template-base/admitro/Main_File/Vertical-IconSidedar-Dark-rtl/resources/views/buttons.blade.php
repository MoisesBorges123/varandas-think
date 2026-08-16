@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Buttons</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Buttons</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Button</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-light">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-success">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-info">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-warning">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-light">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-success">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-info">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-warning">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-light disabled">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-primary disabled">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-secondary disabled">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-success disabled">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-info disabled">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-warning disabled">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-danger disabled">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-light disabled">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-primary disabled">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-secondary disabled">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-success disabled">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-info disabled">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-warning disabled">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-danger disabled">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Square buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-light">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-primary">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-secondary">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-success">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-info">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-warning">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-danger">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-light">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-primary">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-secondary">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-success">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-info">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-warning">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-square btn-danger">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded buttons</h3>

									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-light">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-primary">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-secondary">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-success">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-info">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-warning">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-danger">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-light">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-primary">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-secondary">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-success">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-info">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-warning">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pill btn-danger">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>

							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button Outline buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-light">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-primary">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-secondary">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-success">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-info">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-warning">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-danger">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-light">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-primary">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-secondary">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-success">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-info">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-warning">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-danger">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button Outline Disabled buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-light disabled">Light</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-primary disabled">Primary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-secondary disabled">Secondary</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-success disabled">Success</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-info disabled">Info</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-warning disabled">Warning</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-outline-danger disabled">Danger</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-light disabled">Light</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-primary disabled">Primary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-secondary disabled">Secondary</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-success disabled">Success</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-info disabled">Info</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-warning disabled">Warning</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-outline-danger disabled">Danger</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with icon</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-dark"><i class="fe fe-upload ml-2 float-right mt-1"></i>Upload</button>
											<button type="button" class="btn btn-warning"><i class="fe fe-heart ml-2 float-right mt-1"></i>I like</button>
											<button type="button" class="btn btn-success"><i class="fe fe-check ml-2 float-right mt-1"></i>I agree</button>
											<button type="button" class="btn btn-primary"><i class="fe fe-plus ml-2 float-right mt-1"></i>More</button>
											<button type="button" class="btn btn-danger"><i class="fe fe-link ml-2 float-right mt-1"></i>Link</button>
											<button type="button" class="btn btn-info"><i class="fe fe-message-circle ml-2 float-right mt-1"></i>Comment</button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-dark"><i class="fe fe-upload ml-2 float-right mt-1"></i>Upload</button>
	<button type="button" class="btn btn-warning"><i class="fe fe-heart ml-2 float-right mt-1"></i>I like</button>
	<button type="button" class="btn btn-success"><i class="fe fe-check ml-2 float-right mt-1"></i>I agree</button>
	<button type="button" class="btn btn-primary"><i class="fe fe-plus ml-2 float-right mt-1"></i>More</button>
	<button type="button" class="btn btn-danger"><i class="fe fe-link ml-2 float-right mt-1"></i>Link</button>
	<button type="button" class="btn btn-info"><i class="fe fe-message-circle ml-2 float-right mt-1"></i>Comment</button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with Svg icon</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-dark btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path></svg><span class="btn-svg-text">File</span></button>
											<button type="button" class="btn btn-warning btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"></path><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"></path></svg> <span class="btn-svg-text">Download</span></button>
											<button type="button" class="btn btn-success btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 8h14V6H5z" opacity=".3"></path><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"></path></svg> <span class="btn-svg-text">Calendar</span></button>
											<button type="button" class="btn btn-primary btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"></path><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path></svg> <span class="btn-svg-text">Like</span></button>
											<button type="button" class="btn btn-danger  btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="18" cy="5" opacity=".3" r="1"></circle><circle cx="6" cy="12" opacity=".3" r="1"></circle><circle cx="18" cy="19.02" opacity=".3" r="1"></circle><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg><span class="btn-svg-text"> Share</span></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element71"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-dark btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path></svg><div class="btn-svg-text">File</div></button>
	<button type="button" class="btn btn-warning btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"></path><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"></path></svg> <span class="btn-svg-text">Download</span></button>
	<button type="button" class="btn btn-success btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 8h14V6H5z" opacity=".3"></path><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"></path></svg> <span class="btn-svg-text">Calendar</span></button>
	<button type="button" class="btn btn-primary btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"></path><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path></svg> <span class="btn-svg-text">Like</span></button>
	<button type="button" class="btn btn-danger  btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="18" cy="5" opacity=".3" r="1"></circle><circle cx="6" cy="12" opacity=".3" r="1"></circle><circle cx="18" cy="19.02" opacity=".3" r="1"></circle><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg><span class="btn-svg-text"> Share</span></button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element71"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button with icon-loader</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-dark">Upload <i class="fa fa-upload fa-spin mr-2"></i></button>
											<button type="button" class="btn btn-warning">I like <i class="fa fa-heart fa-spin  mr-2"></i></button>
											<button type="button" class="btn btn-success">I agree <i class="fa fa-check fa-spin  mr-2"></i></button>
											<button type="button" class="btn btn-primary">More <i class="fa fa-plus fa-spin  mr-2"></i></button>
											<button type="button" class="btn btn-danger">Link <i class="fa fa-link fa-spin  mr-2"></i></button>
											<button type="button" class="btn btn-info">Comment <i class="fa fa-comment-o fa-spin  mr-2"></i></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-dark">Upload <i class="fa fa-upload fa-spin mr-2 "></i></button>
	<button type="button" class="btn btn-warning">I like <i class="fa fa-heart fa-spin mr-2 "></i></button>
	<button type="button" class="btn btn-success">I agree <i class="fa fa-check fa-spin mr-2"></i></button>
	<button type="button" class="btn btn-primary">More <i class="fa fa-plus fa-spin mr-2 "></i></button>
	<button type="button" class="btn btn-danger">Link <i class="fa fa-link fa-spin mr-2"></i></button>
	<button type="button" class="btn btn-info">Comment <i class="fa fa-comment-o fa-spin mr-2"></i></button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div  class="row">
							<div class="col-md-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button size</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
											<button type="button" class="btn btn-info  mb-1">Medium button</button>
											<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
											<button type="button" class="btn btn-primary btn-block">Block level button</button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element9"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-warning btn-sm mb-1">Small button</button>
	<button type="button" class="btn btn-info  mb-1">Medium button</button>
	<button type="button" class="btn btn-success btn-lg mb-1">Large button</button>
	<button type="button" class="btn btn-primary btn-block">Block level button</button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element9"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-facebook"><i class="fa fa-facebook ml-2"></i>Facebook</button>
											<button type="button" class="btn btn-twitter"><i class="fa fa-twitter ml-2"></i>Twitter</button>
											<button type="button" class="btn btn-google"><i class="fa fa-google ml-2"></i>Google</button>
											<button type="button" class="btn btn-youtube"><i class="fa fa-youtube ml-2"></i>Youtube</button>
											<button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo ml-2"></i>Vimeo</button>
											<button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble ml-2"></i>Dribble</button>
											<button type="button" class="btn btn-github"><i class="fa fa-github ml-2"></i>Github</button>
											<button type="button" class="btn btn-instagram"><i class="fa fa-instagram ml-2"></i>Instagram</button>
											<button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest ml-2"></i>Pinterest</button>
											<button type="button" class="btn btn-vk"><i class="fa fa-vk ml-2"></i>VKontakte</button>
											<button type="button" class="btn btn-rss"><i class="fa fa-rss ml-2"></i>RSS</button>
											<button type="button" class="btn btn-flickr"><i class="fa fa-flickr ml-2"></i>Flickr</button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element10"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-facebook"><i class="fa fa-facebook ml-2"></i>Facebook</button>
	<button type="button" class="btn btn-twitter"><i class="fa fa-twitter ml-2"></i>Twitter</button>
	<button type="button" class="btn btn-google"><i class="fa fa-google ml-2"></i>Google</button>
	<button type="button" class="btn btn-youtube"><i class="fa fa-youtube ml-2"></i>Youtube</button>
	<button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo ml-2"></i>Vimeo</button>
	<button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble ml-2"></i>Dribble</button>
	<button type="button" class="btn btn-github"><i class="fa fa-github ml-2"></i>Github</button>
	<button type="button" class="btn btn-instagram"><i class="fa fa-instagram ml-2"></i>Instagram</button>
	<button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest ml-2"></i>Pinterest</button>
	<button type="button" class="btn btn-vk"><i class="fa fa-vk ml-2"></i>VKontakte</button>
	<button type="button" class="btn btn-rss"><i class="fa fa-rss ml-2"></i>RSS</button>
	<button type="button" class="btn btn-flickr"><i class="fa fa-flickr ml-2"></i>Flickr</button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element10"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color variations</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="{{url('/' . $page='#')}}" class="btn btn-blue">Blue</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-azure">Azure</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-indigo">Indigo</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-purple">Purple</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-pink">Pink</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-red">Red</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-orange">Orange</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-yellow">Yellow</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-lime">Lime</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-green">Green</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-teal">Teal</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-cyan">Cyan</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-gray">Gray</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-gray-dark">Dark gray</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element11"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<a href="{{url('/' . $page='#')}}" class="btn btn-blue">Blue</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-azure">Azure</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-indigo">Indigo</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-purple">Purple</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-pink">Pink</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-red">Red</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-orange">Orange</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-yellow">Yellow</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-lime">Lime</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-green">Green</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-teal">Teal</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-cyan">Cyan</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-gray">Gray</a>
	<a href="{{url('/' . $page='#')}}" class="btn btn-gray-dark">Dark gray</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element11"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div  class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Social buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
											<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
											<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
											<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
											<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
											<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
											<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
											<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
											<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element12"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
	<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
	<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
	<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
	<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
	<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
	<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
	<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
	<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element12"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-icon btn-primary"><i class="fe fe-activity"></i></button>
											<button type="button" class="btn btn-icon btn-github"><i class="fe fe-github"></i></button>
											<button type="button" class="btn btn-icon btn-success"><i class="fe fe-bell"></i></button>
											<button type="button" class="btn btn-icon btn-warning"><i class="fe fe-star"></i></button>
											<button type="button" class="btn btn-icon btn-danger"><i class="fe fe-trash"></i></button>
											<button type="button" class="btn btn-icon btn-purple"><i class="fe fe-bar-chart"></i></button>
											<button type="button" class="btn btn-icon btn-secondary"><i class="fe fe-git-merge"></i></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element13"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-icon btn-primary"><i class="fe fe-activity"></i></button>
	<button type="button" class="btn btn-icon btn-github"><i class="fe fe-github"></i></button>
	<button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
	<button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
	<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
	<button type="button" class="btn btn-icon btn-purple"><i class="fe fe-bar-chart"></i></button>
	<button type="button" class="btn btn-icon btn-secondary"><i class="fe fe-git-merge"></i></button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element13"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
									<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Svg Icon Buttons</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button type="button" class="btn btn-dark btn-icon btn-svg"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 24 24" width="100%"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path></svg></button>
											<button type="button" class="btn btn-warning btn-icon btn-svg"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 24 24" width="100%"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"></path><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"></path></svg></button>
											<button type="button" class="btn btn-success btn-icon btn-svg"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 24 24" width="100%"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 8h14V6H5z" opacity=".3"></path><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"></path></svg></button>
											<button type="button" class="btn btn-primary btn-icon btn-svg"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 24 24" width="100%"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"></path><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path></svg></button>
											<button type="button" class="btn btn-danger btn-icon btn-svg"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 24 24" width="100%"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="18" cy="5" opacity=".3" r="1"></circle><circle cx="6" cy="12" opacity=".3" r="1"></circle><circle cx="18" cy="19.02" opacity=".3" r="1"></circle><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element72"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-dark btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path></svg>File</button>
	<button type="button" class="btn btn-warning btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 19h14V8H5v11zm5.55-6v-3h2.91v3H16l-4 4-4-4h2.55z" opacity=".3"></path><path d="M16 13h-2.55v-3h-2.9v3H8l4 4zm4.54-7.77l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.81.97H5.44l.8-.97zM19 19H5V8h14v11z"></path></svg> Download</button>
	<button type="button" class="btn btn-success btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 8h14V6H5z" opacity=".3"></path><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"></path></svg> Calendar</button>
	<button type="button" class="btn btn-primary btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z" opacity=".3"></path><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path></svg> Like</button>
	<button type="button" class="btn btn-danger  btn-svgs btn-svg-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="18" cy="5" opacity=".3" r="1"></circle><circle cx="6" cy="12" opacity=".3" r="1"></circle><circle cx="18" cy="19.02" opacity=".3" r="1"></circle><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg> Share</button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element72"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Button dropdown</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns  styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
											<div class="example">
												<div class="btn-list">
													<div class="dropdown">
														<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
															<i class="fe fe-calendar"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right ">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown">
														<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
															<i class="fe fe-calendar ml-2"></i>Show calendar
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
													<div class="dropdown">
														<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
															Show calendar
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element14"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="text-wrap">
	<p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns  styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
	<div class="example">
		<div class="btn-list">
			<div class="dropdown">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
					<i class="fe fe-calendar"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
				</div>
			</div>
			<div class="dropdown">
				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
					<i class="fe fe-calendar mr-2"></i>Show calendar
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
				</div>
			</div>
			<div class="dropdown">
				<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
					Show calendar
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
					<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
				</div>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element14"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Loading button</h3>
									</div>
									<div class="card-body">
										<div class="text-wra">
											<p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn btn-primary btn-loading">Button text</button><br>
													<button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
													<button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
													<button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
													<button type="button" class="btn btn-info btn-loading btn-block">Button text</button>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element15"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="btn-list">
	<button type="button" class="btn btn-primary btn-loading">Button text</button><br>
	<button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
	<button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button><br>
	<button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
	<button type="button" class="btn btn-info btn-loading btn-block">Button text</button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element15"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of buttons</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
											<div class="example">
												<div class="btn-list">
													<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-6">
											<p>Use the <code class="highlighter-rouge">.text-center</code>  modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-center">
													<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
										<div class="text-wrap mt-6">
											<p>Use the  <code class="highlighter-rouge">.text-right</code> modifiers to alter the alignment.</p>
											<div class="example">
												<div class="btn-list text-left">
													<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
													<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element16"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="text-wrap">
	<p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
	<div class="example">
		<div class="btn-list">
			<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</div>
<div class="text-wrap mt-6">
	<p>Use the <code class="highlighter-rouge">.text-center</code>  modifiers to alter the alignment.</p>
	<div class="example">
		<div class="btn-list text-center">
			<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</div>
<div class="text-wrap mt-6">
	<p>Use the  <code class="highlighter-rouge">.text-right</code> modifiers to alter the alignment.</p>
	<div class="example">
		<div class="btn-list text-right">
			<a href="{{url('/' . $page='#')}}" class="btn btn-primary">Save changes</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-secondary">Save and continue</a>
			<a href="{{url('/' . $page='#')}}" class="btn btn-danger">Cancel</a>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element16"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<!--div-->
								<div class="card" id="button7">
									<div class="card-header">
										<h3 class="card-title">Group Buttons</h3>
									</div>
									<div class="card-body">
										<div aria-label="Basic example" class="btn-group ml-3 mt-3" role="group">
											<button class="btn btn-secondary active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
										</div>
										<div aria-label="Basic example" class="btn-group ml-3 mt-3" role="group">
											<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
										</div>
										<div aria-label="Basic example" class="btn-group ml-3 mt-3" role="group">
											<button class="btn btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element17"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div aria-label="Basic example" class="btn-group ml-3 mb-3" role="group">
	<button class="btn btn-secondary active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
</div>
<div aria-label="Basic example" class="btn-group ml-3 mb-3" role="group">
	<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
</div>
<div aria-label="Basic example" class="btn-group ml-3 mb-3" role="group">
	<button class="btn btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element17"><i class="las la-paste"></i></div>
</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
							</div>
						</div>
						<!--End Row-->

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