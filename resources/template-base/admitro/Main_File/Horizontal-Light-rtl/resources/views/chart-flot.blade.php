@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Flot Charts</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-bar-chart-2 ml-2 fs-14 float-right mt-1"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Flot Charts</a></li>
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
										<div class="h-300" id="flotBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotBar2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie2"></div>
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
		<!--INTERNAL Flot Charts js-->
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{URL::asset('assets/js/flot.js')}}"></script>
@endsection