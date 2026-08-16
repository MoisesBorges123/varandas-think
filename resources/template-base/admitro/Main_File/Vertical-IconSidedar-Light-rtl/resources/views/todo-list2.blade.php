@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Todo List 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Todo List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Todo List 02</a></li>
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
							<div class="col-md-12 col-lg-4 col-xl-3">
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
								<div class="row">
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="" href="">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-3" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Shamika Griffith</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Work Assigned by Clients</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Sed ut perspiciatis unde omnis iste natus</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="" href="">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-3" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Margarette Wycoff</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Voluptatem Accusantium Dolo Laudantium</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Inventore Veritatis Et Quasi Architecto</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="" href="">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-3" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Myrta Powe</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Nemo Enim Ipsam Voluptatem Quia Voluptas</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Vero Eos Et Accusamus Et Iusto Odio Dignissimos</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="" href="">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-3" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Consuelo Valenzuela</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Ut Enim Ad Minima Veniam Nostrum Exercitationem</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Quis Autem Vel Eum Iure Reprehenderit Qui</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="" href="">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-3" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Carolyne Wirtz</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">I Must Explain To You How All This Mistaken</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">I Will Give You A Complete Account Of The System</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="mr-auto">
														<a class="option-dots" href="" data-toggle="dropdown"><i class="fe fe-more-vertical fs-20"></i></a>
														<div class="dropdown-menu dropdown-menu-left">
															<a class="dropdown-item" href="#">Assigned to</a>
															<a class="dropdown-item" href="#">Mark As Unread</a>
															<a class="dropdown-item" href="#">Mark As Important</a>
															<a class="dropdown-item" href="#">Add to Tasks</a>
															<a class="dropdown-item" href="#">Add Star</a>
															<a class="dropdown-item" href="#">Move to</a>
															<a class="dropdown-item" href="#">Mute</a>
															<a class="dropdown-item" href="#">Move to Trash</a>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0 text-muted" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Archie Kesler</h6>
																<small>Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">Rationally Encounter Quences Extremely Painful</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">Which Of Us Ever Undertakes Laborious Physical</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-secondary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
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
