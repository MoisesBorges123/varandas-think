@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Pricing 03</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a>Pricing</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Pricing 03</a></li>
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
<div class="pricing-tabs">
							<div class="text-center">
								<div class="pri-tabs-heading">
									<ul class="nav nav-price">
										<li><a class="" data-toggle="tab" href="#month">Month</a></li>
										<li><a class="active show" data-toggle="tab" href="#year">Year</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane pb-0 active show" id="year">
										<div class="row row-sm pricing-style01">
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-lg-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Free</div>
														<div class="display-4 font-weight-semibold my-4">$0</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>4</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 1 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-primary btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-lg-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Premium</div>
														<div class="display-4 font-weight-semibold my-4">$65</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>50</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 10 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-secondary btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-sm-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Enterprise</div>
														<div class="display-4 font-weight-semibold my-4">$100</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>100</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 25 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-info btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mb-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Unlimited</div>
														<div class="display-4 font-weight-semibold my-4">$150</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>Unlimited</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 50 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
															<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-danger btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="month">
										<div class="row row-sm pricing-style01">
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-lg-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Free</div>
														<div class="display-4 font-weight-semibold my-4">$0</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>4</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 1 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-primary btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-lg-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Premium</div>
														<div class="display-4 font-weight-semibold my-4">$250</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>50</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 10 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-secondary btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mg-b-20 mg-sm-b-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Enterprise</div>
														<div class="display-4 font-weight-semibold my-4">$500</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>100</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 25 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
															<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-info btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="card mb-0">
													<div class="card-body text-center">
														<div class="bg-light p-2 text-uppercase font-weight-semibold fs-16 br-3">Unlimited</div>
														<div class="display-4 font-weight-semibold my-4">$1000</div>
														<ul class="list-unstyled leading-loose">
															<li><strong>Unlimited</strong> Ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
															<li><i class="fe fe-check text-success mr-2"></i> 50 Gb Storage</li>
															<li><i class="fe fe-check text-success mr-2"></i> Security Check</li>
															<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
															<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
															<li><i class="fe fe-check text-success mr-2"></i> 24/7 Support</li>
														</ul>
														<div class="text-center mt-6">
															<a href="#" class="btn btn-lg btn-danger btn-block">Choose plan</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pricing-tabs mt-7 bg-white br-7 px-5 pt-5 pb-0">
							<div class="text-center">
								<div class="pri-tabs-heading pri-tabs-heading2">
									<ul class="nav nav-price">
										<li><a class="active show" data-toggle="tab" href="#month1">Month</a></li>
										<li><a class="" data-toggle="tab" href="#year1">Year</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane pb-0 active show" id="month1">
										<!-- Row -->
										<div class="row text-center">
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
													<div class="card-block">
														<div class="pt-4 pb-4">
															<h1><i class="fa fa-cube plan-icon bg-danger"></i></h1>
															<h6 class="text-uppercase font-weight-semibold text-danger">Unlimited Pack</h6>
														</div>
														<div>
															<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$49 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
															<div class="plan-div-border"></div>
														</div>
														<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
															<p><strong>12 </strong> FreeDomain Name</p>
															<p><strong>10</strong> One-Click Apps</p>
															<p><strong>6</strong>  Databases</p>
															<p><strong>Money</strong> BackGuarntee</p>
															<p><strong>24/7</strong> Support</p>
															<a href="#" class="btn btn-lg btn-danger mt-4">Sign Up Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Row -->
									</div>
									<div class="tab-pane pb-0" id="year1">
										<!-- Row -->
										<div class="row text-center">
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
													<div class="card-block">
														<div class="pt-4 pb-4">
															<h1><i class="fa fa-plane plan-icon bg-primary"></i></h1>
															<h6 class="text-uppercase font-weight-semibold text-primary">Starter Pack</h6>
														</div>
														<div>
															<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$119 <span class="text-muted m-l-10"><sup>Per Year</sup></span></h1>
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
													<div class="card-block">
														<div class="pt-4 pb-4">
															<h1><i class="fa fa-trophy plan-icon bg-secondary"></i></h1>
															<h6 class="text-uppercase font-weight-semibold text-secondary">Professional Pack</h6>
														</div>
														<div>
															<h1 class="plan-price padding-b-15 display-4 mb-0  font-weight-semibold">$129 <span class="text-muted m-l-10"><sup>Per Year</sup></span></h1>
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
													<div class="card-block">
														<div class="pt-4 pb-4">
															<h1><i class="fa fa-umbrella plan-icon bg-info"></i></h1>
															<h6 class="text-uppercase font-weight-semibold text-info">Enterprise Pack</h6>
														</div>
														<div>
															<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$139 <span class="text-muted m-l-10"><sup>Per Year</sup></span></h1>
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
											<div class="col-lg-3">
												<div class="card plan-card shadow-none border">
													<div class="card-block">
														<div class="pt-4 pb-4">
															<h1><i class="fa fa-cube plan-icon bg-danger"></i></h1>
															<h6 class="text-uppercase font-weight-semibold text-danger">Unlimited Pack</h6>
														</div>
														<div>
															<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$149 <span class="text-muted m-l-10"><sup>Per Year</sup></span></h1>
															<div class="plan-div-border"></div>
														</div>
														<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
															<p><strong>12 </strong> FreeDomain Name</p>
															<p><strong>10</strong> One-Click Apps</p>
															<p><strong>6</strong>  Databases</p>
															<p><strong>Money</strong> BackGuarntee</p>
															<p><strong>24/7</strong> Support</p>
															<a href="#" class="btn btn-lg btn-danger mt-4">Sign Up Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Row -->
									</div>
								</div>
							</div>
						</div>
						<div class="pricing-tabs mt-7">
							<div class="text-center">
								<div class="pri-tabs-heading pri-tabs-heading3">
									<ul class="nav nav-price">
										<li><a class="" data-toggle="tab" href="#week">Week</a></li>
										<li><a class="" data-toggle="tab" href="#month2">Month</a></li>
										<li><a class="active show" data-toggle="tab" href="#year2">Year</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane pb-0 active show" id="year2">
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
														<p class="lead font-weight-semibold"><strong>$115 /</strong>  Year</p>
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
														<p class="lead font-weight-semibold"><strong>$125 /</strong> Year</p>
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
														<p class="lead font-weight-semibold"><strong>$135 /</strong>  Year</p>
													</div>
													<ul class="list-group list-group-flush text-center">
														<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
														<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
														<li class="list-group-item"><strong> 2 </strong> Databases</li>
														<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
														<li class="list-group-item"><strong> 24/7</strong> support</li>
													</ul>
													<div class="panel-footer text-center border-right-0 border-left-0">
														<a class="btn  btn-lg btn-secondary btn-block" href="#">Purchase Now!</a>
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
														<p class="lead font-weight-semibold"><strong>$199 /</strong> Year</p>
													</div>
													<ul class="list-group list-group-flush text-center">
														<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
														<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
														<li class="list-group-item"><strong> 2 </strong> Databases</li>
														<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
														<li class="list-group-item"><strong> 24/7</strong> support</li>
													</ul>
													<div class="panel-footer text-center border-right-0 border-left-0">
														<a class="btn  btn-lg btn-danger btn-block" href="#">Purchase Now!</a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Row -->
									</div>
									<div class="tab-pane pb-0" id="month2">
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
														<a class="btn  btn-lg btn-primary btn-block" href="#">Purchase Now!</a>
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
									<div class="tab-pane pb-0" id="week">
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
														<p class="lead font-weight-semibold"><strong>$0 /</strong> 7 Days</p>
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
														<p class="lead font-weight-semibold"><strong>$15 /</strong> 7 Days</p>
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
														<p class="lead font-weight-semibold"><strong>$25 /</strong> 7 Days</p>
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
														<p class="lead font-weight-semibold"><strong>$49 /</strong> 7 days</p>
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
								</div>
							</div>
						</div>
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection