@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Email Services</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}">Email</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Email Services</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
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
											<a href="{{url('/' . $page='email-compose')}}" class="btn btn-primary btn-block">Compose</a>
										</div>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-inbox fs-18 ml-2"></i> Inbox <span class="mr-auto badge badge-success">14</span>
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-mail fs-18 ml-2"></i> Sent Mail
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-alert-octagon fs-18 ml-2"></i> Important <span class="mr-auto badge badge-danger">3</span>
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-star fs-18 ml-2"></i> Starred
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-briefcase fs-18 ml-2"></i> Drafts
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-tag fs-18 ml-2"></i> Tags
										</a>
										<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-trash-2 fs-18 ml-2"></i> Trash
										</a>
									</div>
									<div class="p-4">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary ml-2"></span> Friends
											</a>
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary ml-2"></span> Family
											</a>
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success ml-2"></span> Social
											</a>
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info ml-2"></span> Office
											</a>
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning ml-2"></span> Work
											</a>
											<a href="{{url('/' . $page='#')}}" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger ml-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body">
										<div class="email-media">
											<div class="mt-0 d-sm-flex">
												<img class="ml-2 rounded-circle avatar avatar-lg" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="avatar">
												<div class="media-body pt-0">
													<div class="float-left d-none d-md-flex fs-15">
														<small class="ml-3 mt-3 text-muted">July 13 , 2020 12:45 pm</small>
														<a class="ml-3 email-icon" data-toggle="tooltip" title="" data-original-title="Rated"><i class="fe fe-star fs-16"></i></a>
														<a class="ml-3 email-icon" data-toggle="tooltip" title="" data-original-title="Reply"><i class="fa fa-reply"></i></a>
														<div class="">
															<a href="{{url('/' . $page='#')}}" class="email-icon" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical fs-16"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="{{url('/' . $page='#')}}"><i class="fe fe-share ml-2 float-right"></i> Reply</a>
																<a class="dropdown-item" href="{{url('/' . $page='#')}}"><i class="fe fe-alert-circle ml-2 float-right"></i>Report Spam</a>
																<a class="dropdown-item" href="{{url('/' . $page='#')}}"><i class="fe fe-trash ml-2 float-right"></i>Delete</a>
																<a class="dropdown-item" href="{{url('/' . $page='#')}}"><i class="fe fe-printer ml-2 float-right"></i>Print</a>
																<a class="dropdown-item" href="{{url('/' . $page='#')}}"><i class="fe fe-filter ml-2  float-right"></i>Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title text-dark font-weight-semibold mt-1">Jessica <span class="text-muted font-weight-semibold">( alicnestle@gmail.com )</span></div>
													<small class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </small>
													<small class="mr-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
												</div>
											</div>
										</div>
										<div class="eamil-body mt-5">
											<h6>Hi Sir/Madam</h6>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr>
											<div class="email-attch">
												<div class="float-left">
													<a href="{{url('/' . $page='#')}}" class="email-icon" data-toggle="tooltip" title="" data-original-title="Download"><i class="fe fe-download fs-18"></i></a>
												</div>
												<p class="font-weight-semibold">3 Attachments <a href="{{url('/' . $page='#')}}">View</a></p>
											</div>
											<div class="row">
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="{{url('/' . $page='#')}}">
														<div class="border p-0 text-center">
															<img src="{{URL::asset('assets/images/files/file2.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-excel-o mr-1"></i> xlsdocument.xls
														</div>
													</a>
												</div>
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="{{url('/' . $page='#')}}">
														<div class="border p-0 text-center">
															<img src="{{URL::asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-word-o mr-1"></i> worddocument
														</div>
													</a>
												</div>
												<div class="col-sm-6 col-lg-3 mt-4">
													<a class="" href="{{url('/' . $page='#')}}">
														<div class="border p-0 text-center">
															<img src="{{URL::asset('assets/images/files/doc.png')}}" alt="img" class="w-80 mx-auto">
														</div>
														<div class="bg-light p-3">
															<i class="fa fa-file-word-o mr-1"></i> worddocument
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="bth-list text-left">
											<a class="btn btn-primary" href="{{url('/' . $page='#')}}"><i class="fa fa-share"></i> Reply</a>
											<a class="btn btn-secondary" href="{{url('/' . $page='#')}}"><i class="fa fa fa-reply float-left mr-1 mt-1"></i> Forward</a>
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