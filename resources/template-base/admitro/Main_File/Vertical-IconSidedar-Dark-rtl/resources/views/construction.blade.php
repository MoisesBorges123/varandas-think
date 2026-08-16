@extends('layouts.master2')
@section('css')
		<!--- INTERNAL JQUERY-COUNTDOWN CSS -->
		<link href="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="page h-100">
			<div class="page-content">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
									<div class="card-body">
										<h2 class="display-3 mb-2 font-weight-bold error-text"><strong>Under Construction</strong></h2>
										<h4 class="text-white-80 mb-5">Our website is in Under construction</h4>
										<div id="launch_date"></div>
									</div>
									<div class="row mt-5">
										<div class="col-md-10 d-block mx-auto">
											<div class="input-group  mb-7">
												<input class="form-control" placeholder="Enter Your Email" type="text">
												<span class="">
													<button class="btn btn-secondary br-tl-0 br-bl-0" type="button">
														<span class="input-group-btn">Submit</span>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="custom-btns">
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-facebook-f"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-google"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-twitter"></i></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-pinterest-p"></i></span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{URL::asset('assets/images/png/construction.png')}}" alt="img">
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
		<!-- INTERNAL JQUERY-COUNTDOWN JS-->
		<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
@endsection
    