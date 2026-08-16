@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Default Tables</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layout  ml-2 fs-14 float-right mt-1"></i>Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Default Tables</a></li>
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
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Table</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead >
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Striped Rows</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-striped card-table table-vcenter text-nowrap">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div><!-- bd -->
									</div><!-- bd -->
								</div><!-- bd -->

								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bordered Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Hoverable Rows Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>$162,700</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-success" >
											<thead  class="bg-success text-white">
												<tr >
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations2</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-danger" >
											<thead  class="bg-danger text-white">
												<tr>
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
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