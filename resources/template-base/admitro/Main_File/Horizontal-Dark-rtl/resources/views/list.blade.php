@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">List Group</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">List Group</a></li>
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
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List Group</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element11"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element11"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Active List item</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item active">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element12"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item active">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element12"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Default Active  Link List</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element13"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-default">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element13"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Primary Active  Link List</div>
									</div>
									<div class="card-body">
										<div class="panel panel-primary">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element14"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-primary">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element14"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Success Active  Link List</div>
									</div>
									<div class="card-body">
										<div class="panel panel-success">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element15"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-success">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element15"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Info Active Link List</div>
									</div>
									<div class="card-body">
										<div class="panel panel-info">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element16"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-info">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element16"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Warning Active Link List</div>
									</div>
									<div class="card-body">
										<div class="panel panel-warning">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element17"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-warning">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element17"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">list styles</div>
									</div>
									<div class="card-body">
										<div class="panel panel-danger">
											<div class="list-group">
												<a href="#" class="list-group-item">Cras justo odio</a>
												<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
												<a href="#" class="list-group-item">Morbi leo risus</a>
												<a href="#" class="list-group-item">Porta ac consectetur ac</a>
												<a href="#" class="list-group-item">Vestibulum at eros</a>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element18"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-danger">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element18"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listorder">Cras justo odio</li>
											<li class="listorder">Dapibus ac facilisis in</li>
											<li class="listorder">Morbi leo risus</li>
											<li class="listorder">Porta ac consectetur ac</li>
											<li class="listorder">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element19"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="listorder">Cras justo odio</li>
	<li class="listorder">Dapibus ac facilisis in</li>
	<li class="listorder">Morbi leo risus</li>
	<li class="listorder">Porta ac consectetur ac</li>
	<li class="listorder">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element19"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listunorder">Cras justo odio</li>
											<li class="listunorder">Dapibus ac facilisis in</li>
											<li class="listunorder">Morbi leo risus</li>
											<li class="listunorder">Porta ac consectetur ac</li>
											<li class="listunorder">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element20"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="listunorder">Cras justo odio</li>
	<li class="listunorder">Dapibus ac facilisis in</li>
	<li class="listunorder">Morbi leo risus</li>
	<li class="listunorder">Porta ac consectetur ac</li>
	<li class="listunorder">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element20"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End row-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled  List item</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item disabled">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item disabled">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual classes with List Group</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
											<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
											<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
											<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element21"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
	<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
	<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element21"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row-->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with icons</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element22"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element22"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with colored icons</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
											<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
											<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element23"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
	<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element23"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With defalut badges</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">
											Cras justo odio
											<span class="badgetext badge badge-default badge-pill">14</span>
											</li>
											<li class="list-group-item">
											Dapibus ac facilisis in
											<span class=" badgetext badge badge-default badge-pill">2</span>
											</li>
											<li class="list-group-item">
											Morbi leo risus
											<span class=" badgetext badge badge-default badge-pill">1</span>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item">
	Cras justo odio
	<span class="badgetext badge badge-default badge-pill">14</span>
	</li>
	<li class="list-group-item">
	Dapibus ac facilisis in
	<span class=" badgetext badge badge-default badge-pill">2</span>
	</li>
	<li class="list-group-item">
	Morbi leo risus
	<span class=" badgetext badge badge-default badge-pill">1</span>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With color badges</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item justify-content-between">
											Cras justo odio
											<span class="badgetext badge badge-primary badge-pill">14</span>
											</li>
											<li class="list-group-item justify-content-between">
											Dapibus ac facilisis in
											<span class="badgetext badge badge-danger badge-pill">2</span>
											</li>
											<li class="list-group-item justify-content-between">
											Morbi leo risus
											<span class="badgetext badge badge-success badge-pill">1</span>
											</li>
										</ul>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="list-group">
	<li class="list-group-item justify-content-between">
	Cras justo odio
	<span class="badgetext badge badge-primary badge-pill">14</span>
	</li>
	<li class="list-group-item justify-content-between">
	Dapibus ac facilisis in
	<span class="badgetext badge badge-danger badge-pill">2</span>
	</li>
	<li class="list-group-item justify-content-between">
	Morbi leo risus
	<span class="badgetext badge badge-success badge-pill">1</span>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Custom content</h3>
									</div>
									<div class="card-body">
										<div class="list-group">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small>3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small>Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="list-group">
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small>3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small>Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-sm-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Disabled Custom content</h3>
									</div>
									<div class="card-body">
										<div class="list-group">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small>3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small>Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="list-group">
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small>3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small>Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

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
