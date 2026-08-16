@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Todo List 03</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Todo List</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Todo List 03</a></li>
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
							<div class="col-md-12 col-xl-9 col-lg-8">
								<div class="row">
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">XLSdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">Newdocument.doc</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">pdfdocument.pdf</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">pptdocument.ppt</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/word.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">worddocument.doc</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/zip.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">Zipfile.zip</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">Xlsdocument.xls</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">pfdocument2.pdf</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">Newdocument.pdf</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">newdocument.doc</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">Newdocument.ppt</h6>
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-3 col-lg-4 col-md-6">
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
												<div class="px-5 pb-5 text-center">
													<img src="{{URL::asset('assets/images/files/ppt.png')}}" alt="img" class="w-80 mx-auto">
													<h6 class="mb-1 font-weight-semibold mt-4">PPtdocument.ppt</h6>
												</div>
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