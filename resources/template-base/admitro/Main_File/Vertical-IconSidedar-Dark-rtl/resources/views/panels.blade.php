@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Panels</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Panels</a></li>
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
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Panels</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default m-0">
											<div class="expanel-body">
												Basic panel example
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="expanel expanel-default mt-4">
	<div class="expanel-body">
		Basic panel example
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with heading</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">Panel heading without title</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row mt-4">
	<div class="col-lg-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">Panel heading without title</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with footer</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default m-0">
											<div class="expanel-body">
												Panel content
											</div>
											<div class="expanel-footer">Panel footer</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="expanel expanel-default mt-4">
	<div class="expanel-body">
		Panel content
	</div>
	<div class="expanel-footer">Panel footer</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with color header</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-primary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-secondary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="expanel expanel-success">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-danger">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row mt-4">
	<div class="col-lg-6">
		<div class="expanel expanel-primary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="expanel expanel-secondary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="expanel expanel-success">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="expanel expanel-danger">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel tabs</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="expanel expanel-primary overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with paragraphs inside)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse01">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
												<div class="expanel expanel-info overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with list-group inside)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-light" type="button" data-toggle="collapse" data-target="#collapse02"
																aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse02">
														<p>Notice the padding inside.</p>
														<ul class="list-group">
															<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Some action</a></li>
															<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Another action</a></li>
														</ul>
													</div>
												</div>
												<div class="expanel expanel-default overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with paragraphs)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapse06" aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse06">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-success overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with table inside)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target="#collapse03" aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse03">
														<table class="table">
															<thead>
															  <tr>
																<th>#</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Username</th>
															  </tr>
															</thead>
															<tbody>
															  <tr>
																<th scope="row">1</th>
																<td>Mark</td>
																<td>Otto</td>
																<td>@mdo</td>
															  </tr>
															  <tr>
																<th scope="row">2</th>
																<td>Jacob</td>
																<td>Thornton</td>
																<td>@fat</td>
															  </tr>
															  <tr>
																<th scope="row">3</th>
																<td>Larry</td>
																<td>the Bird</td>
																<td>@twitter</td>
															  </tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="expanel expanel-warning overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with paragraphs)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#collapse04" aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse04">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
												<div class="expanel expanel-danger overflow-hidden br-7 border-0 shadow-none">
													<div class="expanel-heading clearfix d-flex">
														<div class="mt-2">Panel title (with paragraphs)</div>
														<div class="float-right mr-auto">
															<button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
																aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse05">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row">
<div class="col-lg-6">
	<div class="expanel expanel-primary overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with paragraphs inside)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse01">
			<p>Paragraphs</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
				Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
				Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
				Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
		</div>
	</div>
	<div class="expanel expanel-info overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with list-group inside)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-light" type="button" data-toggle="collapse" data-target="#collapse02"
					aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse02">
			<p>Notice the padding inside.</p>
			<ul class="list-group">
				<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Some action</a></li>
				<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Another action</a></li>
			</ul>
		</div>
	</div>
	<div class="expanel expanel-default overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with paragraphs)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapse06" aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse06">
			<p>Paragraphs</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
				Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
				Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
				Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
		</div>
	</div>
</div>
<div class="col-lg-6">
	<div class="expanel expanel-success overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with table inside)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target="#collapse03" aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse03">
			<table class="table">
				<thead>
				  <tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				  </tr>
				  <tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				  </tr>
				  <tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				  </tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="expanel expanel-warning overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with paragraphs)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#collapse04" aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse04">
			<p>Paragraphs</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
				Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
				Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
				Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
		</div>
	</div>
	<div class="expanel expanel-danger overflow-hidden br-7 border-0 shadow-none">
		<div class="expanel-heading clearfix d-flex">
			<div class="mt-2">Panel title (with paragraphs)</div>
			<div class="float-right mr-auto">
				<button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
					aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<div class="expanel-body collapse" id="collapse05">
			<p>Paragraphs</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
				Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
				Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
				Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
		</div>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row -->

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