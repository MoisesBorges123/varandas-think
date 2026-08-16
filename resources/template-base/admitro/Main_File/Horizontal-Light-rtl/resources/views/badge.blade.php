@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Badges</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Badges</a></li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Badges</h3>
									</div>
									<div class="card-body">
										<h1>Heading 01 <span class="badge badge-default">New</span></h1>
										<h2>Heading 02 <span class="badge badge-default">New</span></h2>
										<h3>Heading 03 <span class="badge badge-default">New</span></h3>
										<h4>Heading 04 <span class="badge badge-default">New</span></h4>
										<h5>Heading 05 <span class="badge badge-default">New</span></h5>
										<h6>Heading 06 <span class="badge badge-default">New</span></h6>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><h1>Heading 01 <span class="badge badge-default">New</span></h1>
<h2>Heading 02 <span class="badge badge-default">New</span></h2>
<h3>Heading 03 <span class="badge badge-default">New</span></h3>
<h4>Heading 04 <span class="badge badge-default">New</span></h4>
<h5>Heading 05 <span class="badge badge-default">New</span></h5>
<h6>Heading 06<span class="badge badge-default">New</span></h6></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Colored Badges</h3>
									</div>
									<div class="card-body">
										<h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
										<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
										<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
										<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
										<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
										<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
<h6  class="text-secondary">Heading 06<span class="badge badge-secondary">New</span></h6></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual variations</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-default mt-2">Default</span>
										<span class="badge badge-primary mt-2">Primary</span>
										<span class="badge badge-success mt-2">Success</span>
										<span class="badge badge-info mt-2">Info</span>
										<span class="badge badge-warning mt-2">Warning</span>
										<span class="badge badge-danger mt-2">Danger</span>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><span class="badge badge-default mt-2">Default</span>
<span class="badge badge-primary mt-2">Primary</span>
<span class="badge badge-success mt-2">Success</span>
<span class="badge badge-info mt-2">Info</span>
<span class="badge badge-warning mt-2">Warning</span>
<span class="badge badge-danger mt-2">Danger</span></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pill Badges</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-pill badge-default mt-2">Default</span>
										<span class="badge badge-pill badge-primary mt-2">Primary</span>
										<span class="badge badge-pill badge-success mt-2">Success</span>
										<span class="badge badge-pill badge-info mt-2">Info</span>
										<span class="badge badge-pill badge-warning mt-2">Warning</span>
										<span class="badge badge-pill badge-danger mt-2">Danger</span>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><span class="badge badge-pill badge-default mt-2">Default</span>
<span class="badge badge-pill badge-primary mt-2">Primary</span>
<span class="badge badge-pill badge-success mt-2">Success</span>
<span class="badge badge-pill badge-info mt-2">Info</span>
<span class="badge badge-pill badge-warning mt-2">Warning</span>
<span class="badge badge-pill badge-danger mt-2">Danger</span></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">light Badges</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-primary-light mt-2">Primary</span>
										<span class="badge badge-success-light mt-2">Success</span>
										<span class="badge badge-secondary-light mt-2">secondary</span>
										<span class="badge badge-warning-light mt-2">Warning</span>
										<span class="badge badge-info-light mt-2">Info</span>
										<span class="badge badge-danger-light mt-2">Danger</span>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><span class="badge badge-primary-light mt-2">Primary</span>
<span class="badge badge-success-light mt-2">Success</span>
<span class="badge badge-secondary-light mt-2">secondary</span>
<span class="badge badge-warning-light mt-2">Warning</span>
<span class="badge badge-info-light mt-2">Info</span>
<span class="badge badge-danger-light mt-2">Danger</span></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Graident Badges</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-gradient-primary mt-2">Primary</span>
										<span class="badge badge-gradient-success mt-2">Success</span>
										<span class="badge badge-gradient-secondary mt-2">secondary</span>
										<span class="badge badge-gradient-warning mt-2">Warning</span>
										<span class="badge badge-gradient-info mt-2">Info</span>
										<span class="badge badge-gradient-danger mt-2">Danger</span>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><span class="badge badge-gradient-primary mt-2">Primary</span>
<span class="badge badge-gradient-success mt-2">Success</span>
<span class="badge badge-gradient-secondary mt-2">secondary</span>
<span class="badge badge-gradient-warning mt-2">Warning</span>
<span class="badge badge-gradient-info mt-2">Info</span>
<span class="badge badge-gradient-danger mt-2">Danger</span></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row-->
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-default">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Default badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-success">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Success badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-radius offer-primary">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Primary badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-info mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Info Badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-warning mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Warning badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-radius offer-danger mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Danger Badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
							<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-default">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Default badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-success">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Success badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-radius offer-primary">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Primary badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-info mb-6">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Info Badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-warning mb-6">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Warning badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-lg-4">
	<div class="offer offer-radius offer-danger mb-6">
		<div class="shape">
			<div class="shape-text">
				top
			</div>
		</div>
		<div class="offer-content">
			<h3 class="lead font-weight-semibold">
				Danger Badge
			</h3>
			<p class="mb-0">
				And a little description.
				<br> and so one
			</p>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
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