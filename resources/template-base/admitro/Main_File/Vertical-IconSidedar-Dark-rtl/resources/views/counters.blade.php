@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Counters</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Accordion</a></li>
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
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-info-transparent text-info"><i class="las la-users"></i></span>
										<h5 class="mt-4">Employess</h5>
										<h2 class="counter">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-secondary-transparent text-secondary"><i class="las la-file-invoice-dollar"></i></span>
										<h5 class="mt-4">Profit</h5>
										<h2 class="counter"> 2,56989.32</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xl brround bg-primary-transparent text-primary"><i class="las la-bug"></i></span>
										<h5 class="mt-4">Errors</h5>
										<h2 class="counter">0.8998</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time Counting From 0</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-light p-3 br-3 mt-4 text-center">
											<span id="timer-countup" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time Counting From 60 to 20</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-light p-3 br-3 mt-4 text-center">
											<span id="timer-countinbetween" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4 class="font-weight-bold"><a href="#">Time 1 minute counter</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="bg-light p-3 br-3 mt-4 text-center">
											<span id="timer-countercallback" class="h4  mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Counting days Limit</h3>
									</div>
									<div class="card-body text-center">
										<div class="bg-teal p-3 br-3 text-center">
											<span id="timer-outputpattern" class="h3 text-white mb-0 font-weight-bold"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Day Counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="under-countdown row">
											<div class="col">
												<div class="countdown">
													<span class="days">35</span>
													<span class="">Days</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown bg-secondary">
													<span class="hours">17</span>
													<span class="">Hours</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown bg-info">
													<span class="minutes">50</span>
													<span class="">Minutes</span>
												</div>
											</div>
											<div class="col">
												<div class="countdown bg-warning">
													<span class="seconds">39</span>
													<span class="">Seconds</span>
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
		<!--INTERNAl Time Counter -->
		<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

		<!--INTERNAl Counters -->
		<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment-timezone.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment-timezone-with-data.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/countdowntime.js')}}"></script>
		<script src="{{URL::asset('assets/js/counterup.js')}}"></script>
@endsection