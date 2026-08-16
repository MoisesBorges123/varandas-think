@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Footers</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Footers</a></li>
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
						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Footer style01</div>
									</div>
									<div class="">
										<div class="footer br-bl-7 br-br-7 border-top-0">
											<div class="container">
												<div class="row align-items-center">
													<div class="social">
														<ul class="text-center">
															<li>
																<a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
															</li>
															<li>
																<a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
															</li>
															<li>
																<a class="social-icon" href=""><i class="fa fa-rss"></i></a>
															</li>
															<li>
																<a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
															</li>
															<li>
																<a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
															</li>
															<li>
																<a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
															</li>
														</ul>
													</div>
													<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
														Copyright © 2020 <a href="{{url('/' . $page='#')}}">Admintro</a>. Designed by <a href="{{url('/' . $page='#')}}">Spruko Technologies Pvt.Ltd</a> All rights reserved.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Footer style02</div>
									</div>
									<div class="">
										<div class="footer br-bl-7 br-br-7 border-top-0">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg-6 col-sm-12  col-md-5 mt-3 mt-lg-0 text-center d-none d-md-block">
														<div class="social">
															<ul class="text-center m-0">
																<li>
																	<a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
																</li>
																<li>
																	<a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
																</li>
																<li>
																	<a class="social-icon" href=""><i class="fa fa-rss"></i></a>
																</li>
																<li>
																	<a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
																</li>
																<li>
																	<a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
																</li>
																<li>
																	<a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-lg-6 col-sm-12 col-md-7 mt-3 mt-lg-0 text-md-left">
														Copyright © 2020 <a href="{{url('/' . $page='#')}}">Admintro</a>.All rights reserved.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div class="card-title">Footer style03</div>
									</div>
									<div class="">
										<div class="footer br-bl-7 br-br-7 border-top-0 p-0">
											<div class="">
												<div class="p-3">
													<div class="row align-items-center text-center">
														<div class="col-lg-6 col-md-6 d-none d-md-block ">
															<div class="social">
																<ul class="text-center m-0 ">
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-rss"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 text-left privacy">
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >Privacy</a>
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >Terms</a>
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >About Us</a>
														</div>
													</div>
												</div>
												<div class="row align-items-center flex-row-reverse border-top">
													<div class="col-lg-12 col-sm-12 mt-lg-0 text-center p-3">
														Copyright © 2020 <a href="{{url('/' . $page='#')}}">Admintro</a>. Designed by <a href="{{url('/' . $page='#')}}">Spruko Technologies Pvt.Ltd</a> All rights reserved.
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
						</div>
						<!-- End Row -->
						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div class="card-title">Footer style 04</div>
									</div>
									<div class="">
										<div class="footer br-bl-7 br-br-7 border-top-0 p-0">
											<div class="container">
												<div class="p-4">
													<div class="row align-items-center">
														<div class="col-lg-6 col-md-6 d-md-block ">
															Copyright © 2020 <a href="{{url('/' . $page='#')}}">Admintro</a>.
														</div>
														<div class="col-lg-6 col-md-6 text-left privacy">
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >Privacy</a>
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >Terms</a>
															<a href="{{url('/' . $page='#')}}" class="btn btn-link" >About Us</a>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Footer style04</div>
									</div>
									<div class="">
										<div class="footer br-bl-7 br-br-7 border-top-0">
											<div class="container">
												<div class="row align-items-center flex-row-reverse">
													<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
														Copyright © 2020 <a href="{{url('/' . $page='#')}}">Admintro</a>. Designed by <a href="{{url('/' . $page='#')}}">Spruko Technologies Pvt.Ltd</a> All rights reserved.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection