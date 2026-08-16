@extends('layouts.master')
@section('css')
		<!-- INTERNAL Gallery css -->
		<link href="{{URL::asset('assets/plugins/gallery/gallery-rtl.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Gallery</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Gallery</a></li>
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
						<div class="demo-gallery card">
							<div class="card-header">
								<div class="card-title">Light Gallery</div>
								<div class="card-options ">
									<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
									<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
								</div>
							</div>
							<div class="card-body">
								<ul id="lightgallery" class="list-unstyled row">
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/1.jpg')}}" data-src="{{URL::asset('assets/images/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/2.jpg')}}" data-src="{{URL::asset('assets/images/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/3.jpg')}}" data-src="{{URL::asset('assets/images/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/4.jpg')}}" data-src="{{URL::asset('assets/images/photos/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/5.jpg')}}" data-src="{{URL::asset('assets/images/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/6.jpg')}}" data-src="{{URL::asset('assets/images/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/7.jpg')}}" data-src="{{URL::asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/8.jpg')}}" data-src="{{URL::asset('assets/images/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/9.jpg')}}" data-src="{{URL::asset('assets/images/photos/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/10.jpg')}}" data-src="{{URL::asset('assets/images/photos/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/11.jpg')}}" data-src="{{URL::asset('assets/images/photos/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/12.jpg')}}" data-src="{{URL::asset('assets/images/photos/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="Thumb-2">
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Gallery js -->
		<script src="{{URL::asset('assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lightgallery.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/gallery/lg-share.js')}}"></script>
        <script src="{{URL::asset('assets/js/gallery.js')}}"></script>
@endsection