@extends('layouts.master')
@section('css')
		<!-- INTERNAL Cookies css -->
		<link href="{{URL::asset('assets/plugins/cookies/accept-cookies-rtl.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/cookies/cookies.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Cookies</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Cookies</a></li>
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
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Position
										</div>
									</div>
									<div class="card-body">
										<div class="btn-list  position-buttons">
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="topleft">Top Left Cookie</a>
											<a href="#" class="btn btn-secondary position-button mg-t-5" data-position="top">Top Cookie</a>
											<a href="#" class="btn btn-success position-button mg-t-5" data-position="topright">Top Right Cookie</a>
											<a href="#" class="btn btn-warning position-button mg-t-5" data-position="bottomleft">Bottom Left Cookie</a>
											<a href="#" class="btn btn-info position-button mg-t-5" data-position="bottom">Bottom Cookie</a>
											<a href="#" class="btn btn-danger position-button mg-t-5" data-position="bottomright">Bottom Right Cookie</a>
											<a href="#" class="btn btn-teal option-button mg-t-5" data-option="default">Default Cookie</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Cookies Background
										</div>
									</div>
									<div class="card-body">
										<div id="theme-buttons" class="btn-list theme-buttons">
											<a href="#" class="btn btn-light theme-button mg-t-5" data-theme1="theme-light">Light</a>
											<a href="#" class="btn btn-dark theme-button mg-t-5" data-theme1="theme-dark">Dark</a>
											<a href="#" class="btn btn-primary theme-button mg-t-5" data-theme1="theme-primary">primary</a>
											<a href="#" class="btn btn-info theme-button mg-t-5" data-theme1="theme-info">Info</a>
											<a href="#" class="btn btn-danger theme-button mg-t-5" data-theme1="theme-danger">Danger</a>
											<a href="#" class="btn btn-success theme-button mg-t-5" data-theme1="theme-success">Success</a>
											<a href="#" class="btn btn-warning theme-button mg-t-5" data-theme1="theme-warning">Warning</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Customize Cookie Text
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="customHeader" id="customHeader" value="" placeholder="Popup Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customSubHeader" id="customSubHeader" value="" placeholder="Popup Sub Header Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customAccept" id="customAccept" value="" placeholder="Accept Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMore" id="customLearnMore" value="" placeholder="Learn More Button Text...">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="customLearnMoreInfo" id="customLearnMoreInfo" value="" placeholder="Learn More Info Text...">
												</div>
												<div class="">
													<a href="#" class="btn btn-primary px-6 option-button" data-option="customtext">Apply</a>
												</div>
											</div>
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
		<!-- INTERNAL Cookies js-->
		<script src="{{URL::asset('assets/plugins/cookies/cookiepopup.js')}}"></script>
		<script src="{{URL::asset('assets/js/cookie.js')}}"></script>
@endsection