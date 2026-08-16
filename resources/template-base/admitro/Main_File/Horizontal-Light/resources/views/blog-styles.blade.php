@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Blog Styles</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}">Blog</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Blog Styles</a></li>
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
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
										<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}"> annoying consequences</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" ></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top " src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top " src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="{{url('/' . $page='#')}}" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/7.jpg')}})"></a>
									<div class="card-body  flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Thomos Scott</a>
												<small class="d-block text-muted">1 day ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
										<h4><a href="{{url('/' . $page='#')}}">Publishing packages</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body  flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
										<h4><a href="{{url('/' . $page='#')}}">Nihil molestaturrgt.</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
									<a href="{{url('/' . $page='#')}}" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/8.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="{{url('/' . $page='#')}}" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/2.jpg')}})"></a>
									<div class="card-body  flex-column">
										<h4><a href="{{url('/' . $page='#')}}">Generator on the Internet..</a></h4>
										<div class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body  flex-column">
										<h4><a href="{{url('/' . $page='#')}}">Nihil Molestiae.</a></h4>
										<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="{{url('/' . $page='#')}}" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/18.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some </div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">MeganPeters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="{{url('/' . $page='#')}}">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{url('/' . $page='profile')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="{{url('/' . $page='#')}}"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/15.jpg')}}" alt="How do you know she is a witch?"></a>
								</div>
							</div>
						</div>
						<!-- End row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection