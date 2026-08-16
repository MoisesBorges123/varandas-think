@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Invoice Edit</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Invoice Edit</a></li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Invoice</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Invoice Title</label>
														<input class="form-control" placeholder="Invoice title" value="Invoice">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Subject</label>
														<textarea class="form-control" rows="4" placeholder="Subject of Invoice">Hi Jessica Allen,This is the receipt for a payment of $450.00 (USD) for your works
														</textarea>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Number</label>
														<input class="form-control" placeholder="Payment Number" value="23543">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Date</label>
														<input class="form-control"  type="number" value="" placeholder="dd-mm-yy">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Bill To</label>
														<textarea class="form-control" rows="4" placeholder="Bill To">Street Address, State, City, Region, Postal Code, ctr@example.com
														</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table nowrap text-nowrap border mt-5">
												<thead>
													<tr>
														<th>PRODUCT</th>
														<th class="w-40">DESCRIPTION</th>
														<th>QNTY</th>
														<th>UNIT PRICE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input class="form-control" placeholder="" type="text" value="Logo Creation"></td>
														<td><textarea rows="1" class="form-control">Logo and business cards design</textarea></td>
														<td><input class="form-control" placeholder="" type="text" value="2"></td>
														<td><input class="form-control" placeholder="" type="text" value="$60.00"></td>
														<td><input class="form-control" placeholder="" type="text" value="$120.00"></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td><a class="btn btn-light" href="#"><i class="fe fe-plus"></i> Add Product</a></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<label class="form-label">Vat Rate</label>
												<input class="form-control" placeholder="Vat Rate" type="text" value="20%">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col">
												<a class="btn btn-success" href="#">Save</a>
												<a class="btn btn-light" href="#">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection