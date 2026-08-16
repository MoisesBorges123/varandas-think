@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">File Manager 02</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">File Manager 02</a></li>
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
							<div class="col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body d-flex">
										<div class="chart-circle chart-circle-sm chart-circle mr-0 ml-4" data-value="0.85" data-thickness="5" data-color="#fa057a">
											<div class="mx-auto chart-circle-value text-center fs-14">85%</div>
										</div>
										<div class="mt-3">
											<h5 class="mb-1 font-weight-bold">Storage</h5>
											<p class="mb-0"><span class="text-muted">13.65gb</span> / <span class="text-muted">16gb</span></p>
										</div>
									</div>
									<div class="card-body pt-3 pb-3">
										<div class="list-group list-group-transparent mb-0 file-manger">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-image fs-18 ml-2"></i>Images
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-video fs-18 ml-2"></i>Videos
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-file-text fs-18 ml-2"></i> Docs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-music fs-18 ml-2"></i> Music
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-smartphone fs-18 ml-2"></i> APKs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-download fs-18 ml-2"></i> Downloads
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-grid fs-18 ml-2"></i> More
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<i class="fe fe-lock fs-18 ml-2"></i> Hiddent Files
											</a>
										</div>
									</div>
									<div class="card-body pt-3 pb-3">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary ml-2"></span>Remote Control
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary ml-2"></span>Google Drive
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success ml-2"></span>FTP Files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info ml-2"></span>Transfer files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning ml-2"></span>Deep Clean
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger ml-2"></span>Favourities
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary ml-2"></span>Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="row">
									<div class="col-6 mb-4">
										<div class="btn-list">
											<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Upload New Files</a>
											<a href="#" class="btn btn-outline-secondary"><i class="fe fe-folder"></i> New folder</a>
										</div>
									</div>
									<div class="col-6 col-auto">
										<div class="form-group">
											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Files">
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body p-0">
										<div class="e-table">
											<div class="table-responsive table-lg mb-0">
												<table class="table mb-0" id="example1">
													<tbody>
														<tr>
															<td class="align-middle w-5 border-top-0">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle border-top-0">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		document.pdf
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle border-top-0"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle border-top-0">
																pdf
															</td>
															<td class="text-nowrap align-middle border-top-0">
																453kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Images
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Feb 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																3.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Videos
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>01 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.23gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>03 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.65gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Music
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																890mb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Downloads
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<i class="fa fa-music text-secondary fs-20"></i>
																	<div class="ml-3">
																		Topmusicsong
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>10 Apr 2020</span></td>
															<td class="text-nowrap align-middle">
																Mp4
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="w-5 h-5 ml-2 br-3">
																	<div class="mt-1">
																		Image
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2020</span></td>
															<td class="text-nowrap align-middle">
																jpg
															</td>
															<td class="text-nowrap align-middle">
																1gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		File Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																11gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		New Folder
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>12 Apr 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.24gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/word.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Word Document
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2020</span></td>
															<td class="text-nowrap align-middle">
																Ms Word Document
															</td>
															<td class="text-nowrap align-middle">
																54kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 ml-2">
																	<div class="mt-1">
																		Pdfdocument
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2020</span></td>
															<td class="text-nowrap align-middle">
																pdf
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
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
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
@endsection