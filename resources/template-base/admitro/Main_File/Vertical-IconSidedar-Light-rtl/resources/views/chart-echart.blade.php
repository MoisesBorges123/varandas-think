@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Echarts</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-bar-chart-2 ml-2 fs-14 float-right mt-1"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Echarts</a></li>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart1" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart2" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart3" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart4" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!--End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart5" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart6" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart7" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single smooth line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart8" class="chartsh "></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL ECharts js-->
		<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
		<script src="{{URL::asset('assets/js/echarts.js')}}"></script>
@endsection