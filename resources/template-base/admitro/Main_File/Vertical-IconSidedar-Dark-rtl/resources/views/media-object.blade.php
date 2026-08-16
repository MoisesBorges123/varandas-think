@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">MediaObject</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">MediaObject</a></li>
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
							<div class="col-lg-12">
								<!--div-->
								<div class="card" id="media">
									<div class="card-header">
										<div class="card-title">
											Basic Example
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/4.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/4.jpg')}}">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media1">
									<div class="card-header">
										<div class="card-title">
											Nesting
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/9.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													<div class="media d-block d-sm-flex mg-t-25">
														<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/8.jpg')}}">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
															Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/9.jpg')}}">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
					<div class="media d-block d-sm-flex mg-t-25">
						<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/8.jpg')}}">
						<div class="media-body">
							<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
							Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
						</div>
					</div>
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media2">
									<div class="card-header">
										<div class="card-title">
											Alignment
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<img alt="" class="avatar avatar-xl brround ml-3 align-self-center" src="{{URL::asset('assets/images/users/11.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<img alt="" class="avatar avatar-xl brround ml-3 align-self-center" src="{{URL::asset('assets/images/users/11.jpg')}}">
				<div class="media-body pt-4 pt-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media3">
									<div class="card-header">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<div class="media d-block d-sm-flex">
												<div class="media-body mb-4 mb-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
												<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<div class="media d-block d-sm-flex">
				<div class="media-body mb-4 mb-sm-0">
					<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
					Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
				</div>
				<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
			</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="media4">
									<div class="card-header">
										<div class="card-title">
											Media List
										</div>
									</div>
									<div class="card-body">
										<div class="border p-4">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex border-0">
													<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mt-5 border-0">
													<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
													<div class="media-body pt-4 pt-sm-0">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="border p-4">
			<ul class="list-unstyled mb-0">
				<li class="media d-block d-sm-flex border-0">
					<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
				<li class="media d-block d-sm-flex mt-5 border-0">
					<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
				<li class="media d-block d-sm-flex mt-5 border-0">
					<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
					<div class="media-body pt-4 pt-sm-0">
						<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
						Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
					</div>
				</li>
			</ul>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
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
