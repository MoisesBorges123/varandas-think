@extends('layouts.master')
@section('css')
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Modal</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Modal</a></li>
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
								<div class="card" id="modal">
									<div class="card-header">
										<div class="card-title">
											Basic Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6>
															<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- pd-y-50 -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="p-4 bg-light border border-bottom-0">
		<div class="modal d-block pos-static">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		</div><!-- pd-y-50 -->
		<div class="text-center py-4 bg-light border">
		<a class="btn btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
		</div><!-- pd-y-30 --></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal1">
									<div class="card-header">
										<div class="card-title">
											Small Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog modal-sm" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
														</div>
														<div class="modal-footer justify-content-center">
															<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-target="#modaldemo2" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="p-4 bg-light border border-bottom-0">
		<div class="modal d-block pos-static">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
					<div class="modal-footer justify-content-center">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		</div><!-- modal-wrapper-demo -->
		<div class="text-center py-4 bg-light border">
		<a class="btn btn-primary" data-target="#modaldemo2" data-toggle="modal" href="">View Live Demo</a>
		</div><!-- pd-y-30 --></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal2">
									<div class="card-header">
										<div class="card-title">
											Large Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-indigo" type="button">Save changes</button>
															<button class="btn btn-secondary" type="button">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-target="#modaldemo3" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="p-4 bg-light border border-bottom-0">
		<div class="modal d-block pos-static">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		</div><!-- modal-wrapper-demo -->
		<div class="text-center py-4 bg-light border">
		<a class="btn btn-primary" data-target="#modaldemo3" data-toggle="modal" href="">View Live Demo</a>
		</div><!-- pd-y-30 --></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal3">
									<div class="card-header">
										<div class="card-title">
											Success Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-check-circle fs-100 text-success lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-success mb-4">Congratulations!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" type="button">Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-target="#modaldemo4" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="p-4 bg-light border border-bottom-0">
		<div class="modal d-block pos-static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body text-center p-4">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fe fe-check-circle fs-100 text-success lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="text-success">Congratulations!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		</div><!-- modal-wrapper-demo -->
		<div class="text-center py-4 bg-light border">
		<a class="btn btn-primary" data-target="#modaldemo4" data-toggle="modal" href="">View Live Demo</a>
		</div><!-- modal-footer-demo --></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal4">
									<div class="card-header">
										<div class="card-title">
											Warning Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0 mg-t-20">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-x-circle fs-100 text-danger lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-danger mb-20">Error: Cannot process your entry!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" type="button">Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-target="#modaldemo5" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="p-4 bg-light border border-bottom-0 mg-t-20">
		<div class="modal d-block pos-static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body text-center p-4">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fe fe-x-circle fs-100 text-danger lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="text-danger">Error: Cannot process your entry!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		</div><!-- modal-wrapper-demo -->
		<div class="text-center py-4 bg-light border">
		<a class="btn btn-primary" data-target="#modaldemo5" data-toggle="modal" href="">View Live Demo</a>
		</div><!-- modal-footer-demo --></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="modal5">
									<div class="card-header">
										<div class="card-title">
											Modal Animation Effects
										</div>
									</div>
									<div class="card-body">
										<div class="row ">
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-right" data-toggle="modal" href="#modaldemo8">Slide In Right</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-bottom" data-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Newspaper</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Fall</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-horizontal" data-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Flip Vertical</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-super-scaled" data-toggle="modal" href="#modaldemo8">Super Scaled</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">Sign</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-bottom" data-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-left" data-toggle="modal" href="#modaldemo8">Rotate Left</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">Just Me</a>
											</div>
										</div>
									</div>
		<!---Prism Pre code-->
		<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row ">
		<div class="col-sm-6 col-md-4 col-xl-3">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-slide-in-right" data-toggle="modal" href="#modaldemo8">Slide In Right</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-slide-in-bottom" data-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-0">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Newspaper</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Fall</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-horizontal" data-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Flip Vertical</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-super-scaled" data-toggle="modal" href="#modaldemo8">Super Scaled</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">Sign</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-rotate-bottom" data-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-rotate-left" data-toggle="modal" href="#modaldemo8">Rotate Left</a>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
			<a class="modal-effect btn btn-primary btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">Just Me</a>
		</div>
		</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
		</figure>
		<!---Prism Pre code-->
								</div>
								<!--/div-->
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Modal Sizes</h3>
									</div>
									<div class="card-body text-center">
										<p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
										<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#smallmodal">Small Modal</button>
										<button type="button" class="btn btn-secondary mt-3" data-toggle="modal" data-target="#normalmodal">Default Modal</button>
										<button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#largemodal">large Modal</button>
									</div>
									<!---Prism Pre code-->
<div class="html-code"><i class="las la-code mr-2"></i> Html </div><figure class="highlight mb-0" id="element7"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallmodal">Small Modal</button>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#normalmodal">Default Modal</button>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#largemodal">large Modal</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodal" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="normalmodal" tabindex="-1" role="dialog" aria-labelledby="normalmodal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="normalmodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
				<div class="modal-dialog modal-lg " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largemodal1">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!--Scrolling Modal-->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
						<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					  </div>
					</div>
				</div>
			</div>

			<!-- Large Modal -->
			<div id="largeModal" class="modal fade">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content ">
						<div class="modal-header pd-x-20">
							<h6 class="modal-title">Message Preview</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pd-20">
							<h5 class=" lh-3"><a href="" class="font-weight-bold">Why We Use Electoral College, Not Popular Vote</a></h5>
							<p class="">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- small Modal -->
			<div id="smallModal" class="modal fade">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>This is a modal with small size</p>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Grid Modal -->
			<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal2">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								</div>
								<div class="col-md-6">
									<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
								</div>
								<div class="col-md-6">
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Message Modal -->
			<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal3">New message</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Recipient:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label for="message-text" class="form-control-label">Message:</label>
									<textarea class="form-control" id="message-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Send message</button>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- BASIC MODAL -->
		<div class="modal" id="modaldemo1">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- SMALL MODAL -->
		<div class="modal" id="modaldemo2">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
					<div class="modal-footer justify-content-center">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- LARGE MODAL -->
		<div class="modal" id="modaldemo3">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL ALERT MESSAGE -->
		<div class="modal" id="modaldemo4">
			<div class="modal-dialog modal-dialog-centered text-center " role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body text-center p-4">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						<i class="fe fe-check-circle fs-100 text-success lh-1 mb-5 d-inline-block"></i>
						<h4 class="text-success tx-semibold">Congratulations!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-success pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="modaldemo5">
			<div class="modal-dialog modal-dialog-centered text-center" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body text-center p-4">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						<i class="fe fe-x-circle fs-100 text-danger lh-1 mb-5 d-inline-block"></i>
						<h4 class="text-danger">Error: Cannot process your entry!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL EFFECTS -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog modal-dialog-centered text-center" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Why We Use Electoral College, Not Popular Vote</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-indigo" type="button">Save changes</button> <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
        <!-- End Page -->
@endsection
@section('js')
		<!-- INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection