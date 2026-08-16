@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Blog 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}">Blog</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Blog 01</a></li>
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
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> July-18-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 12 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> July-08-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 5 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Lorem ipsum dolor quis</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> Jun-11-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 7 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">pleasure and praising pain</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> Jan-18-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 10 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">expound the actual teachings</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> Jun-7-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i>12 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">great explorer of the truth</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> May-29-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 2 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">pursue pleasure rationally</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> May-17-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 13 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">consequences that are extremely</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> May-15-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 9 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img">
										<a href="{{url('/' . $page='#')}}"></a>
										<img src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img" class="cover-image w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="{{url('/' . $page='#')}}" class="d-flex"><i class="fe fe-calendar fs-16 ml-1"></i> May-10-2020</a>
											<div class="mr-auto">
												<a class="mr-0 d-flex" href="{{url('/' . $page='#')}}"><i class="fe fe-message-square fs-16 ml-1"></i> 14 Comments</a>
											</div>
										</div>
										<a href="{{url('/' . $page='#')}}" class="mt-4"><h5 class="font-weight-semibold">occasionally circumstances</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md ml-3" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="mr-auto text-muted mt-2">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

					</div>
                </div><!-- end app-content-->
@endsection
@section('js')
@endsection