@extends('layouts.master')
@section('css')
		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">EditProfile</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">EditProfile</a></li>
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
							<div class="col-xl-3 col-lg-4">
								<div class="card box-widget widget-user">
									<div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
									<div class="card-body text-center pt-2">
										<div class="pro-user">
											<h3 class="pro-user-username text-dark mb-1 fs-22">Jessica</h3>
											<h6 class="pro-user-desc text-muted">Web Designer</h6>
											<div class="text-center mb-4">
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star-half-o text-warning"></i></span>
												<span><i class="fa fa-star-o text-warning"></i></span>
											</div>
											<a href="{{url('/' . $page='profile')}}" class="btn btn-primary mt-3">View Profile</a>
										</div>
									</div>
									<div class="card-footer p-0">
										<div class="row">
											<div class="col-sm-6 border-right text-center">
												<div class="description-block p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">689k</h5>
													<span class="text-muted">Followers</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="description-block text-center p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">3,765</h5>
													<span class="text-muted">Following</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Password</div>
									</div>
									<div class="card-body">
										<div class="text-center mb-5">
											<div class="widget-user-image">
												<img alt="User Avatar" class="rounded-circle  mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Change Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" value="password">
										</div>
									</div>
									<div class="card-footer text-left">
										<a href="#" class="btn btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancle</a>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Profile</div>
									</div>
									<div class="card-body">
										<div class="card-title font-weight-bold">Basci info:</div>
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone Number</label>
													<input type="number" class="form-control" placeholder="Number">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control select2">
														<optgroup label="Categories">
															<option data-select2-id="5">--Select--</option>
															<option value="1">Germany</option>
															<option value="2">Real Estate</option>
															<option value="3">Canada</option>
															<option value="4">Usa</option>
															<option value="5">Afghanistan</option>
															<option value="6">Albania</option>
															<option value="7">China</option>
															<option value="8">Denmark</option>
															<option value="9">Finland</option>
															<option value="10">India</option>
															<option value="11">Kiribati</option>
															<option value="12">Kuwait</option>
															<option value="13">Mexico</option>
															<option value="14">Pakistan</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
										<div class="card-title font-weight-bold mt-5">External Links:</div>
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Facebook</label>
													<input type="text" class="form-control" placeholder="https://www.facebook.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Google</label>
													<input type="text" class="form-control" placeholder="https://www.google.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Twitter</label>
													<input type="text" class="form-control" placeholder="https://twitter.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Pinterest</label>
													<input type="text" class="form-control" placeholder="https://in.pinterest.com/">
												</div>
											</div>
										</div>
										<div class="card-title font-weight-bold mt-5">About:</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">About Me</label>
													<textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-left">
										<a href="#" class="btn  btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancle</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection