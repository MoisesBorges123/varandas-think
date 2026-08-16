@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Product Details</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-shopping-cart ml-2 fs-14 float-right mt-1"></i>E-Commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Product Details</a></li>
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
							<div class="col-md-12 wrapper wrapper-content">
								<div class="ibox card">
									<div class="card-body">
										<div class="ibox-content">
											<div class="row mb-3">
												<div class="col-md-12 col-lg-12">
													<div class="row">
														<div class="col-md-4">
															<div class="bg-light text-center br-4">
																<div class="p-2">
																	<img src="{{URL::asset('assets/images/products/8.jpg')}}" alt="img" class="img-fluid w-100">
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<h3 class="mb-1">
																<a href="#" class="text-navy">
																	Apple Desktop
																</a>
															</h3>
															<div class="mb-3">
																<a href="#"><i class="fa fa-star text-warning"></i></a>
																<a href="#"><i class="fa fa-star text-warning"></i></a>
																<a href="#"><i class="fa fa-star text-warning"></i></a>
																<a href="#"><i class="fa fa-star text-warning"></i></a>
																<a href="#"><i class="fa fa-star-o text-warning"></i></a>
																<span class="fs-16 ml-3">3.5 <small>(45 Reviews)</small></span>
															</div>
															<div>
																<h5>Description</h5>
																<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
																<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															</div>
															<h3 class="font-weight-bold fs-30">$67,984 <del class="h5 font-weight-normal">$71,450</del></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
										<h5>Specification</h5>
										<table class="table table-striped table-bordered">
											<tbody>
												<tr>
													<th scope="row">Brand</th>
													<td>Apple</td>
												</tr>
												<tr>
													<th scope="row">Model Number</th>
													<td>A14186689</td>
												</tr>
												<tr>
													<th scope="row">Series</th>
													<td>iMac</td>
												</tr>
												<tr>
													<th scope="row">Color</th>
													<td>White </td>
												</tr>
											</tbody>
										</table>
										<h5>Dimensions</h5>
										<table class="table table-striped table-bordered">
											<tbody>
												<tr>
													<th scope="row">Width</th>
													<td>6.1 inch</td>
												</tr>
												<tr>
													<th scope="row">Height</th>
													<td>24 inch</td>
												</tr>
												<tr>
													<th scope="row">Depth</th>
													<td>6.1 inch</td>
												</tr>
												<tr>
													<th scope="row">Other Dimensions</th>
													<td>15.5*15.5*24CM</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="ibox-content card-footer text-left">
										<a href="{{url('/' . $page='cart')}}" class="btn btn-success">Buy Now</a>
										<a href="{{url('/' . $page='cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart mr-1"></i> Add to cart</a>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Reviews</div>
									</div>
									<div class="card-body">
										<div class="media mb-5 mt-0">
											<div class=" ml-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/users/5.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-0">Gavin Murray</h5>
												<div class="text-warning mb-0">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<p class="font-13 text-muted mb-0">Good Looking.........</p>
												<a href=""><span class="badge btn-light badge-pill">Reply</span></a>
											</div>
										</div>
										<div class="media mb-5">
											<div class=" ml-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/users/15.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-0">Paul Smith</h5>
												<div class="text-warning mb-0">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<p class="font-13 text-muted mb-0">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
												<a href=""><span class="badge btn-light badge-pill">Reply</span></a>
											</div>
										</div>
										<h5 class="mb-3">Add Review</h5>
										<form class="form-horizontal  m-t-20" action="{{url('/' . $page='index')}}">
											<div class="form-group">
												<div class="col-xs-12">
													<input class="form-control" type="text" required="" placeholder="Username*">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-12">
													<input class="form-control" type="email" required="" placeholder="Email*">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-12">
													<textarea class="form-control" rows="5">Your Review*</textarea>
												</div>
											</div>
											<div class="">
												<a href="#" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection