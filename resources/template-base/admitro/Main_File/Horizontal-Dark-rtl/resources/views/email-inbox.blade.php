@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Email Inbox</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers ml-2 fs-14 float-right  mt-1"></i>Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Email</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Email Inbox</a></li>
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
							<div class="col-md-12 col-lg-4 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="{{url('/' . $page='email-compose')}}" class="btn btn-primary btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-inbox fs-18 ml-2"></i> Inbox <span class="mr-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-mail fs-18 ml-2"></i> Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-alert-octagon fs-18 ml-2"></i> Important <span class="mr-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-star fs-18 ml-2"></i> Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-briefcase fs-18 ml-2"></i> Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-tag fs-18 ml-2"></i> Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<i class="fe fe-trash-2 fs-18 ml-2"></i> Trash
										</a>
									</div>
									<div class="p-4">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary ml-2"></span> Friends
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary ml-2"></span> Family
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success ml-2"></span> Social
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info ml-2"></span> Office
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning ml-2"></span> Work
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger ml-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="mail-option">
												<div class="chk-all">
													<div class="btn-group">
														<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
															All
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"> None</a></li>
															<li><a href="#"> Read</a></li>
															<li><a href="#"> Unread</a></li>
														</ul>
													</div>
												</div>
												<div class="btn-group">
													<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
														<i class=" fa fa-refresh"></i>
													</a>
												</div>
												<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
														More
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
														<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
													</ul>
												</div>
												<ul class="unstyled inbox-pagination">
													<li><span>1-50 of 234</span></li>

													<li>
														<a class="np-btn" href="#"><i class="fa fa-angle-left pagination-left"></i></a>
													</li>
												</ul>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Tim Reid, S P N</td>
															<td class="view-message">Boost Your Website Traffic</td>
															<td class="view-message text-right font-weight-semibold">April 01</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message text-right font-weight-semibold">May 23</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Somebody requested a new password </td>
															<td class="view-message text-right font-weight-semibold">June 13</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Skype</td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message text-right font-weight-semibold">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google+</td>
															<td class="view-message">alireza, do you know</td>
															<td class="view-message text-right font-weight-semibold">March 09</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">WOW Slider </td>
															<td class="view-message">New WOW Slider v7.8 - 67% off</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn Pulse</td>
															<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
															<td class="view-message text-right font-weight-semibold">Feb 19</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Drupal Community</td>
															<td class="view-message view-message">Welcome to the Drupal Community</td>
															<td class="view-message text-right font-weight-semibold">March 04</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message text-right font-weight-semibold">May 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn </td>
															<td class="view-message">Alireza: Nokia Networks, System Group and </td>
															<td class="view-message text-right font-weight-semibold">February 25</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Your account was recently logged into</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Twitter</td>
															<td class="view-message">Your Twitter password has been changed</td>
															<td class="view-message text-right font-weight-semibold">April 07</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">InternetSeer</td>
															<td class="view-message">Performance Report</td>
															<td class="view-message text-right font-weight-semibold">July 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Bertina </td>
															<td class="view-message">IMPORTANT: Don't lose your domains!</td>
															<td class="view-message text-right font-weight-semibold">June 16</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Laura Gaffin, S P N </td>
															<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Alireza Zare Login faild</td>
															<td class="view-message text-right font-weight-semibold">feb 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">AddMe.com</td>
															<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Terri Rexer, S P N</td>
															<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
															<td class="view-message text-right font-weight-semibold">April 14</td>
														</tr>

													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination float-right mb-4">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection