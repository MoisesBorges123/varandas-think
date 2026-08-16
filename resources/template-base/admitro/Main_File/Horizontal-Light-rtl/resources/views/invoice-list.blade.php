@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Invoice List</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Invoice List</a></li>
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
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 mb-4">
												<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Invoice</a>
											</div>
											<div class="col-md-6 col-auto">
												<div class="form-group">
													<div class="input-icon">
														<span class="input-icon-addon">
															<i class="fe fe-search"></i>
														</span>
														<input type="text" class="form-control" placeholder="Search Invoice">
													</div>
												</div>
											</div>
										</div>
										<div class="e-table">
											<div class="table-responsive table-lg">
												<table class="table card-table table-vcenter text-nowrap border mb-0" id="example1">
													<thead>
														<tr>
															<th></th>
															<th>Invoice</th>
															<th>Amount</th>
															<th>Generate Date</th>
															<th>Due Date</th>
															<th>Bill to</th>
															<th>Options</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23543</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$230</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #43245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$640</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #54323</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$241</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #52345</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #65343</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$654</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23654</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$523</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #53245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$324</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #34234</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-bold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 July 2020</span></td>
															<td class="text-nowrap align-middle">
																25 July 2021
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye ml-2 float-right"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
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
            