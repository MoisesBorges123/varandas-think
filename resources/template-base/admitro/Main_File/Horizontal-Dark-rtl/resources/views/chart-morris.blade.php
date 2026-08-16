@extends('layouts.master')
@section('css')
		<!-- INTERNAL Morris Charts css -->
		<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Morris Charts</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-bar-chart-2 ml-2 fs-14 float-right mt-1"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Morris Charts</a></li>
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
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar3"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar6"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar7"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card mg-b-md-20">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

					</div>
				</div><!-- end app-content-->
			</div>
            @endsection
@section('js')
		<!--INTERNAL Morris Charts js -->
		<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
		<script src="{{URL::asset('assets/js/morris.js')}}"></script>
@endsection