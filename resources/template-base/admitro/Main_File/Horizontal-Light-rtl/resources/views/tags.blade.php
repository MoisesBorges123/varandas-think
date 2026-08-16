@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Tags</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Tags</a></li>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">First tag</span>
											<span class="tag">Second tag</span>
											<span class="tag">Third tag</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Link tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<a href="#" class="tag">First tag</a>
											<a href="#" class="tag">Second tag</a>
											<a href="#" class="tag">Third tag</a>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<a href="#" class="tag">First tag</a>
	<a href="#" class="tag">Second tag</a>
	<a href="#" class="tag">Third tag</a>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag tag-rounded">First tag</span>
											<span class="tag tag-rounded">Second tag</span>
											<span class="tag tag-rounded">Third tag</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-rounded">First tag</span>
	<span class="tag tag-rounded">Second tag</span>
	<span class="tag tag-rounded">Third tag</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag tag-blue">Blue tag</span>
											<span class="tag tag-azure">Azure tag</span>
											<span class="tag tag-indigo">Indigo tag</span>
											<span class="tag tag-purple">Purple tag</span>
											<span class="tag tag-pink">Pink tag</span>
											<span class="tag tag-red">Red tag</span>
											<span class="tag tag-orange">Orange tag</span>
											<span class="tag tag-yellow">Yellow tag</span>
											<span class="tag tag-lime">Lime tag</span>
											<span class="tag tag-green">Green tag</span>
											<span class="tag tag-teal">Teal tag</span>
											<span class="tag tag-cyan">Cyan tag</span>
											<span class="tag tag-gray">Gray tag</span>
											<span class="tag tag-gray-dark">Dark gray tag</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-blue">Blue tag</span>
	<span class="tag tag-azure">Azure tag</span>
	<span class="tag tag-indigo">Indigo tag</span>
	<span class="tag tag-purple">Purple tag</span>
	<span class="tag tag-pink">Pink tag</span>
	<span class="tag tag-red">Red tag</span>
	<span class="tag tag-orange">Orange tag</span>
	<span class="tag tag-yellow">Yellow tag</span>
	<span class="tag tag-lime">Lime tag</span>
	<span class="tag tag-green">Green tag</span>
	<span class="tag tag-teal">Teal tag</span>
	<span class="tag tag-cyan">Cyan tag</span>
	<span class="tag tag-gray">Gray tag</span>
	<span class="tag tag-gray-dark">Dark gray tag</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of tags</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
											<div class="tags">
												<span class="tag">First tag</span>
												<span class="tag">Second tag</span>
												<span class="tag">Third tag</span>
											</div>
											<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
											<div class="tags">
												<span class="tag">One</span>
												<span class="tag">Two</span>
												<span class="tag">Three</span>
												<span class="tag">Four</span>
												<span class="tag">Five</span>
												<span class="tag">Six</span>
												<span class="tag">Seven</span>
												<span class="tag">Eight</span>
												<span class="tag">Nine</span>
												<span class="tag">Ten</span>
												<span class="tag">Eleven</span>
												<span class="tag">Twelve</span>
												<span class="tag">Thirteen</span>
												<span class="tag">Fourteen</span>
												<span class="tag">Fifteen</span>
												<span class="tag">Sixteen</span>
												<span class="tag">Seventeen</span>
												<span class="tag">Eighteen</span>
												<span class="tag">Nineteen</span>
												<span class="tag">Twenty</span>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="text-wrap">
	<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
	<div class="tags">
		<span class="tag">First tag</span>
		<span class="tag">Second tag</span>
		<span class="tag">Third tag</span>
	</div>
	<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
	<div class="tags">
		<span class="tag">One</span>
		<span class="tag">Two</span>
		<span class="tag">Three</span>
		<span class="tag">Four</span>
		<span class="tag">Five</span>
		<span class="tag">Six</span>
		<span class="tag">Seven</span>
		<span class="tag">Eight</span>
		<span class="tag">Nine</span>
		<span class="tag">Ten</span>
		<span class="tag">Eleven</span>
		<span class="tag">Twelve</span>
		<span class="tag">Thirteen</span>
		<span class="tag">Fourteen</span>
		<span class="tag">Fifteen</span>
		<span class="tag">Sixteen</span>
		<span class="tag">Seventeen</span>
		<span class="tag">Eighteen</span>
		<span class="tag">Nineteen</span>
		<span class="tag">Twenty</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Avatar tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
												Victoria
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
												Nathan
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
												Alice
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
												Rose
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
												Peter
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
												Wayne
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
												Michelle
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
												Debra
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
		Victoria
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
		Nathan
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
		Alice
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
		Rose
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
		Peter
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
		Wayne
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
		Michelle
	</span>
	<span class="tag">
		<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
		Debra
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag remove</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">
												One
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Two
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Three
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Four
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag">
		One
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Two
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Three
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Four
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag addons</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="tag">
												npm
												<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
											</div>
											<div class="tag tag-danger">
												npm
												<span class="tag-addon"><i class="fe fe-activity"></i></span>
											</div>
											<div class="tag">
												bundle
												<span class="tag-addon tag-success">passing</span>
											</div>
											<span class="tag tag-dark">
												CSS gzip size
												<span class="tag-addon tag-warning">20.9 kB</span>
											</span>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element8"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<div class="tag">
		npm
		<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
	</div>
	<div class="tag tag-danger">
		npm
		<span class="tag-addon"><i class="fe fe-activity"></i></span>
	</div>
	<div class="tag">
		bundle
		<span class="tag-addon tag-success">passing</span>
	</div>
	<span class="tag tag-dark">
		CSS gzip size
		<span class="tag-addon tag-warning">20.9 kB</span>
	</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element8"><i class="las la-paste"></i></div>
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