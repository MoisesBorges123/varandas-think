@extends('layouts.master')
@section('css')
		<!-- INTERNALDragula Css -->
		<link href="{{URL::asset('assets/plugins/dragula/dragula.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Dragula Cards</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dragula Cards</a></li>
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
						<div class="examples ">
							<div class="parent1 row">
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{url('/' . $page='profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs ml-3" src="{{URL::asset('assets/images/users/1.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden mb-0 br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="right-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>Website Designing
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>New Orders
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs ml-3" src="{{URL::asset('assets/images/users/13.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Daniel</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{url('/' . $page='profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-events">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-success br-bl-7 br-tl-7"></div>New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											<div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div>Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-status card-status-left bg-danger br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs ml-3" src="{{URL::asset('assets/images/users/1.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<div class="card-status card-status-left bg-blue br-bl-7 br-tl-7"></div>
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-primary br-bl-7 br-tl-7"></div>
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-status card-status-left bg-secondary br-bl-7 br-tl-7"></div>
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{url('/' . $page='profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
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
		<!-- INTERNAL Dragula Js -->
		<script src="{{URL::asset('assets/plugins/dragula/dragula.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/dragula/example.min.js')}}"></script>
@endsection