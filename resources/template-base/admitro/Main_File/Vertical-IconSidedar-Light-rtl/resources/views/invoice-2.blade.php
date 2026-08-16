@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Invoice 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Invoice</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Invoice 02</a></li>
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
									<div class="card-body">
										<div class="invoice-header text-right d-block mb-5">
											<h1 class="invoice-title font-weight-bold text-uppercase mb-1">Invoice</h1>

										</div><!-- invoice-header -->
										<div class="row mt-4">
											<div class="col-md">
												<label class="font-weight-bold">Billed To</label>
												<div class="billed-to">
													<h6>Goerge</h6>
													<p>2406  Raoul Wallenberg Place<br>
													Tel No: 203-875-4147<br>
													Email: goerge234@gmail.com</p>
												</div>
											</div>
											<div class="col-md">
												<div class="billed-from text-md-left">
													<label class="font-weight-bold">Billed From</label>
													<h6>Spruko Technologies Pvt Ltd.</h6>
													<p>201 Something St., Something Town, YT 242, Country 6546<br>
													Tel No: 324 445-4544<br>
													Email: info@spruko.com</p>
												</div><!-- billed-from -->
											</div>
										</div>
										<div class="table-responsive mt-4">
											<table class="table table-bordered border text-nowrap mb-0">
												<thead>
													<tr>
														<th class="wd-20p">Product</th>
														<th class="tx-center">QNTY</th>
														<th class="tx-right">Unit Price</th>
														<th class="tx-right">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="font-weight-bold">Website design & development</td>
														<td class="tx-center">6</td>
														<td class="tx-right">$250.00</td>
														<td class="tx-right">$1500.00</td>
													</tr>
													<tr>
														<td class="font-weight-bold">Branding</td>
														<td class="tx-center">1</td>
														<td class="tx-right">$900.00</td>
														<td class="tx-right">$900.00</td>
													</tr>
													<tr>
														<td class="font-weight-bold">Redesign Service</td>
														<td class="tx-center">1</td>
														<td class="tx-right">$500.00</td>
														<td class="tx-right">$500.00</td>
													</tr>
													<tr>
														<td class="font-weight-bold">Wordpress Plugins</td>
														<td class="tx-center">5</td>
														<td class="tx-right">$360.00</td>
														<td class="tx-right">$1800.00</td>
													</tr>
													<tr>
														<td class="valign-middle" colspan="2" rowspan="4">
															<div class="invoice-notes">
																<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																<p> voluptatum deleniti atque corrupti explicabo.</p>
															</div><!-- invoice-notes -->
														</td>
														<td class="tx-right font-weight-semibold">Sub-Total</td>
														<td class="tx-right font-weight-semibold">$4700.00</td>
													</tr>
													<tr>
														<td class="tx-right font-weight-semibold">Tax (5%)</td>
														<td class="tx-right font-weight-semibold">$235.50</td>
													</tr>
													<tr>
														<td class="tx-right font-weight-semibold">Discount</td>
														<td class="tx-right font-weight-semibold">-$50.00</td>
													</tr>
													<tr>
														<td class="text-uppercase font-weight-semibold">Total Due</td>
														<td class="tx-right">
															<h4 class="text-primary font-weight-bold">$4,885.50</h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-left">
											<button type="button" class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet float-right ml-2 mt-1"></i> Pay Invoice</button>
											<button type="button" class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-paper-plane float-right ml-2 mt-1"></i> Send Invoice</button>
											<button type="button" class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer float-right ml-2 mt-1"></i> Print Invoice</button>
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