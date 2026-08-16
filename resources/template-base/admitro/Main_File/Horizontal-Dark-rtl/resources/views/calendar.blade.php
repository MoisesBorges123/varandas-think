@extends('layouts.master')
@section('css')
		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
		<!-- INTERNAL Fullcalendar css-->
		<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar-rtl.css')}}" rel='stylesheet' />
		<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Full Calendar</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Full Calendar</a></li>
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
						<div class="card">
							<div class="row no-gutters">
								<div class="col-lg-3">
									<div class="card-body p-0">
										<div class="card-header">
											<div class="card-title">Event List</div>
										</div>
										<div class="card-body">
											<nav class="nav main-nav-column main-nav-calendar-event">
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-primary ml-3"></div>
													<div>Calendar Events</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-secondary ml-3"></div>
													<div>Birthday Events</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-success ml-3"></div>
													<div>Holiday Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-info ml-3"></div>
													<div>Other Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-warning ml-3"></div>
													<div>Office Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-danger ml-3"></div>
													<div>Work Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex exclude" href="">
													<div class="w-4 h-4 brround bg-light ml-3"></div>
													<div>Discovered Events</div>
												</a>
											</nav>
											<div class="mt-5">
												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalSetSchedule"><i class="fe fe-plus"></i> Add New Event</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="main-content-body main-content-body-calendar card-body border-right">
										<div class="main-calendar" id="calendar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="{{url('/' . $page='calendar')}}" id="mainFormCalendar" method="post" name="mainFormCalendar">
							<div class="form-group">
								<input class="form-control" placeholder="Add title" type="text">
							</div>
							<div class="form-group d-flex align-items-center">
								<label class="custom-control custom-radio mr-4">
									<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
									<span class="custom-control-label">Event</span>
								</label>
								<label class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="example-radios" value="option1">
									<span class="custom-control-label">Reminder</span>
								</label>
							</div>
							<div class="form-group mg-t-30">
								<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="mainEventStartTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="EventEndTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
							</div>
							<div class="d-flex mg-t-15 mg-lg-t-30">
								<button class="btn btn-primary ml-4" type="submit">Save</button>
								<a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<nav class="nav nav-modal-event">
							<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
							<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
							<a class="nav-link" data-dismiss="modal" href="#">
							<i class="icon ion-md-close"></i></a>
						</nav>
					</div>
					<div class="modal-body">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
								<p class="event-start-date"></p>
							</div>
							<div class="col-sm-6">
								<label class="tx-13 mg-b-2">End Date</label>
								<p class="event-end-date"></p>
							</div>
						</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
						<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
					</div>
				</div>
			</div>
		</div>
        <!-- /Modal -->
@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
		<!-- INTERNAL Full-calendar js-->
		<script src="{{URL::asset('assets/plugins/fullcalendar/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
		<script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>
@endsection