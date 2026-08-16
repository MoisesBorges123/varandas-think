@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Contact list 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Contact list</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Contact list 01</a></li>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="">
											<div class="">
												<div class="row">
													<div class="col-6 mb-4">
														<a href="#" class="btn btn-primary" data-target="#user-form-modal" data-toggle="modal"><i class="fe fe-plus"></i> Add New Conatct</a>
													</div>
													<div class="col-6 col-auto">
														<div class="form-group ml-auto">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search Contact">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																	<small class="text-muted">Project Manager</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i> Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																	<small class="text-muted">Company Manager</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																	<small class="text-muted">Hr Manager</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																	<small class="text-muted">Hr Recriuter</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																	<small class="text-muted">Ceo</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																	<small class="text-muted">Php developer</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																	<small class="text-muted">Web developer</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																	<small class="text-muted">Hr Manager</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}">	</div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																	<small class="text-muted">web designer</small>
																	<p class="text-muted text-center mt-2">Lorem Ipsum is not simply random text to popular belief Contrary Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
																</div>
																<div class="">
																	<a class="btn btn-white btn-svgs mt-5" href="#"><i class="las la-comment fs-20 ml-2"></i>  Message</a>
																	<a class="btn btn-light btn-svgs mt-5" href="#"><i class="las la-user-circle fs-20 ml-2"></i> Profile</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- User Form Modal -->
								<div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Create User</h5>
												<button type="button" class="close" data-dismiss="modal">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="py-1">
													<form class="form" novalidate="">
														<div class="row">
															<div class="col">
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Full Name</label>
																			<input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Username</label>
																			<input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Email</label>
																			<input class="form-control" type="text" placeholder="user@example.com">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col mb-3">
																		<div class="form-group">
																			<label>About</label>
																			<textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 col-sm-6 mb-3">
																<div class="mb-2"><b>Change Password</b></div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Current Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>New Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Confirm <span class="d-none d-xl-inline">Password</span></label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-5 offset-sm-1 mb-3">
																<div class="mb-2"><b>Keeping in Touch</b></div>
																<div class="row">
																	<div class="col">
																	<label>Email Notifications</label>
																		<div class="custom-controls-stacked px-2">
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
																				<label class="custom-control-label" for="notifications-blog">Blog posts</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
																				<label class="custom-control-label" for="notifications-news">Newsletter</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
																				<label class="custom-control-label" for="notifications-offers">Personal Offers</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col d-flex justify-content-end">
															<button class="btn btn-primary" type="submit">Save Changes</button>
															</div>
														</div>
													</form>
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
@endsection