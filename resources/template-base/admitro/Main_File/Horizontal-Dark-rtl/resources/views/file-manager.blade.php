@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">File Manager 01</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid ml-2  fs-14 float-right mt-1"></i>Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">File Manager 01</a></li>
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
							<div class="col-lg-8 col-xl-9">
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
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Music</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Vidoes</h6>
												<span class="text-muted">1.5gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Documents</h6>
												<span class="text-muted">234mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<i class="fa fa-music text-secondary"></i>
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">topmp4song.mp4</h6>
												<span class="text-muted">4kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">image.jpg</h6>
												<span class="text-muted">65kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">File documents</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4"> New Folder</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right mr-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="#"><i class="fe fe-edit ml-2 float-right"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share ml-2 float-right"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download ml-2 float-right"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash ml-2 float-right"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
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