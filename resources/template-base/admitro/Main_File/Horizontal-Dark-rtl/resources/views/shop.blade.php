@extends('layouts.master')
@section('css')
		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Products</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-shopping-cart ml-2 fs-14 float-right mt-1"></i>E-Commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Products</a></li>
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
							<div class="col-lg-9">
								<div class="row">
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/1.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (48)</a>
														</div>
														<a class="shop-title">Flower Pot</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$750</span>
														<span class="number-font">$974</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/2.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (32)</a>
														</div>
														<a class="shop-title">Chair</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$1,457</span>
														<span class="number-font">$986</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/3.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (64)</a>
														</div>
														<a class="shop-title">Ladies Shooes</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$967</span>
														<span class="number-font">$724</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/4.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (14)</a>
														</div>
														<a class="shop-title">Laptop</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$34,720</span>
														<span class="number-font">$24,538</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/5.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (22)</a>
														</div>
														<a class="shop-title">Digital Watch</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$1,285</span>
														<span class="number-font">$938</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/6.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (25)</a>
														</div>
														<a class="shop-title">Digital Camera</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$1,678</span>
														<span class="nmber-font">$1,346</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card ">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/7.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (23)</a>
														</div>
														<a class="shop-title">Hand Bag</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,498</span>
														<span class="number-font">$1,967</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/8.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (26)</a>
														</div>
														<a class="shop-title">Desktop</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,678</span>
														<span class="number-font">$1,489</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/9.jpg')}}" alt="img" class="img-fluid w-100">
												</div>
												<div class="card-body px-0 ">
													<div class="cardtitle">
														<div>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-half text-yellow fs-16"></i></a>
															<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
															<a href="#"> (26)</a>
														</div>
														<a class="shop-title">Ladies Kurti</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough number-font">$2,678</span>
														<span class="number-font">$1,489</span>
													</div>
												</div>
											</div>
											<div class="text-center pb-4 pl-4 pr-4">
												<a href="{{url('/' . $page='shop-des')}}" class="btn btn-primary btn-block mb-2"><i class="fe fe-eye mr-1"></i>View More</a>
												<a href="{{url('/' . $page='cart')}}" class="btn btn-secondary btn-block"><i class="fe fe-shopping-cart mr-1"></i>Add to Cart</a>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<ul class="pagination mb-5">
										<li class="disabled page-item">
											<a class="page-link" href="#">‹</a>
										</li>
										<li class="active page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">4</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">5</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">›</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">
													Colors
												</h3>
											</div>
											<div class="card-body">
												<div class="row gutters-xs">
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
															<span class="colorinput-color bg-azure"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="indigo" class="colorinput-input">
															<span class="colorinput-color bg-indigo"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="purple" class="colorinput-input">
															<span class="colorinput-color bg-purple"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="pink" class="colorinput-input">
															<span class="colorinput-color bg-pink"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="red" class="colorinput-input">
															<span class="colorinput-color bg-red"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="yellow" class="colorinput-input">
															<span class="colorinput-color bg-yellow"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="lime" class="colorinput-input">
															<span class="colorinput-color bg-lime"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="green" class="colorinput-input">
															<span class="colorinput-color bg-green"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="teal" class="colorinput-input">
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title"> Categories &amp; Fliters</div>
											</div>
											<div class="card-body">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
													<label for="checkbox-1" class="custom-control-label">Mens</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
													<label for="checkbox-2" class="custom-control-label">Womens</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
													<label for="checkbox-3" class="custom-control-label">Kids</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
													<label for="checkbox-4" class="custom-control-label">Others</label>
												</div>
												<div class="form-group mt-3">
													<label class="form-label">Category</label>
													<select name="beast" id="select-beast" class="form-control custom-select select2-show-search">
														<option value="0">--Select--</option>
														<option value="1">Dress</option>
														<option value="2">Bags &amp; Purses</option>
														<option value="3">Coat &amp; Jacket</option>
														<option value="4">Beauty</option>
														<option value="5">Jeans</option>
														<option value="5">Jewellery</option>
														<option value="5">Electronics</option>
														<option value="5">Sports</option>
														<option value="5">Technology</option>
														<option value="5">Watches</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Brand</label>
													<select name="beast"  class="form-control custom-select select2-show-search">
														<option value="0">--Select--</option>
														<option value="1">White</option>
														<option value="2">Black</option>
														<option value="3">Red</option>
														<option value="4">Green</option>
														<option value="5">Blue</option>
														<option value="6">Yellow</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Type</label>
													<select name="beast"  class="form-control custom-select select2-show-search">
														<option value="0">--Select--</option>
														<option value="1">Extra Small</option>
														<option value="2">Small</option>
														<option value="3">Medium</option>
														<option value="4">Large</option>
														<option value="5">Extra Large</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Color</label>
													<select name="beast"  class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">White</option>
														<option value="2">Black</option>
														<option value="3">Red</option>
														<option value="4">Green</option>
														<option value="5">Blue</option>
														<option value="6">Yellow</option>
													</select>
												</div>
											</div>
											<div class="card-header bg-light">
												<div class="card-title"> Ratings</div>
											</div>
											<div class="card-body">
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
													<label for="checkbox-1" class="custom-control-label">
														<span class="fs-14 ml-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
													<label for="checkbox-1" class="custom-control-label">
														<span class="fs-14 ml-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
													<label for="checkbox-1" class="custom-control-label">
														<span class="fs-14 ml-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control mb-3">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
													<label for="checkbox-1" class="custom-control-label">
														<span class="fs-14 ml-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
															<i class="fa fa-star text-warning"></i>
														</span>
													</label>
												</div>
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
													<label for="checkbox-1" class="custom-control-label">
														<span class="fs-14 ml-2 my-auto">
															<i class="fa fa-star  text-warning"></i>
														</span>
													</label>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary " href="#">Apply Filter</a>
												<a class="btn btn-danger" href="#">Search Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection