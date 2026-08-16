@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Height</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-slack ml-2 fs-14 float-right "></i>Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Height</a></li>
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
											Height Values
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="d-flex align-items-center justify-content-center w-150 h-5 bg-gray-100">
												.h-5
											</div>
											<div class="d-flex align-items-center justify-content-center w-150 h-9 bg-gray-100 mr-4">
												.h-9
											</div>
											<div class="d-flex align-items-center justify-content-center w-150 h-200 bg-gray-100 mr-4">
												.h-200
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td class="w-20"><b>Classes</b></td>
														<td><code>.h-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 </td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.h-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>100h | 150 | 200 | 250 | 300 | ... | 500 &nbsp; (step of 50) Bigger Height</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4 mb-0">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.h-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>10 | 15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) % Percentage Height</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection