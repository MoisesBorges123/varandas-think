@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Chartjs Chart</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-bar-chart-2 ml-2 fs-14 float-right mt-1"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Chartjs Chart</a></li>
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
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transparency </div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Gradient Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar3" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- / Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar4" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Bar Chart Style2</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar5" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Vertical Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartLine1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartArea1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartPie" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartDonut" class="h-300"></canvas>
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
		<!-- INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
		<script src="{{URL::asset('assets/js/chart.js')}}"></script>
@endsection