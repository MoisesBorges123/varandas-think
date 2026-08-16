@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Contact List 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Contact</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Contact List 02</a></li>
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
						<div class="card">
						<div class="row no-gutters">
							<div class="col-lg-4 col-xl-3">
								<div class="border-left">
									<div class="main-content-left main-content-left-contacts">
										<div class="card-header">
											<div class="card-title">All Contacts</div>
											<div class="card-options">
												<a class="" href="#"><i class="fe fe-more-vertical"></i></a>
											</div>
										</div>
										<div class="main-contacts-list" id="mainContactList">
											<div class="main-contact-label">
												A
											</div>
											<div class="main-contact-item selected">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Arlena Soles</h6><span class="phone">+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/1.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Athena Manske</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Amalia Peng</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Anita Garza</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												B
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/4.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Bret Guadalupe</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Britney Labares</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Basil Ambrose</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												C
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Cinda Hope</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Chassidy Kerr</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Chau Weldy</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-label">
												D
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Dori Daring</h6><span>+1-457-658-856</span>
												</div>
											</div>
											<div class="main-contact-item">
												<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}"  class="avatar avatar-md brround"></div>
												<div class="main-contact-body">
													<h6>Dalton Gracia</h6><span>+1-457-658-856</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9">
								<div class="">
									<div class="main-content-body main-content-body-contacts">
										<div class="main-contact-info-header">
											<div class="media">
												<div class="main-img-user brround">
													<img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="w-100 h-100 brround">
													<a href=""><i class="fe fe-camera"></i></a>
												</div>
												<div class="media-body">
													<h4>Jessica</h4>
													<p>Web Designer</p>
													<nav class="nav">
														<a class="nav-link" href=""><i class="fe fe-phone ml-1"></i> Call</a>
														<a class="nav-link" href=""><i class="fe fe-mail ml-1"></i> Message</a>
														<a class="nav-link" href=""><i class="fe fe-user-plus ml-1"></i> Add to Group</a>
														<a class="nav-link" href=""><i class="fe fe-slash ml-1"></i> Block</a>
													</nav>
												</div>
											</div>
											<div class="main-contact-action">
												<a href="" class="btn btn-light btn-svgs"><i class="fe fe-edit ml-1"></i> Edit <span> Contact</span></a>
												<a href="" class="btn btn-danger btn-svgs"><i class="fe fe-trash-2 ml-1"></i><span>Contact</span></a>
											</div>
											<!-- main-contact-action -->
										</div>
										<div class="main-contact-info-body">
											<div class="card-body">
												<h6>Biography</h6>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
											<div class="media-list p-0">
												<div class="media py-4 mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-phone"></i>
															</div>
															<div>
																<label>Work</label> <span class="font-weight-semibold fs-14">+1 (425) 857 5463</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-phone"></i>
															</div>
															<div>
																<label>Personal</label> <span class="font-weight-semibold fs-14">+1 (547) 542 3568</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-envelope"></i>
															</div>
															<div>
																<label>Gmail Account</label> <span class="font-weight-semibold fs-14">arlena.soles@gmail.com</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-envelope"></i>
															</div>
															<div>
																<label>Other Account</label> <span class="font-weight-semibold fs-14">me@spruko.com</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media py-4 border-top mt-0">
													<div class="media-body">
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-map-marker"></i>
															</div>
															<div>
																<label>Current Address</label> <span class="font-weight-semibold fs-14">012 San Francisco, California 13245</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="media-icon bg-light text-primary ml-3 mt-1">
																<i class="fa fa-clock-o"></i>
															</div>
															<div>
																<label>Call History</label> <a class="font-weight-semibold fs-14" href="#">Duration of last call: 2m 32sec</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
		<!--INTERNAL  Contact js -->
		<script src="{{URL::asset('assets/js/contact.js')}}"></script>
@endsection