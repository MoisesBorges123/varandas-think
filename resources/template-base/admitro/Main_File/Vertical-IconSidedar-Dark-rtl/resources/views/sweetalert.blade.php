@extends('layouts.master')
@section('css')
		<!--- INTERNAL Sweetalert css-->
		<link href="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Sweet Alert</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Sweet Alert</a></li>
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
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sample Sweet Alerts</h3>
									</div>
									<div class="card-body">
										<input type='button' class="btn btn-success mt-2" value='success alert' id='click'>
										<input type='button' class="btn btn-warning mt-2" value='Warning alert' id='click1'>
										<input type='button' class="btn btn-danger mt-2" value='Danger alert' id='click2'>
										<input type='button' class="btn btn-info mt-2" value='Info alert' id='click3'>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Forms Sweet-alert</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type='text' class="form-control" placeholder='Title text' id='title'>
										</div>
										<div class="form-group">
											<label>Message</label>
											<input type='text' class="form-control" placeholder='Your message' id='message'>
										</div>
										<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
										<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>&nbsp;
										<input type='button' class="btn btn-info mt-2" value='Alert with image' id='but3'>&nbsp;
										<input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Prompt and confirm box Demo</h3>
									</div>
									<div class="card-body">
										<input type='button' class="btn btn-secondary" value='Prompt' id='prompt'>
										<input type='button' class="btn btn-primary" value='Confirm' id='confirm'>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
		<!-- INTERNAL Popover js -->
		<script src="{{URL::asset('assets/js/popover.js')}}"></script>

		<!-- INTERNAL Sweet alert js -->
		<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script>
@endsection