@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Apex Chart</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-bar-chart-2 ml-2 fs-14 float-right mt-1"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Apex Chart</a></li>
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
						<div class="row row-deck">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart With Randon data</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart-timeline" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											 <div id="chart" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart2" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart3" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart4" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart5" class="h-300 mh-300 mh-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Radial Bar circle Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart8" class="h-300 mh-300"></div>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Radial Bar circle Chart Multiple</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<div id="chart9" class="h-300 mh-300"></div>
										</div>
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
		<!--INTERNAL Chart js -->
		<script src="{{URL::asset('assets/js/apexcharts-rtl.js')}}"></script>
		<script src="{{URL::asset('assets/js/apexchart-custom.js')}}"></script>
@endsection          