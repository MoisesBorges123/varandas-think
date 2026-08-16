@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Headers</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Headers</a></li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Header Style1</h3>
									</div>
									<div class="">
										<div class="header py-4">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('/' . $page='index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
													</a>
													<div class="d-flex order-lg-2 mr-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
															<a  class="nav-link icon exitfullscreen" style="display: none">
																<i class="fe fe-minimize floating"></i>
															</a>
														</div>

														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fe fe-message-square"></i>
																	</div>
																	<div>
																		<div>Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-danger">
																		<i class="fe fe-shopping-cart"></i>
																	</div>
																	<div>
																		<div> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-success">
																		<i class="fe fe-calendar"></i>
																	</div>
																	<div>
																		<div> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-warning">
																		<i class="fe fe-airplay"></i>
																	</div>
																	<div>
																		<div>Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown ">
															<a href="#" class="nav-link pr-0 leading-none mt-1" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">Jessic</a>
																	<span class="text-center user-semi-title text-dark">Web Designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{url('/' . $page='login')}}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse1">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header Style2</h3>
									</div>
									<div class="">
										<div class="header py-4 bg-primary br-bl-7 br-br-7">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('/' . $page='index')}}">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
													</a>
													<div class="d-flex order-lg-2 mr-auto">
														<div class="defaultheader d-none d-lg-flex">
															<form class="form-inline mt-2 mr-2">
																<div class="search-element mt-1">
																	<input type="search" class="form-control header-search bg-transparent border-transparent" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" type="submit"><i class="fa fa-search text-white-50"></i></button>
																</div>
															</form>
														</div>
														<div class="d-flex order-lg-2 mr-auto">
															<div class="dropdown d-none d-md-flex mt-1 " >
																<a  class="nav-link icon requestfullscreen">
																	<i class="fe fe-maximize floating text-white"></i>
																</a>
															</div>
															<div class="dropdown d-none d-md-flex mt-1">
																<a class="nav-link icon" data-toggle="dropdown">
																	<i class="fe fe-bell floating text-white"></i>
																	<span class="nav-unread bg-danger"></span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																		<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg">
																			<i class="fe fe-message-square"></i>
																		</div>
																		<div>
																			<div>Message Sent.</div>
																			<div class="small text-muted">3 hours ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-danger">
																			<i class="fe fe-shopping-cart"></i>
																		</div>
																		<div>
																			<div> Order Placed</div>
																			<div class="small text-muted">5  hour ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-success">
																			<i class="fe fe-calendar"></i>
																		</div>
																		<div>
																			<div> Event Started</div>
																			<div class="small text-muted">45 mintues ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-warning">
																			<i class="fe fe-airplay"></i>
																		</div>
																		<div>
																			<div>Your Admin lanuched</div>
																			<div class="small text-muted">1 daya ago</div>
																		</div>
																	</a>
																	<div class=" text-center p-2 border-top">
																		<a href="#" class="">View All Notifications</a>
																	</div>
																</div>
															</div>
															<div class="dropdown d-none d-md-flex mt-1">
																<a class="nav-link icon" data-toggle="dropdown">
																	<i class="fe fe-mail floating text-white"></i>
																	<span class=" nav-unread badge badge-warning  badge-pill">2</span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																	<a href="#" class="dropdown-item text-center">2 New Messages</a>
																	<div class="dropdown-divider"></div>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																		<div>
																			<strong>Madeleine</strong> Hey! there I' am available....
																			<div class="small text-muted">3 hours ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																		<div>
																			<strong>Anthony</strong> New product Launching...
																			<div class="small text-muted">5  hour ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround ml-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																		<div>
																			<strong>Olivia</strong> New Schedule Realease......
																			<div class="small text-muted">45 mintues ago</div>
																		</div>
																	</a>
																	<div class="dropdown-divider"></div>
																	<a href="#" class="dropdown-item text-center">See all Messages</a>
																</div>
															</div>
															<div class="dropdown ">
																<a href="#" class="nav-link pr-0 leading-none mt-1" data-toggle="dropdown">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																	<div class="text-center">
																		<a href="#" class="dropdown-item text-center user pb-0">Jessic</a>
																		<span class="text-center user-semi-title text-dark">Web Designer</span>
																		<div class="dropdown-divider"></div>
																	</div>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																	</a>
																	<a class="dropdown-item" href="{{url('/' . $page='login')}}">
																		<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																	</a>
																</div>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0 text-white" data-toggle="collapse" data-target="#headerMenuCollapse2">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header Style 3 with Svg Icons</h3>
									</div>
									<div class="">
										<!--app header-->
										<div class="header py-4">
											<div class="container-fluid">
												<div class="d-flex">
													<a class="header-brand" href="{{url('/' . $page='index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
													</a>
													<div class="d-flex order-lg-2 mr-auto">
														<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
															<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
															</svg>
														</a>
														<div class="mt-1">
															<form class="form-inline">
																<div class="search-element mt-1 d-none d-lg-flex">
																	<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" type="submit">
																	<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
																	 </svg>
																	</button>
																</div>
															</form>
														</div><!-- SEARCH -->
														<div class="dropdown   header-fullscreen pr-5" >
															<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button1">
																<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"/></svg>
															</a>
														</div>
														<div class="dropdown header-notify pl-4">
															<a class="nav-link icon p-0" data-toggle="dropdown">
																<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
																<span class="pulse "></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg>
																	<div>
																		<div class="font-weight-normal1">Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
																	<div>
																		<div class="font-weight-normal1"> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M5 8h14V6H5z" opacity=".3"/><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"/>
																	</svg>
																	<div>
																		<div class="font-weight-normal1"> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 13h5v7h-5z" opacity=".3"/><path d="M23 11.01L18 11c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-9c0-.55-.45-.99-1-.99zM23 20h-5v-7h5v7zM2 4h18v5h2V4c0-1.11-.9-2-2-2H2C.89 2 0 2.89 0 4v12c0 1.1.89 2 2 2h7v2H7v2h8v-2h-2v-2h2v-2H2V4zm9 2l-.97 3H7l2.47 1.76-.94 2.91 2.47-1.8 2.47 1.8-.94-2.91L15 9h-3.03z"/></svg>
																	<div>
																		<div class="font-weight-normal1">Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown profile-dropdown mt-1">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span>
																	<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img" class="avatar avatar-md brround">
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">Jessic</a>
																	<span class="text-center user-semi-title">Web Designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/>
																	</svg>
																	<div class="mt-1">Profile</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
																		<path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"	></path>
																	</svg>
																	<div class="mt-1">Settings</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
																	</svg>
																	<div class="mt-1">Messages</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z"/>
																	</svg>
																	<div class="mt-1">Sign Out</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/app header-->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header Style 4 with Svg Icons</h3>
									</div>
									<div class="">
										<!--app header-->
										<div class="header py-4">
											<div class="container-fluid">
												<div class="d-flex">
													<a class="header-brand" href="{{url('/' . $page='index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
													</a>

													<div class="d-flex order-lg-2 mr-auto">
														<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
															<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
															</svg>
														</a>
														<div class="mt-1">
															<form class="form-inline">
																<div class="search-element mt-1 d-none d-lg-flex">
																	<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" type="submit">
																	<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
																	 </svg>
																	</button>
																</div>
															</form>
														</div><!-- SEARCH -->
														<div class="dropdown d-none d-sm-flex header-option mr-4 ml-4">
															<a class="nav-link icon p-0" data-toggle="dropdown">
																<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
																 <span class="nav-span">Notificatiions <i class="fa fa-angle-down ml-1 fs-18"></i></span>
															</a>
															<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow animated">
																<a class="dropdown-item" href="#">
																	App Design Projects
																</a>
																<a class="dropdown-item" href="#">
																	Web Design Projects
																</a>
																<a class="dropdown-item" href="#">
																	App Development Projects
																</a>
																<a class="dropdown-item" href="#">
																	Back-End Projects
																</a>
																<div class="text-left pr-5 pl-5 p-2 border-top">
																	<a href="#" class="">View Projects</a>
																</div>
															</div>
														</div>
														<div class="dropdown profile-dropdown">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span>
																	<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img" class="avatar avatar-md brround">
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">Jessic</a>
																	<span class="text-center user-semi-title">Web Designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/>
																	</svg>
																	<div class="mt-1">Profile</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
																		<path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"	></path>
																	</svg>
																	<div class="mt-1">Settings</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
																	</svg>
																	<div class="mt-1">Messages</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z"/>
																	</svg>
																	<div class="mt-1">Sign Out</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/app header-->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Header Style 5 with Svg Icons</h3>
									</div>
									<div class="">
										<!--app header-->
										<div class="header bg-primary br-bl-7 br-br-7 py-4">
											<div class="container-fluid">
												<div class="d-flex">
													<a class="header-brand" href="{{url('/' . $page='index')}}">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
													</a>
													<div class="d-flex order-lg-2 mr-auto">
														<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
															<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
															</svg>
														</a>
														<div class="mt-1">
															<form class="form-inline">
																<div class="search-element mt-1 d-none d-lg-flex">
																	<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" type="submit">
																	<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
																	 </svg>
																	</button>
																</div>
															</form>
														</div><!-- SEARCH -->
														<div class="dropdown   header-fullscreen pl-5" >
															<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button2">
																<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"/></svg>
															</a>
														</div>
														<div class="dropdown header-notify pl-4">
															<a class="nav-link icon p-0" data-toggle="dropdown">
																<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
																<span class="pulse "></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg>
																	<div>
																		<div class="font-weight-normal1">Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
																	<div>
																		<div class="font-weight-normal1"> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M5 8h14V6H5z" opacity=".3"/><path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z"/>
																	</svg>
																	<div>
																		<div class="font-weight-normal1"> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<svg class="header-icon ml-4" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 13h5v7h-5z" opacity=".3"/><path d="M23 11.01L18 11c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-9c0-.55-.45-.99-1-.99zM23 20h-5v-7h5v7zM2 4h18v5h2V4c0-1.11-.9-2-2-2H2C.89 2 0 2.89 0 4v12c0 1.1.89 2 2 2h7v2H7v2h8v-2h-2v-2h2v-2H2V4zm9 2l-.97 3H7l2.47 1.76-.94 2.91 2.47-1.8 2.47 1.8-.94-2.91L15 9h-3.03z"/></svg>
																	<div>
																		<div class="font-weight-normal1">Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown profile-dropdown mt-1">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span>
																	<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img" class="avatar avatar-md brround">
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">Jessic</a>
																	<span class="text-center user-semi-title">Web Designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/>
																	</svg>
																	<div class="mt-1">Profile</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path opacity=".3" d="M19.28,8.6 L18.58,7.39 L17.31,7.9 L16.25,8.33 L15.34,7.63 C14.95,7.33 14.54,7.09 14.11,6.92 L13.05,6.49 L12.89,5.36 L12.7,4 L11.3,4 L11.11,5.35 L10.95,6.48 L9.89,6.92 C9.48,7.09 9.07,7.33 8.64,7.65 L7.74,8.33 L6.69,7.91 L5.42,7.39 L4.72,8.6 L5.8,9.44 L6.69,10.14 L6.55,11.27 C6.52,11.57 6.5,11.8 6.5,12 C6.5,12.2 6.52,12.43 6.55,12.73 L6.69,13.86 L5.8,14.56 L4.72,15.4 L5.42,16.61 L6.69,16.1 L7.75,15.67 L8.66,16.37 C9.05,16.67 9.46,16.91 9.89,17.08 L10.95,17.51 L11.11,18.64 L11.3,20 L12.69,20 L12.88,18.65 L13.04,17.52 L14.1,17.09 C14.51,16.92 14.92,16.68 15.35,16.36 L16.25,15.68 L17.29,16.1 L18.56,16.61 L19.26,15.4 L18.18,14.56 L17.29,13.86 L17.43,12.73 C17.47,12.42 17.48,12.21 17.48,12 C17.48,11.79 17.46,11.57 17.43,11.27 L17.29,10.14 L18.18,9.44 L19.28,8.6 Z M12,16 C9.79,16 8,14.21 8,12 C8,9.79 9.79,8 12,8 C14.21,8 16,9.79 16,12 C16,14.21 14.21,16 12,16 Z"></path>
																		<path d="M19.43,12.98 C19.47,12.66 19.5,12.34 19.5,12 C19.5,11.66 19.47,11.34 19.43,11.02 L21.54,9.37 C21.73,9.22 21.78,8.95 21.66,8.73 L19.66,5.27 C19.57,5.11 19.4,5.02 19.22,5.02 C19.16,5.02 19.1,5.03 19.05,5.05 L16.56,6.05 C16.04,5.65 15.48,5.32 14.87,5.07 L14.49,2.42 C14.46,2.18 14.25,2 14,2 L10,2 C9.75,2 9.54,2.18 9.51,2.42 L9.13,5.07 C8.52,5.32 7.96,5.66 7.44,6.05 L4.95,5.05 C4.89,5.03 4.83,5.02 4.77,5.02 C4.6,5.02 4.43,5.11 4.34,5.27 L2.34,8.73 C2.21,8.95 2.27,9.22 2.46,9.37 L4.57,11.02 C4.53,11.34 4.5,11.67 4.5,12 C4.5,12.33 4.53,12.66 4.57,12.98 L2.46,14.63 C2.27,14.78 2.22,15.05 2.34,15.27 L4.34,18.73 C4.43,18.89 4.6,18.98 4.78,18.98 C4.84,18.98 4.9,18.97 4.95,18.95 L7.44,17.95 C7.96,18.35 8.52,18.68 9.13,18.93 L9.51,21.58 C9.54,21.82 9.75,22 10,22 L14,22 C14.25,22 14.46,21.82 14.49,21.58 L14.87,18.93 C15.48,18.68 16.04,18.34 16.56,17.95 L19.05,18.95 C19.11,18.97 19.17,18.98 19.23,18.98 C19.4,18.98 19.57,18.89 19.66,18.73 L21.66,15.27 C21.78,15.05 21.73,14.78 21.54,14.63 L19.43,12.98 Z M17.45,11.27 C17.49,11.58 17.5,11.79 17.5,12 C17.5,12.21 17.48,12.43 17.45,12.73 L17.31,13.86 L18.2,14.56 L19.28,15.4 L18.58,16.61 L17.31,16.1 L16.27,15.68 L15.37,16.36 C14.94,16.68 14.53,16.92 14.12,17.09 L13.06,17.52 L12.9,18.65 L12.7,20 L11.3,20 L11.11,18.65 L10.95,17.52 L9.89,17.09 C9.46,16.91 9.06,16.68 8.66,16.38 L7.75,15.68 L6.69,16.11 L5.42,16.62 L4.72,15.41 L5.8,14.57 L6.69,13.87 L6.55,12.74 C6.52,12.43 6.5,12.2 6.5,12 C6.5,11.8 6.52,11.57 6.55,11.27 L6.69,10.14 L5.8,9.44 L4.72,8.6 L5.42,7.39 L6.69,7.9 L7.73,8.32 L8.63,7.64 C9.06,7.32 9.47,7.08 9.88,6.91 L10.94,6.48 L11.1,5.35 L11.3,4 L12.69,4 L12.88,5.35 L13.04,6.48 L14.1,6.91 C14.53,7.09 14.93,7.32 15.33,7.62 L16.24,8.32 L17.3,7.89 L18.57,7.38 L19.27,8.59 L18.2,9.44 L17.31,10.14 L17.45,11.27 Z M12,8 C9.79,8 8,9.79 8,12 C8,14.21 9.79,16 12,16 C14.21,16 16,14.21 16,12 C16,9.79 14.21,8 12,8 Z M12,14 C10.9,14 10,13.1 10,12 C10,10.9 10.9,10 12,10 C13.1,10 14,10.9 14,12 C14,13.1 13.1,14 12,14 Z"	></path>
																	</svg>
																	<div class="mt-1">Settings</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
																	</svg>
																	<div class="mt-1">Messages</div>
																</a>
																<a class="dropdown-item d-flex" href="#">
																	<svg class="header-icon ml-3" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
																		<path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z"/>
																	</svg>
																	<div class="mt-1">Sign Out</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/app header-->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection