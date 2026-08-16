@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Display</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-slack ml-2 fs-14 float-right "></i>Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Display</a></li>
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
										<h3 class="card-title">Basic Display</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-inline</code></td>
														<td>Set an inline display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-inline-block</code></td>
														<td>Set an inline-block display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Set a block display property of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hiding Elements</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-40p">Class</th>
														<th class="wd-60p">Screen Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-none</code></td>
														<td>Hidden on all</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block</code></td>
														<td>Hidden only on xs</td>
													</tr>
													<tr>
														<td><code>.d-sm-none .d-md-block</code></td>
														<td>Hidden only on sm</td>
													</tr>
													<tr>
														<td><code>.d-md-none .d-lg-block</code></td>
														<td>Hidden only on md</td>
													</tr>
													<tr>
														<td><code>.d-lg-none .d-xl-block</code></td>
														<td>Hidden only on lg</td>
													</tr>
													<tr>
														<td><code>.d-xl-none</code></td>
														<td>Hidden only on xl</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Visible on all</td>
													</tr>
													<tr>
														<td><code>.d-block .d-sm-none</code></td>
														<td>Visible only on xs</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block .d-md-none</code></td>
														<td>Visible only on sm</td>
													</tr>
													<tr>
														<td><code>.d-none .d-md-block .d-lg-none</code></td>
														<td>Visible only on md</td>
													</tr>
													<tr>
														<td><code>.d-none .d-lg-block .d-xl-none</code></td>
														<td>Visible only on lg</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xl-block</code></td>
														<td>Visible only on xl</td>
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