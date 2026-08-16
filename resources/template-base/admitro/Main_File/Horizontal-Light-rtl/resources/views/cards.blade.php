@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Cards</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Cards</a></li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card text-center">
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card text-right">
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-body">
										This is some text within a card body.
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a class="card-link" href="{{url('/' . $page='#')}}">Card link</a> <a class="card-link" href="{{url('/' . $page='#')}}">Another link</a>
									</div>
								</div>
								<div class="card">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
										<li class="list-group-item">Vestibulum at eros</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
										<li class="list-group-item">Vestibulum at eros</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card overflow-hidden">
									<img alt="image" src="{{URL::asset('assets/images/photos/10.jpg')}}">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Dapibus ac facilisis in</li>
									</ul>
									<div class="card-body">
										<a class="card-link" href="{{url('/' . $page='#')}}">Card link</a> <a class="card-link" href="{{url('/' . $page='#')}}">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Featured
										</div>
									</div>
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-header">
										<div class="card-title">
											Featured
										</div>
									</div>
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
									<div class="card-footer text-muted">
										2 days ago
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Featured
										</div>
									</div>
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Quote
										</div>
									</div>
									<div class="card-body">
										<blockquote class="blockquote mb-0">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											<footer class="blockquote-footer">
												Someone famous in <cite title="Source Title">Source Title</cite>
											</footer>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										<a class="btn btn-primary" href="{{url('/' . $page='#')}}">Button</a>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-6">
								<div class="card text-center">
									<div class="card-header">
										<ul class="nav nav-pills card-header-pills">
											<li class="nav-item">
												<a class="nav-link active" href="{{url('/' . $page='#')}}">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{url('/' . $page='#')}}">Link</a>
											</li>
											<li class="nav-item">
												<a aria-disabled="true" class="nav-link disabled" href="{{url('/' . $page='#')}}" tabindex="-1">Disabled</a>
											</li>
										</ul>
									</div>
									<div class="card-body">
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<ul class="nav nav-pills card-header-pills mb-6">
											<li class="nav-item">
												<a class="nav-link active d-block" href="{{url('/' . $page='#')}}">Active</a>
											</li>
											<li class="nav-item">
												<a class="nav-link d-block" href="{{url('/' . $page='#')}}">Link</a>
											</li>
											<li class="nav-item">
												<a aria-disabled="true" class="nav-link disabled d-block" href="{{url('/' . $page='#')}}" tabindex="-1">Disabled</a>
											</li>
										</ul>
										<h5 class="card-title">Special title treatment</h5>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="{{url('/' . $page='#')}}">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic card</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic card</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header bg-primary ">
										<h3 class="card-title text-white">Basic color card-header</h3>
										<div class="card-options ">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Basic color card-footer</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer bg-info ">
										<div class="text-white">Basic card footer</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card text-white bg-primary">
									<div class="card-header  border-transparent">
										<h3 class="card-title ">primary card title</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card text-white bg-secondary">
									<div class="card-header border-transparent">
										<h3 class="card-title ">Secondary card title</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with custom buttons</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="btn btn-primary btn-sm">Action 1</a>
											<a href="{{url('/' . $page='#')}}" class="btn btn-secondary btn-sm mr-2">Action 2</a>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with search form</h3>
										<div class="card-options">
											<form >
												<div class="input-group">
													<input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
													<span class="input-group-btn mr-2">
														<button class="btn btn-sm btn-primary" type="submit">
															<span class="fe fe-search"></span>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-success mb-0">
										Adding action was successful
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-danger mb-0">
										Adding action failed
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
											  <div class="double-bounce1"></div>
											  <div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">fullscreen button</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-fullscreen ml-2" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with switch</h3>
										<div class="card-options">
											<label class="custom-switch m-0">
												<input type="checkbox" value="1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card card-collapsed  overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Initial collapsed card</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Built card</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-status bg-blue"></div>
									<div class="card-header">
										<h3 class="card-title">Card blue</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-red br-bl-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title">Card status on left side</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="card-options-collapse ml-2" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="{{url('/' . $page='#')}}" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
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