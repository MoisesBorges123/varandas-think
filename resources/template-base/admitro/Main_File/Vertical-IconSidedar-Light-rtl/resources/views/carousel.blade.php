@extends('layouts.master')
@section('css')
		<!-- Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Carousel</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Carousel</a></li>
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
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel</h3>
									</div>
									<div class="card-body">
										<div id="carousel-default" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-default" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with indicators</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-controls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-controls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-captions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>Secure other greater pleasures</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators1 carousel-indicators carousel-top-indicators">
												<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators1" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators1" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/14.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/15.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/16.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/17.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/18.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators1 carousel-indicators carousel-top-indicators">
		<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators1" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators1" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/14.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/15.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/16.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/17.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/18.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators2 carousel-indicators carousel-top-right-indicators">
												<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators2" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators2" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators2 carousel-indicators carousel-top-right-indicators">
		<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators2" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators2" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators3 carousel-indicators carousel-top-left-indicators">
												<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators3" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators3" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators3 carousel-indicators carousel-top-left-indicators">
		<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators3" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators3" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators4 carousel-indicators carousel-bottom-right-indicators">
												<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators4" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators4" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators4 carousel-indicators carousel-bottom-right-indicators">
		<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators4" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators4" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-left controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators5 carousel-indicators carousel-bottom-left-indicators">
												<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators5" data-slide-to="1" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="2" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="3" class=""></li>
												<li data-target="#carousel-indicators5" data-slide-to="4" class=""></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="9"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators5 carousel-indicators carousel-bottom-left-indicators">
		<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-indicators5" data-slide-to="1" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="2" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="3" class=""></li>
		<li data-target="#carousel-indicators5" data-slide-to="4" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element9"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with Background color captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions2" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/red.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/blue.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/green.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element10"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div id="carousel-captions2" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/red.jpg')}}" data-holder-rendered="true">
			<div class="carousel-caption">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/blue.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/green.jpg')}}" data-holder-rendered="true">
			<div class="carousel-item-background d-none d-md-block"></div>
			<div class="carousel-caption d-none d-md-block">
				<h3>Slide label</h3>
				<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element10"><i class="las la-paste"></i></div>
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