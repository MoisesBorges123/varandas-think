@extends('layouts.master')
@section('css')
		<!-- INTERNAL Images-Comparsion css -->
		<link href="{{URL::asset('assets/plugins/images-comparsion/twentytwenty-rtl.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Image Comparison</h4>
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
							<div class="col-lg-12">
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container">
											<img src="{{URL::asset('assets/images/photos/about.jpg')}}" alt="img" />
											<img src="{{URL::asset('assets/images/photos/about2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Vertical Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container" data-orientation="vertical">
											<img src="{{URL::asset('assets/images/photos/login.jpg')}}" alt="img" />
											<img src="{{URL::asset('assets/images/photos/login2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Images-Comparsion js -->
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{URL::asset('assets/js/image-comparision.js')}}"></script>
@endsection
