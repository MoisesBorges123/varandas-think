@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">TimeLine</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">TimeLine</a></li>
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
						<div class="row row-sm">
							<div class="col-lg-8">
								<div class="card">
									<div class="tab-menu-heading p-0 border-0">
										<div class="tabs-menu1 px-3">
											<ul class="nav">
												<li><a href="#tab-7" class="active" data-toggle="tab">Post</a></li>
												<li><a href="#tab-8" data-toggle="tab" class="">Albumbs</a></li>
												<li><a href="#tab-9" data-toggle="tab" class="">Videos</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body d-flex border-top">
										<div class="ml-4"><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
										<form class="w-100">
											<textarea class="form-control br-br-0 br-bl-0" placeholder="What are you doing right now?" rows="5"></textarea>
											<div class="profile-share border border-light2 border-top-0">
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic fs-20"></i></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video fs-20"></i></a>
												<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image fs-20"></i></a>
												<button type="submit" class="btn btn-info mt-1 pull-left"><i class="fa fa-share ml-1"></i> Share</button>
											</div>
										</form>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user ml-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-primary">just now</small>
												</div>
											</div>
											<div class="mr-auto">
												<div class="dropdown">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user ml-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-3 mr-2">28 people like your photo</h6>
											</div>
											<div class="mr-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user ml-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-muted">Sep 26 2019, 10:14am</small>
												</div>
											</div>
											<div class="mr-auto">
												<div class="dropdown">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
											<div class="d-flex">
												<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="w-40 m-1">
												<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="w-40 m-1">
											</div>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user ml-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-3 mr-2">28 people like your photo</h6>
											</div>
											<div class="mr-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="d-flex">
											<div class="media mt-0">
												<div class="media-user ml-2">
													<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
												</div>
												<div class="media-body">
													<h6 class="mb-0 mt-1 font-weight-bold">Jessica</h6>
													<small class="text-muted">Sep 24 2019, 09:14am</small>
												</div>
											</div>
											<div class="mr-auto">
												<div class="">
													<a class="pro-option" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#">Edit Post</a>
														<a class="dropdown-item" href="#">Delete Post</a>
														<a class="dropdown-item" href="#">Personal Settings</a>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
											<div class="d-flex">
												<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="w-30 m-1">
												<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="w-30 m-1">
												<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="w-30 m-1">
											</div>
										</div>
										<div class="media mg-t-15 profile-footer">
											<div class="media-user ml-2 mt-1">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+28</span>
												</div>
											</div>
											<div class="media-body">
												<h6 class="mb-0 mt-3 mr-2">28 people like your photo</h6>
											</div>
											<div class="mr-auto">
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-heart"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
												<a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card mg-b-20 card--events">
									<div class="card-header">
										<div class="card-title">
											Trending Posts
										</div>
									</div>
									<div class="card-body p-0">
										<div class="">
											<ul class="list-group mb-0">
												<li class="list-group-item d-flex border-top-0 border-left-0 border-right-0">
													<div class="w-3 h-3 bg-primary ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 20 <span class="font-weight-semibold">Sunday</span></label>
														<h5>New Fests Blog</h5>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 4PM</strong> Rew City, USA</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-secondary ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 18 <span class="font-weight-semibold">Friday</span></label>
														<h6>New Location Visited</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Newyork</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-success ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 12 <span class="font-weight-semibold">Saturday</span></label>
														<h6>Weding Event Dance Show</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Japan</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-warning ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 20 <span class="font-weight-semibold">Friday</span></label>
														<h6>Field day Festival Events Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 4PM</strong> Rew City, USA</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-info ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 25 <span class="font-weight-semibold">Wednesday</span></label>
														<h6>Christamas Party Event Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Newyork</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-danger ml-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 30 <span class="font-weight-semibold">Monday</span></label>
														<h6>New Weding Event Dance Show Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Japan</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAl Timeline js -->
		<script src="{{URL::asset('assets/plugins/timeline/js/jquery.timelify.js')}}"></script>
		<script src="{{URL::asset('assets/js/timeline.js')}}"></script>
@endsection