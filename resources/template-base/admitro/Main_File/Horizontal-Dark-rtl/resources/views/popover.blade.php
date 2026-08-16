@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Popover</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Popover</a></li>
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
							<div class="col-lg-12">
								<!--div-->
								<div class="card mb-4" id="popover">
									<div class="card-header">
										<div class="card-title">
											Default Popover
										</div>
									</div>
									<div class="card-body">

										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 border br-3 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-left">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover bs-popover-right">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-lg-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-lg-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card mb-4" id="popover1">
									<div class="card-header">
										<div class="card-title">
											Colored Head Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4">
											<div class="row row-sm">
												<div class="col-md-6">
													<div class="popover popover-head-primary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-5 mt-md-0">
													<div class="popover popover-head-secondary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pt-4 pb-5">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3  mt-3 text-center">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3 text-center">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="head-secondary" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="head-secondary" title="Popover bottom" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="popover2">
									<div class="card-header">
										<div class="card-title">
											Full Colored Popover
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="popover-static-demo mb-4 pb-6">
											<div class="row row-sm">
												<div class="col-md-6 mt-4">
													<div class="popover popover-primary bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-4">
													<div class="popover popover-secondary bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-label mb-2">
											Example
										</div>
										<div class="px-4 bg-light border br-3 pb-5 pt-4">
											<div class="row row-sm text-center">
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Click me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mt-3">
													<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="secondary" title="Popover bottom" type="button">Click me</button>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Click me</button>
		</div>
		<div class="col-sm-6 col-lg-3mt-5 mg-sm-t-0">
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="secondary" title="Popover bottom" type="button">Click me</button>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
							</div>
						</div>
						<!-- End Row -->

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

		<!-- INTERNAL popover js -->
        <script src="{{URL::asset('assets/js/popover.js')}}"></script>
@endsection