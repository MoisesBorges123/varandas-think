@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Email Compose</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Email</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Email Compose</a></li>
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
							<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-inbox fs-18 ml-2"></i> Inbox <span class="mr-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-mail fs-18 ml-2"></i> Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-alert-octagon fs-18 ml-2"></i> Important <span class="mr-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-star fs-18 ml-2"></i> Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-briefcase fs-18 ml-2"></i> Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-tag fs-18 ml-2"></i> Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
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
							<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Compose new message</h3>
									</div>
									<div class="card-body">
										<form >
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">To</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">Subject</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row ">
													<label class="col-sm-2 form-label">Message</label>
													<div class="col-sm-10">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer d-sm-flex">
										<div class="mt-2 mb-2">
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg" data-toggle="tooltip" title="" data-original-title="Attach"><i class="fe fe-paperclip"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg" data-toggle="tooltip" title="" data-original-title="Link"><i class="fe fe-link"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg" data-toggle="tooltip" title="" data-original-title="Photos"><i class="fe fe-image"></i></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2"></i></a>
										</div>
										<div class="btn-list mr-auto">
											<button type="button" class="btn btn-danger btn-space">Cancel</button>
											<button type="submit" class="btn btn-primary btn-space">Send message</button>
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