@extends('layouts.master')
@section('css')
		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
		<!-- INTERNAL Images-Comparsion css -->
		<link href="{{URL::asset('assets/plugins/img-crop/cropme.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Images-Crop</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Images-Crop</a></li>
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
						<div class="row mt-5" id="app">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Image Crop</div>
									</div>
									<div class="card-body p-0">
										<div class="row no-gutters">
											<div class="col-lg-5 col-xl-6 border-right">
												<div class="pl-7 pb-7 pt-5 pr-5">
													<div id="cropme"></div><!-- Modal -->
													<div aria-hidden="true" class="modal fade" id="cropmeModal" role="dialog" tabindex="-1">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Cropme result</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																</div>
																<div class="modal-body text-center"><img src="" alt="cropme" id="cropme-result"></div>
															</div>
														</div>
													</div>
													<div aria-hidden="true" class="modal fade" id="cropmePosition" role="dialog" tabindex="-1">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Cropme Position output</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																</div>
																<div class="modal-body">
																	<pre><code>{position}</code></pre>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-7 col-xl-6">
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="row">
														<div class="col-md-6 mb-4">
															<div class="title font-weight-semibold text-uppercase mb-3">
																Viewport Type
															</div>
															<select class="form-control  select2">
																<option value="square">
																	square (default)
																</option>
																<option value="circle">
																	circle
																</option>
															</select>
														</div>
														<div class="col-md-6 mb-4">
															<div class="title font-weight-semibold text-uppercase mb-3">
																transform origin center
															</div>
															<select class="form-control select2">
																<option value="image">
																	image
																</option>
																<option value="viewport">
																	viewport (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Border
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">width</label>
															<select class="form-control  select2">
																<option value="2">
																	2 (default)
																</option>
																<option value="5">
																	5
																</option>
																<option value="10">
																	10
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">color</label>
															<select class="form-control  select2">
																<option value="#fff">
																	white (default)
																</option>
																<option value="#f00">
																	red
																</option>
																<option value="#00f">
																	bleu
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Zoom
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">mouseWheel</label>
															<select class="form-control  select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">slider</label>
															<select class="form-control  select2">
																<option>
																	true
																</option>
																<option>
																	false (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="options px-5 pt-5  border-bottom pb-3">
													<div class="title font-weight-semibold text-uppercase mb-3">
														Rotation
													</div>
													<div class="row">
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">enable</label>
															<select class="form-control  select2">
																<option>
																	true (default)
																</option>
																<option>
																	false
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">slider</label>
															<select class="form-control select2">
																<option>
																	true
																</option>
																<option>
																	false (default)
																</option>
															</select>
														</div>
														<div class="col-md-4 mb-4">
															<label class="text-capitalize">Position</label>
															<select class="form-control select2">
																<option value="left">
																	left
																</option>
																<option value="right">
																	right (default)
																</option>
															</select>
														</div>
													</div>
												</div>
												<div class="btn-list p-3">
													<button class="btn btn-danger" @click="reset">Reset</button>
													<button class="btn btn-success float-left"  @click="crop">Crop me</button>
													<button class="btn btn-primary float-left ml-3" @click="getPosition">Get position</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">

							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

		<!-- INTERNAL Images-Comparsion js -->
		<script src="{{URL::asset('assets/plugins/img-crop/vue.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/img-crop/cropme.js')}}"></script>
		<script src="{{URL::asset('assets/js/img-crop.js')}}"></script>
@endsection