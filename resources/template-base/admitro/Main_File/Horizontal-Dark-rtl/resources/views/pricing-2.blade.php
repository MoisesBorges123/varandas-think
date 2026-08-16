@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Pricing 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a>Pricing</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Pricing 02</a></li>
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
						<div class="row text-center no-gutters mb-7">
							<div class="col-lg-4">
								<div class="card plan-card shadow-none">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-plane plan-icon bg-primary"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-primary">Starter Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$19 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>2 </strong> FreeDomain Name</p>
											<p><strong>2</strong> One-Click Apps</p>
											<p><strong>1</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-lg btn-primary mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card plan-card border active">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-trophy plan-icon bg-secondary"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-secondary">Professional Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0  font-weight-semibold">$29 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>3 </strong> FreeDomain Name</p>
											<p><strong>5</strong> One-Click Apps</p>
											<p><strong>3</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-lg btn-secondary mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card plan-card shadow-none">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-umbrella plan-icon bg-info"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-info">Enterprise Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$39 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>10 </strong> FreeDomain Name</p>
											<p><strong>10</strong> One-Click Apps</p>
											<p><strong>8</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-lg btn-info mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="bg-white px-5 pt-5 pb-3 br-7">
							<div class="row no-gutters pt-7 mb-7">
								<div class="col-sm-12 col-lg-4">
									<div class="card shadow-none">
										<div class="card-body text-center pricing bg-gradient-primary p-6">
											<div class="card-category">Basic</div>
											<div class="display-3 my-4 font-weight-semibold">$10</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>2 </strong> FreeDomain Name</li>
												<li><strong>2</strong> One-Click Apps</li>
												<li><strong>1</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-lg-4">
									<div class="card pricing-sctive shadow-none">
										<div class="card-body text-center pricing bg-gradient-danger p-6 py-7">
											<div class="card-category font-weight-semibold">Enterprise</div>
											<div class="display-3 my-4 font-weight-semibold">$99</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>10 </strong> FreeDomain Name</li>
												<li><strong>10</strong> One-Click Apps</li>
												<li><strong>8</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-lg-4">
									<div class="card shadow-none">
										<div class="card-body text-center  pricing bg-gradient-info p-6">
											<div class="card-category">Unlimited</div>
											<div class="display-3 my-4 font-weight-semibold">$139</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>12 </strong> FreeDomain Name</li>
												<li><strong>10</strong> One-Click Apps</li>
												<li><strong>6</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="#" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row no-gutters pt-7">
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 300">
											<path fill="#705ec8" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Personal</div>
									</div>
									<div class="panel-body text-center">
										<p class="lead font-weight-semibold"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-primary btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 300">
											<path fill="#fb1c52" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Premium</div>
									</div>
									<div class="panel-body text-center">
										<p class="lead font-weight-semibold"><strong>$25 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-secondary btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color active bg-white overflow-hidden">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 300">
											<path fill="#5b7fff" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Corporate</div>
									</div>
									<div class="panel-body text-center">
										<p class="lead font-weight-semibold"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-info btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 300">
											<path fill="#ef4b4b" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Business</div>
									</div>
									<div class="panel-body text-center">
										<p class="lead font-weight-semibold"><strong>$99 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-danger btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection