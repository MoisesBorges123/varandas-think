@extends('layouts.master')
@section('css')
		<!--INTERNAl Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Tooltip</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Tooltip</a></li>
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
								<!-- div -->
								<div class="card" id="Tooltip">
									<div class="card-header">
										<div class="card-title">
											Default Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
		<!---Prism Pre code-->
		<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row  text-center">
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
			</div>
			<div class="col-sm-6 col-lg-3 mb-3">
				<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card" id="Tooltip1">
									<div class="card-header">
										<div class="card-title">
											Color Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label  mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
		<!---Prism Pre code-->
		<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row  text-center">
		<div class="col-sm-6 col-lg-3">
			<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
		</div>
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
			<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!-- /div -->
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAl Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAl Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

		<!-- INTERNAl  popover js -->
        <script src="{{URL::asset('assets/js/popover.js')}}"></script>
@endsection