@extends('layouts.master')
@section('css')
		<!-- INTERNAL lightslider css -->
		<link href="{{URL::asset('assets/plugins/lightslider/css/lightslider.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Chat 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Chat</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Chat 02</a></li>
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
								<div class="col-lg-5 col-xl-4">
									<div class="overflow-hidden mb-0 mb-lg-0">
										<div class="card-body p-0">
											<div class="main-content-left main-content-left-chat">
												<div class="p-4 pb-0 border-bottom">
													<div class="input-group">
														<input class="form-control" placeholder="Search friends..." type="text">
														<span class="">
															<button class="btn btn-primary br-tl-0 br-bl-0" type="button">
																<span class="input-group-btn"><i class="fa fa-search"></i></span>
															</button>
														</span>
													</div>
												</div>
												<div class="main-chat-contacts-wrapper">
													<label class="form-label mb-2 fs-13">Active Contacts (28)</label>
													<div class="main-chat-contacts" id="chatActiveContacts">
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div><small>Kecia</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div><small>Copp</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div><small>Edwina</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div><small>Uriarte</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"></div><small>Ambrose Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div><small>Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/11.jpg')}}" class="avatar avatar-md brround"></div><small>Celesta</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/1.jpg')}}" class="avatar avatar-md brround"></div><small>Briones</small>
														</div>
														<div>
															<div class="main-chat-contacts-more">
																20+
															</div><small>More</small>
														</div>
													</div><!-- main-active-contacts -->
												</div><!-- main-chat-active-contacts -->
												<div class="main-chat-list" id="ChatList">
													<a href="#">
														<div class="media new">
															<div class="main-img-user online">
																<img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"><span>2</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Melodi Maul</span> <span>2 hours</span>
																</div>
																<p>culpa qui officia deserunt...</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media new">
															<div class="main-img-user">
																<img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"><span>1</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Lourdes Eiland</span> <span>3 hours</span>
																</div>
																<p>Et harum quidem rerum facilis est</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media selected">
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Zofia Mccutcheon</span> <span>10 hours</span>
																</div>
																<p>Nam libero tempore, cum soluta nobis </p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/13.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Erlinda Leeder</span> <span>2 days</span>
																</div>
																<p>omnis voluptas assumenda est</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Randy Booze</span> <span>2 days</span>
																</div>
																<p>Temporibus autem quibusdam et </p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media new">
															<div class="main-img-user">
																<img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"> <span>1</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Camelia Kimber</span> <span>3 days</span>
																</div>
																<p>saepe eveniet ut et voluptates </p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Jerome Vowell</span> <span>4 days</span>
																</div>
																<p>reiciendis voluptatibus maiores </p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Regine Mccrystal</span> <span>5 days</span>
																</div>
																<p>we denounce with righteous indignation</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Nigel Knarr</span> <span>5 days</span>
																</div>
																<p>certain circumstances and owing to the claims</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Marva Constante</span> <span>5 days</span>
																</div>
																<p>Mae cenas tempus, tellus eget co ndimen</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Twila Hammers</span> <span>6 days</span>
																</div>
																<p>certain circumstances and owing to the claims</p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Vertie Raap</span> <span>6 days</span>
																</div>
																<p>certain circumstances and owing to the claims </p>
															</div>
														</div>
													</a>
													<a href="#">
														<div class="media">
															<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Cory Gardenhire</span> <span>7 days</span>
																</div>
																<p>certain circumstances and owing to the claims...</p>
															</div>
														</div>
													</a>
												</div><!-- main-chat-list -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7">
									<div class="border-right">
										<div class="main-content-body main-content-body-chat">
											<div class="main-chat-header">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-chat-msg-name">
													<h6>Jessica</h6><small>Last seen: 1 minute ago</small>
												</div>
												<nav class="nav">
													<a class="nav-link" href=""><i class="fe fe-more-vertical"></i></a>
													<a class="nav-link d-none d-sm-block" data-toggle="tooltip" href="" title="Call"><i class="fe fe-phone"></i></a>
													<a class="nav-link d-none d-sm-block" data-toggle="tooltip" href="" title="Archive"><i class="fe fe-folder-plus"></i></a>
													<a class="nav-link d-none d-sm-block" data-toggle="tooltip" href="" title="Trash"><i class="fe fe-trash-2"></i></a>
													<a class="nav-link d-none d-sm-block" data-toggle="tooltip" href="" title="View Info"><i class="fe fe-alert-octagon"></i></a>
												</nav>
											</div><!-- main-chat-header -->
											<div class="main-chat-body" id="ChatBody">
												<div class="content-inner">
													<label class="main-chat-time"><span>3 days ago</span></label>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
															</div>
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nor again is there anyone who loves or pursues or desires to obtain pain of itself
															</div>
															<div class="main-msg-wrapper">
																pursues or desires to obtain pain of itself
															</div>
															<div class="main-msg-wrapper">
																who loves or pursues or Nor again is there anyone
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nullam dictum felis eu pede mollis pretium
															</div>
															<div>
																<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div><label class="main-chat-time"><span>Yesterday</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<label class="main-chat-time"><span>Today</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-chat-footer">
												<nav class="nav">
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Camera"><i class="fe fe-camera fs-20"></i></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Emojia"><i class="fa fa-smile-o fs-20"></i></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="" data-original-title="Attach"><i class="fe fe-paperclip fs-20"></i></a>
												</nav>
												<input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><i class="fa fa-paper-plane-o"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- lightslider js -->
		<script src="{{URL::asset('assets/plugins/lightslider/js/lightslider.min.js')}}"></script>
		<!-- INTERNAL Chat js-->
		<script src="{{URL::asset('assets/js/chat2.js')}}"></script>
@endsection