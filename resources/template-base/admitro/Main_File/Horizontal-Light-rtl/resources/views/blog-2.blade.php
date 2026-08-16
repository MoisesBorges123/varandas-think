@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Blog 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}">Blog</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Blog 02</a></li>
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
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Jan-18-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">12 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Jan-22-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">14 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Lorem ipsum dolor quis</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Apr-16-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">3 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">pleasure and praising pain</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Feb-16-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">expound the actual teachings</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Jan-14-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">great explorer of the truth</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Jan-14-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">7 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">pursue pleasure rationally</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Jan-14-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">consequences that are extremely</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Feb-14-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a class="option-dots" data-toggle="dropdown"><i class="fe fe-more-vertical text-icon"></i></a>
												<div class="dropdown-menu tx-13 dropdown-menu-left">
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Assigned to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Unread</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mark As Important</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Add Star</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Mute</a>
													<a class="dropdown-item" href="{{url('/' . $page='#')}}">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i><div class="mt-0">Mar-21-2020</div></a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">occasionally circumstances</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="mr-auto text-muted mt-3">
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="new ml-3"><i class="fe fe-share-2  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection