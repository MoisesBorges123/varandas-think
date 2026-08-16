@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Todo List 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Todo List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Todo List 01</a></li>
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
            <div class="row">
							<div class="col-md-12 col-xl-3 col-lg-4">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="#" class="btn btn-primary btn-block">Add New Task</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-codepen fs-18 ml-2"></i> All Tasks <span class="mr-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-alert-octagon fs-18 ml-2"></i> Important <span class="mr-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-star fs-18 ml-2"></i> Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-briefcase fs-18 ml-2"></i> Spam
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-briefcase fs-18 ml-2"></i> Archive
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center border-bottom-0">
											<i class="fe fe-trash-2 fs-18 ml-2"></i> Trash
										</a>
									</div>
									<div class="p-4">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary ml-2"></span> Friends
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary ml-2"></span> Family
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success ml-2"></span> Social
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info ml-2"></span> Office
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning ml-2"></span> Work
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger ml-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="row">
												<div class="col">
													<div class="form-group w-200">
														<div class="input-icon">
															<span class="input-icon-addon">
																<i class="fe fe-search"></i>
															</span>
															<input type="text" class="form-control" placeholder="Search Tasks">
														</div>
													</div>
												</div>
												<div class="col col-auto mb-4">
													<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn btn-light btn-sm" aria-expanded="false">
														Sort By
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#">Assending Order</a></li>
														<li><a href="#">Disending Order</a></li>
														<li class="divider"></li>
														<li><a href="#">Settings</a></li>
													</ul>
												</div>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap mb-0">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">Shamika Griffith</td>
															<td class="view-message">Work Assigned By Clients</td>
															<td class="view-message"><span class="badge badge-light badge-pill"> New</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">Archie Kesler</td>
															<td class="view-message">Try To Get New Work</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">Carolyne Wirtz</td>
															<td class="view-message">Rationally Encounter Quences</td>
															<td class="view-message"><span class="badge badge-light badge-pill"> New</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img">Consuelo Valenzuela</td>
															<td class="view-message">Which Of Us Ever Undertakes</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">Myrta Powe</td>
															<td class="view-message">Quis Autem Vel Eum Iure</td>
															<td class="view-message"><span class="badge badge-light badge-pill"> New</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">Margarette Wycoff</td>
															<td class="view-message">Ut Enim Ad Minima Veniam</td>
															<td class="view-message"><span class="badge badge-secondary badge-pill"> pending</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/7.jpg')}}" alt="img">Veronica Kimery</td>
															<td class="view-message">Inventore Veritatis Et Quasi</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/8.jpg')}}" alt="img">Raisa Ladwig</td>
															<td class="view-message">Vero Eos Et Accusamus Et Iusto</td>
															<td class="view-message"><span class="badge badge-light badge-pill"> New</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="img">Kathaleen Roysden</td>
															<td class="view-message">Which Of Us Ever Undertakes</td>
															<td class="view-message"><span class="badge badge-secondary badge-pill"> pending</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround ml-2" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="img">Elizabeth Loux</td>
															<td class="view-message">Account Of The System</td>
															<td class="view-message"><span class="badge badge-light badge-pill"> New</span></td>
															<td class="view-message text-center font-weight-semibold">
																<i class="fe fe-trash-2 fs-20"></i>
															</td>
														</tr>
													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination mb-4 float-right">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection