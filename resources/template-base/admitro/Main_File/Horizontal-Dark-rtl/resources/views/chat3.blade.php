@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Chart 03 (Pop up Chat)</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item"><a href="#">Chart</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Chart 03</a></li>
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
							<div class="col-md-12 col-lg-12">
								<div class="row">

									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Shamika Griffith</h6>
															<small>shamikagriffith@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Margarette Wycoff</h6>
															<small>margarettewycoff@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Myrta Powe</h6>
															<small>myrtapower@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Consuelo Valenzuela</h6>
															<small>consuelovalenzuela@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Carolyne Wirtz</h6>
															<small>carolynewirtz@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Archie Kesler</h6>
															<small>archiekesler@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Elizabeth Loux</h6>
															<small>elizabethloux@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Kathaleen Roysden</h6>
															<small>kathaleenroysden@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/11.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Raisa Ladwig</h6>
															<small>raisaladwig@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="chat-widget-header d-flex p-5">
													<div class="font-weight-bold d-flex">
														<img  class="avatat avatar-md brround ml-2" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
														<div class="mt-1 d-none d-sm-block">
															<h6 class="font-weight-semibold mb-0">Veronica Kimer</h6>
															<small>veronicakimer@gmail.com</small>
														</div>
													</div>
													<div class="mr-auto">
														<div class="d-flex">
															<a class="option-dots new-list2" href="#" data-toggle="modal" data-target="#chatmodel"><i class="fe fe-message-square"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="call"><i class="fe  fe-phone"></i></a>
															<a class="option-dots new-list2" href="#" data-placement="top" data-toggle="tooltip" title="Video Cal"><i class="fe  fe-video"></i></a>
															<a class="option-dots new-list2" data-toggle="dropdown" href="#"><i class="fe  fe-more-vertical"></i></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
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
												</div>
											</div>
										</div>
									</div>
									<!-- /col -->
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
		</div>

		<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
						<div class="action-header">
							<div class="float-right hidden-xs d-flex ml-2">
								<div class="img_cont ml-3">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img avatar avatar-md" alt="img">
								</div>
								<div class="align-items-center mt-2 text-white">
									<h5 class="mb-0">Jessica</h5>
									<span class="dot-label bg-success"></span><span class="ml-3 fs-12">online</span>
								</div>
							</div>
							<ul class="ah-actions actions align-items-center">
								<li class="call-icon">
									<a href="" class="d-done d-md-block phone-button">
										<i class="fe  fe-phone fs-20"></i>
									</a>
								</li>
								<li class="video-icon">
									<a href="" class="d-done d-md-block phone-button">
										<i class="fe  fe-video fs-20"></i>
									</a>
								</li>
								<li class="dropdown">
									<a href="" data-toggle="dropdown" aria-expanded="true">
										<i class="fe  fe-more-vertical fs-20"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-left">
										<li><i class="fa fa-user-circle"></i> View profile</li>
										<li><i class="fa fa-users"></i> Add to close friends</li>
										<li><i class="fa fa-plus"></i> Add to group</li>
										<li><i class="fa fa-ban"></i> Block</li>
									</ul>
								</li>
								<li>
									<a href=""  class="" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fe fe-x fs-20"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- action-header end -->
						<!-- msg_card_body -->
						<div class="card-body msg_card_body">
							<div class="chat-box-single-line">
								<abbr class="timestamp">February 1st, 2019</abbr>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Hi, how are you Jenna Side?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									Hi Connor Paige i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									You welcome Connor Paige
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/images/users/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Okay Bye, text you later..
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<!-- msg_card_body end -->
						<!-- card-footer -->
						<div class="card-footer">
							<div class="msb-reply-button d-flex">
								<div class="input-group">
									<input type="text" class="form-control  bg-white" placeholder="Typing....">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<i class="fa fa-paper-plane-o"></i>
										</button>
									</div>
								</div>
							</div>
						</div><!-- card-footer end -->
					</div>
				</div>
			</div>

		</div>
        <!-- End Page -->
@endsection
@section('js')
@endsection