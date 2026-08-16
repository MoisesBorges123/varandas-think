@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Invoice 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Invoice 01</a></li>
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
								<div class="card overflow-hidden">
									<div class="card-body">
										<h2 class="font-weight-bold">INVOICE</h2>
										<div class="">
											<h5 class="mb-1">Hi <strong>Jessica Allen</strong>,</h5>
											This is the receipt for a payment of <strong>$450.00</strong> (USD) for your works
										</div>

										<div class="card-body pl-0 pr-0">
											<div class="row">
												<div class="col-sm-6">
													<span>Payment No.</span><br>
													<strong>INV23456-234</strong>
												</div>
												<div class="col-sm-6 text-left">
													<span>Payment Date</span><br>
													<strong>July 10, 2020 - 12:20 pm</strong>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row pt-4">
											<div class="col-lg-6 ">
												<p class="h5 font-weight-bold">Bill From</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ltd@example.com
												</address>
											</div>
											<div class="col-lg-6 text-left">
												<p class="h5 font-weight-bold">Bill To</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ctr@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover text-nowrap">
												<tr class=" ">
													<th class="text-center " style="width: 1%"></th>
													<th>Product</th>
													<th class="text-center" style="width: 1%">Qnty</th>
													<th class="text-right" style="width: 1%">Unit Price</th>
													<th class="text-right" style="width: 1%">Amount</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-weight-semibold mb-1">Logo Creation</p>
														<div class="text-muted">Logo and business cards design</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$60.00</td>
													<td class="text-right">$120.00</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-weight-semibold mb-1">Online Store Design &amp; Development</p>
														<div class="text-muted">Design/Development for all popular modern browsers</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-right">$80.00</td>
													<td class="text-right">$240.00</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-weight-semibold mb-1">App Design</p>
														<div class="text-muted">Promotional mobile application</div>
													</td>
													<td class="text-center">1</td>
													<td class="text-right">$40.00</td>
													<td class="text-right">$40.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-left">Subtotal</td>
													<td class="text-right">$400.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-left">Vat Rate</td>
													<td class="text-right">20%</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-left">Vat Due</td>
													<td class="text-right">$50.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-left h4 mb-0">Total Due</td>
													<td class="font-weight-bold text-right h4 mb-0">$450.00</td>
												</tr>
												<tr>
													<td colspan="5" class="text-left">
														<button type="button" class="btn btn-primary" onClick="javascript:window.print();"><i class="si si-wallet float-right ml-2 mt-1"></i> Pay Invoice</button>
														<button type="button" class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-paper-plane float-right ml-2 mt-1"></i> Send Invoice</button>
														<button type="button" class="btn btn-info" onClick="javascript:window.print();"><i class="si si-printer float-right ml-2 mt-1"></i> Print Invoice</button>
													</td>
												</tr>
											</table>
										</div>
										<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
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