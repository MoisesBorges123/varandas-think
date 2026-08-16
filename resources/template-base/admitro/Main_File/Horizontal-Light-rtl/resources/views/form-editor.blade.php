@extends('layouts.master')
@section('css')
		<!-- INTERNAl Quill css -->
		<link href="{{URL::asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/quill/quill.bubble-rtl.css')}}" rel="stylesheet">

		<!-- INTERNAl WYSIWYG Editor css -->
		<link href="{{URL::asset('assets/plugins/wysiwyag/richtext-rtl.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Form Editor</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text ml-2 fs-14 float-right"></i>Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#"></a>Form Editor</li>
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
						<div class="row row-cards">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Form Editor style1</h3>
									</div>
									<div class="card-body">
										<textarea class="content" name="example"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Form Editor
										</div>
									</div>
									<div class="card-body">
										<div class="ql-wrapper ql-wrapper-demo">
											<div id="quillEditor">
												<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
												<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Form Editor in Modal
										</div>
									</div>
									<div class="card-body">
										<div class="text-center p-4 bg-light border">
											<a class="btn btn-primary" data-target="#modalQuill" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
										<div class="modal">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header pd-20">
														<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body pd-0">
														<div class="ql-wrapper ql-wrapper-modal ht-250">
															<div class="flex-1" id="quillEditorModal">
																<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
																<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
															</div>
														</div>
													</div>
													<div class="modal-footer pd-20">
														<button class="btn btn-primary" type="button">Save changes</button>
														<button class="btn btn-secondary" type="button">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card ">
									<div class="card-header">
										<div class="card-title">
											From Inline-Edit Editor
										</div>
									</div>
									<div class="card-body">
										<div class="wd-xl-100p ht-350">
											<div class="ql-scrolling-demo bg-light p-4 border" id="scrolling-container">
												<div id="quillInline">
													<h2>Try to select me and edit</h2>
													<p><br></p>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->


					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
		<!-- INTERNAL WYSIWYG Editor js -->
		<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>

		<!-- INTERNAL quill js -->
		<script src="{{URL::asset('assets/plugins/quill/quill.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/form-editor2.js')}}"></script>
@endsection