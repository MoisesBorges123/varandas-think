@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Breadcrumbs</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Breadcrumbs</a></li>
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
						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1 active">Home</li>
											<li class="breadcrumb-item1 active">About</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1 active">Library</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1"><a href="#">Library</a></li>
											<li class="breadcrumb-item1 active">Data</li>
										</ol>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>

									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb1">
	<li class="breadcrumb-item1 active">Home</li>
	<li class="breadcrumb-item1 active">About</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1 active">Library</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1"><a href="#">Library</a></li>
	<li class="breadcrumb-item1 active">Data</li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb1">
							<div class="card-header">
								<div class="card-title">
									Custom Styling
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style1 mb-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
							<div class="html-code"><i class="las la-code mr-2"></i> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style1 mb-0">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
						</div>
						<!--/div-->
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb2">
							<div class="card-header">
								<div class="card-title">
									Custom Divider
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style2 mb-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
							<div class="html-code"><i class="las la-code mr-2"></i> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style2 mb-0">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
						</div>
						<!--/div-->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1 bg-blue">
											<li class="breadcrumb-item1 active text-white">Home</li>
											<li class="breadcrumb-item1 active text-white">About</li>
										</ol>
										<ol class="breadcrumb1 bg-secondary">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 active text-white">Library</li>
										</ol>
										<ol class="breadcrumb1 bg-success">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 text-white"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item1 active text-white">Data</li>
										</ol>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb1 bg-blue">
	<li class="breadcrumb-item1 active text-white">Home</li>
	<li class="breadcrumb-item1 active text-white">About</li>
</ol>
<ol class="breadcrumb1 bg-secondary">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1 active text-white">Library</li>
</ol>
<ol class="breadcrumb1 bg-success">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1"><a href="#" class="text-white">Library</a></li>
	<li class="breadcrumb-item1 active text-white">Data</li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>

</figure>
<!---Prism Pre code-->
								</div>
								<div class="card" id="breadcrumb4">
									<div class="card-header">
										<h3 class="card-title">Icon Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb1 border bg-transparent">
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Home</li>
												<li class="breadcrumb-item1 active">About</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#" class=""><i class="fa fa-star-o ml-2" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o ml-2" aria-hidden="true"></i>Library</li>
											</ol>
											<ol class="breadcrumb1 bg-primary mb-0">
												<li class="breadcrumb-item1"><a href="#" class="text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 text-white"><a href="#" class="text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Library</a></li>
												<li class="breadcrumb-item1 active text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Data</li>
											</ol>
										</nav>
									</div>
									<div class="html-code"><i class="las la-code ml-2"></i> Html </div>

<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><nav aria-label="breadcrumb">
	<ol class="breadcrumb1 border bg-transparent">
		<li class="breadcrumb-item1 active"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Home</li>
		<li class="breadcrumb-item1 active">About</li>
	</ol>
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#" class=""><i class="fa fa-star-o ml-2" aria-hidden="true"></i>Home</a></li>
		<li class="breadcrumb-item1 active"><i class="fa fa-star-o ml-2" aria-hidden="true"></i>Library</li>
	</ol>
	<ol class="breadcrumb1 bg-primary mb-0">
		<li class="breadcrumb-item1"><a href="#" class="text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Home</a></li>
		<li class="breadcrumb-item1 text-white"><a href="#" class="text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Library</a></li>
		<li class="breadcrumb-item1 active text-white"><i class="fa fa-star-o ml-2 white-text" aria-hidden="true"></i>Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<!--/div-->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Style Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li><a href="#">Elements</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li><a href="#">Elements</a></li>
	<li class="active"><span>Data</span></li>
</ol></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>

								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Svg Breadcrumb</h3>
									</div>
									<div class="card-body breadcrumb-style4 svg-breadcrumb">
										<ol class="breadcrumb border p-4 mb-4">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item active"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
										</ol>
										<ol class="breadcrumb border p-4 mb-4 bg-light">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item"><a href="#"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/></svg><span class="breadcrumb-icon">Library</span></a></li>
											<li class="breadcrumb-item active"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
										</ol>
										<ol class="breadcrumb p-4 bg-primary br-3 overflow-hidden">
											<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/></svg><span class="breadcrumb-icon">Library</span></a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M13,11.33L18,18H6l5-6.67V6h2 M15.96,4H8.04C7.62,4,7.39,4.48,7.65,4.81L9,6.5v4.17L3.2,18.4C2.71,19.06,3.18,20,4,20h16 c0.82,0,1.29-0.94,0.8-1.6L15,10.67V6.5l1.35-1.69C16.61,4.48,16.38,4,15.96,4L15.96,4z"/></g></svg><span class="breadcrumb-icon">Elements</span></a></li>
											<li class="breadcrumb-item active text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
										</ol>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="card-body breadcrumb-style4 svg-breadcrumb">
	<ol class="breadcrumb border p-4 mb-4">
		<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
		<li class="breadcrumb-item active"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
	</ol>
	<ol class="breadcrumb border p-4 mb-4 bg-light">
		<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
		<li class="breadcrumb-item"><a href="#"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/></svg><span class="breadcrumb-icon">Library</span></a></li>
		<li class="breadcrumb-item active"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
	</ol>
	<ol class="breadcrumb p-4 bg-primary br-3 overflow-hidden">
		<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
		<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/></svg><span class="breadcrumb-icon">Library</span></a></li>
		<li class="breadcrumb-item text-white"><a href="#" class="text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M13,11.33L18,18H6l5-6.67V6h2 M15.96,4H8.04C7.62,4,7.39,4.48,7.65,4.81L9,6.5v4.17L3.2,18.4C2.71,19.06,3.18,20,4,20h16 c0.82,0,1.29-0.94,0.8-1.6L15,10.67V6.5l1.35-1.69C16.61,4.48,16.38,4,15.96,4L15.96,4z"/></g></svg><span class="breadcrumb-icon">Elements</span></a></li>
		<li class="breadcrumb-item active text-white"><svg class="svg-icon1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg><span class="breadcrumb-icon">Data</span></li>
	</ol>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>

							</div>
						</div>

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