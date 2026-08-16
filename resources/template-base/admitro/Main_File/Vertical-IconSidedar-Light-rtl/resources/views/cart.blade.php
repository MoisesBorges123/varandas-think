@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Shopping Cart</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-shopping-cart mr-2 fs-14"></i>E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Shopping Cart</a></li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 bootstrap snippets">
								<!-- Cart -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Shopping Cart</h3>
									</div>
									<div class="card-body ">
										<div class="table-responsive ">
											<table class="table table-bordered text-nowrap border-top">
												<thead class="">
													<tr>
														<th>Product Name</th>
														<th class="w-15">Quantity</th>
														<th>Unit Price</th>
														<th>Sub Total</th>
														<th class="w-5"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/1.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold mr-4">flower pot</h6>
															</div>
														</td>
														<td>
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 minus">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text"  name="quantity" class="form-control text-center qty" value="1">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 add" >
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td class="price number-font1">$ 122.21</td>
														<td class="number-font1">$ 122.21</td>
														<td class="text-center">
															<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
															<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/8.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold mr-4">Desktop</h6>
															</div>
														</td>
														<td>
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 minus">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text"  name="quantity" class="form-control text-center qty" value="2">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 add" >
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td class="price number-font1">$ 20.63</td>
														<td class="number-font1">$ 41.26</td>
														<td class="text-center">
															<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
															<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/9.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold mr-4">Kurti</h6>
															</div>
														</td>
														<td>
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 minus">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text"  name="quantity" class="form-control text-center qty" value="1">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 add" >
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td class="price number-font1">$ 40.63</td>
														<td class="number-font1">$ 40.63</td>
														<td class="text-center">
															<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
															<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/4.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold mr-4">Laptop</h6>
															</div>
														</td>
														<td>
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 minus">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text"  name="quantity" class="form-control text-center qty" value="1">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 add" >
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td class="price number-font1">$ 60.63</td>
														<td class="number-font1">$ 60.63</td>
														<td class="text-center">
															<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
															<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/6.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-bold mr-4">Camera</h6>
															</div>
														</td>
														<td>
															<div class="input-group">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 minus">
																		<i class="fa fa-minus"></i>
																	</button>
																</span>
																<input type="text"  name="quantity" class="form-control text-center qty" value="1">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-light border-0 br-0 add" >
																		<i class="fa fa-plus"></i>
																	</button>
																</span>
															</div>
														</td>
														<td class="price number-font1">$ 63,830.43</td>
														<td class="number-font1">$45,530.43</td>
														<td class="text-center">
															<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
															<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td colspan="3" >Total</td>
														<td class="total h4 mb-0 font-weight-bold number-font" colspan="2">$45,795.16</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-right mt-2">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Apply Coupon">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Apply</button>
												</span>
											</div>
										</div>
										<div class=" float-left">
											<a href="{{url('/' . $page='shop')}}" class="btn btn-info mt-2"><i class="fe fe-arrow-right float-right mt-1 mr-1"></i> Continue Shopping</a>
											<a href="{{url('/' . $page='cart')}}" class="btn btn-primary mt-2">Update Cart</a>
											<a href="#" class="btn btn-secondary mt-2">Checkout <i class="fe fe-arrow-left float-left mt-1 mr-1"></i></a>
										</div>
									</div>
								</div>
								<!-- End Cart -->
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection