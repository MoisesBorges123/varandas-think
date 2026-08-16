@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Margin</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-slack ml-2 fs-14 float-right "></i>Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Margin</a></li>
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
										<div class="card-title">Margin Positions</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">

												</div>
											</div>
											<div class="w-9 h-9 bg-light mr-4">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-4
												</div>
											</div>
											<div class="w-9 h-9 bg-light mr-7">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-7
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mt-4 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add Margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-1"</code></td>
														<td>Add Margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-1"</code></td>
														<td>Add Margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-1"</code></td>
														<td>Add Margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-1"</code></td>
														<td>Add Margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-1"</code></td>
														<td>Add Margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-1"</code></td>
														<td>Add Margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Margin values</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add margin m-1 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-2"</code></td>
														<td>Add margin m-2 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-3"</code></td>
														<td>Add margin m-3 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-4"</code></td>
														<td>Add margin m-4 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-5"</code></td>
														<td>Add margin m-5 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-6"</code></td>
														<td>Add margin m-6 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-7"</code></td>
														<td>Add margin m-7 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-8"</code></td>
														<td>Add margin m-8 to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Remove Margin</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-0"</code></td>
														<td>Remove margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-0"</code></td>
														<td>Remove margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-0"</code></td>
														<td>Remove margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-0"</code></td>
														<td>Remove margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-0"</code></td>
														<td>Remove margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-0"</code></td>
														<td>Remove margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-0"</code></td>
														<td>Remove margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Media Query margins</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-t-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
														<code class="pd-0 bg-light mb-1">.mt-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mb-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mr-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.ml-[size]-[value]</code>
														<td>
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the padding value (refer to code above)</p>
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
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection