@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Jumbotron</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Jumbotron</a></li>
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
										<h3 class="card-title">Simple Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="jumbotron">
											<h1 class="display-3">Hello, world!</h1>
											<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
											<hr class="my-4">
											<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
											<p class="lead m-0">
												<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
											</p>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="jumbotron">
	<h1 class="display-3">Hello, world!</h1>
	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<hr class="my-4">
	<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	<p class="lead m-0">
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</p>
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
										<h3 class="card-title">Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="jumbotron ">
											<div class="container">
												<h1 class="display-3">jumbotron</h1>
												<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="jumbotron ">
	<div class="container">
		<h1 class="display-3">jumbotron</h1>
		<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
                </div><!-- end app-content-->
@endsection
@section('js')
		<!-- INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection