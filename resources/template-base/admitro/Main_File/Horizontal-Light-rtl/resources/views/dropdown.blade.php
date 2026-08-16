@extends('layouts.master')
@section('css')
		<!-- INTERNAl Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Dropdowns</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dropdowns</a></li>
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
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
<div class="panel-body p-0">
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
			Action <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up" aria-hidden="true"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
	<div class="panel-body p-0">
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-light btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-light">Action</button>
													<button type="button" class="btn btn-light dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success">Action</button>
													<button type="button" class="btn btn-success dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
<div class="panel-body p-0">
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-light">Action</button>
		<button type="button" class="btn btn-light dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-primary">Action</button>
		<button type="button" class="btn btn-primary dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-success">Action</button>
		<button type="button" class="btn btn-success dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class=" fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-info">Action</button>
		<button type="button" class="btn btn-info dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-warning">Action</button>
		<button type="button" class="btn btn-warning dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-danger">Action</button>
		<button type="button" class="btn btn-danger dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class=" fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-light">Action</button>
													<button type="button" class="btn btn-pill btn-light dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-primary">Action</button>
													<button type="button" class="btn btn-pill btn-primary dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-success">Action</button>
													<button type="button" class="btn btn-pill btn-success dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-info">Action</button>
													<button type="button" class="btn btn-pill btn-info dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-warning">Action</button>
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-danger">Action</button>
													<button type="button" class="btn btn-pill btn-danger dropdown-toggle split-dropdown" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
<div class="panel-body p-0">
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-light">Action</button>
		<button type="button" class="btn btn-pill btn-light dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-primary">Action</button>
		<button type="button" class="btn btn-pill btn-primary dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-success">Action</button>
		<button type="button" class="btn btn-pill btn-success dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-info">Action</button>
		<button type="button" class="btn btn-pill btn-info dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-warning">Action</button>
		<button type="button" class="btn btn-warning btn-pill dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class=" fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-danger">Action</button>
		<button type="button" class="btn btn-pill btn-danger dropdown-toggle split-dropdown" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Square outline button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
	<div class="panel-body p-0">

		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>

	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
	<div class="panel-body p-0">

		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
				Action <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>

	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary">Action</button>
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success">Action</button>
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info">Action</button>
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger">Action</button>
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
<div class="panel-body p-0">

	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-outline-primary">Action</button>
		<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-outline-success">Action</button>
		<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-outline-info">Action</button>
		<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-outline-warning">Action</button>
		<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-outline-danger">Action</button>
		<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
													<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-success">Action</button>
													<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-info">Action</button>
													<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
													<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
<div class="panel-body p-0">
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
		<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class=" fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-outline-success">Action</button>
		<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-outline-info">Action</button>
		<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
		<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
	<div class="btn-group mt-2 mb-2">
		<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
		<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu dropdown-menu-right" role="menu">
			<li class="dropdown-plus-title">
				Dropdown
				<b class="fa fa-angle-up"></b>
			</li>
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropup variation</h3>
									</div>
									<div class="card-body">
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
												<span class="caret"></span></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>

										<!-- Split dropup button -->
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
												<span class="caret"></span></button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element9"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="dropup btn-group mt-2 mb-2">
	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
		<span class="caret"></span></button>
	<ul class="dropdown-menu dropdown-menu-right">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div>

<!-- Split dropup button -->
<div class="dropup btn-group mt-2 mb-2">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element9"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Drop Downs dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-facebook"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-twitter"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-google"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-youtube "></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-vimeo"></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-github"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element10"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
	<div class="panel-body p-0">
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-facebook"></i> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-twitter"></i> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-google"></i> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-youtube "></i><span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-vimeo"></i><span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		<div class="btn-group mt-2 mb-2">
			<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-github"></i> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right" role="menu">
				<li class="dropdown-plus-title">
					Dropdown
					<b class="fa fa-angle-up" aria-hidden="true"></b>
				</li>
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element10"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection