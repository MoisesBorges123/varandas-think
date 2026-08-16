@extends('layouts.master')
@section('css')
		<!-- INTERNAL Accordion Css -->
        <link href="{{URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />
		<!-- INTERNAL Prism Css -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">ion
@endsect
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Accordion</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-server ml-2 fs-14 float-right mt-1"></i>Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Accordion</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion</h3>
									</div>
									<div class="card-body">
										<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
											<div class="acc-card">
												<div class="acc-header" id="headingOne" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">Collapsible Group Item #1</a>
													</h5>
												</div>
												<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
														wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
														eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
														assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
														nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
														farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
														labore sustainable.
													</div>
												</div>
											</div>
											<div class="acc-card">
												<div class="acc-header" id="headingTwo" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">Collapsible Group Item #2</a>
													</h5>
												</div>
												<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
													</div>
												</div>
											</div>
											<div class="acc-card">
												<div class="acc-header" id="headingThree" role="tab">
													<h5 class="mb-0">
														<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree">Collapsible Group Item #3</a>
													</h5>
												</div>
												<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
													<div class="acc-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
													</div>
												</div><!-- collapse -->
											</div>
										</div><!-- accordion -->
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
	<div class="acc-card">
		<div class="acc-header" id="headingOne" role="tab">
			<h5 class="mb-0">
				<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">Collapsible Group Item #1</a>
			</h5>
		</div>
		<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
			<div class="acc-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
				wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
				eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
				assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
				nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
				farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
				labore sustainable.
			</div>
		</div>
	</div>
	<div class="acc-card">
		<div class="acc-header" id="headingTwo" role="tab">
			<h5 class="mb-0">
				<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">Collapsible Group Item #2</a>
			</h5>
		</div>
		<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
			<div class="acc-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
			</div>
		</div>
	</div>
	<div class="acc-card">
		<div class="acc-header" id="headingThree" role="tab">
			<h5 class="mb-0">
				<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree">Collapsible Group Item #3</a>
			</h5>
		</div>
		<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
			<div class="acc-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
			</div>
		</div><!-- collapse -->
	</div>
</div><!-- accordion --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion 2</h3>
									</div>
									<div class="card-body">
										<div class="panel-group accordion-panel"  role="tablist" aria-multiselectable="true">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne1">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">

															Collapsible Group Item #1
															<span class="float-left"><i class="fe fe-chevron-left"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo2">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

															Collapsible Group Item #2
															<span class="float-left"><i class="fe fe-chevron-left"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
													<div class="panel-body ">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree3">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

															Collapsible Group Item #3
															<span class="float-left"><i class="fe fe-chevron-left"></i></span>
														</a>
													</h4>
												</div>
												<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
													<div class="panel-body ">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element12"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel-group"  role="tablist" aria-multiselectable="true">
	<div class="panel panel-default active">
		<div class="panel-heading " role="tab" id="headingOne1">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">

					Collapsible Group Item #1
					<span class="float-left"><i class="fe fe-chevron-left"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
			<div class="panel-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="panel panel-default mt-2">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

					Collapsible Group Item #2
					<span class="float-left"><i class="fe fe-chevron-left"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
			<div class="panel-body ">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="panel panel-default mt-2">
		<div class="panel-heading" role="tab" id="headingThree3">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

					Collapsible Group Item #3
					<span class="float-left"><i class="fe fe-chevron-left"></i></span>
				</a>
			</h4>
		</div>
		<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
			<div class="panel-body ">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div><!-- panel-group --></script></code></pre>

<div class="clipboard-icon" data-clipboard-target="#element12"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Buttons Accordion</h3>
									</div>
									<div class="card-body">
										<div class="mb-2">
										  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
											Link with href
										  </a>
										  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											Button with data-target
										  </button>
										</div>
										<div class="collapse" id="collapseExample">
											  <div class="border p-3">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="mb-2">
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
	Link with href
  </a>
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
	Button with data-target
  </button>
</div>
<div class="collapse" id="collapseExample">
	  <div class="border p-3">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-paste"></i></div>
</figure>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple targets Accordion</h3>
									</div>
									<div class="card-body">
										<div class="mb-2">
											<a class="btn btn-info" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
											<a class="btn btn-danger"  data-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
											<a class="btn btn-warning" data-toggle="collapse" href=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</a>
										</div>
										<div class="row">
											<div class="col">
												<div class="collapse multi-collapse" id="multiCollapseExample1">
													<div class="border p-3">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
														But I must explain to you how all this you a  explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
													</div>
												</div>
											</div>
											<div class="col">
												<div class="collapse multi-collapse" id="multiCollapseExample2">
													<div class="border p-3">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
<figure class="highlight mb-0" id="element6"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="mb-2">
											<a class="btn btn-info" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
	<a class="btn btn-danger"  data-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</a>
	<a class="btn btn-warning" data-toggle="collapse" href=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</a>
</div>
<div class="row">
	<div class="col">
		<div class="collapse multi-collapse" id="multiCollapseExample1">
			<div class="border p-3">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				But I must explain to you how all this you a  explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
			</div>
		</div>
	</div>
	<div class="col">
		<div class="collapse multi-collapse" id="multiCollapseExample2">
			<div class="border p-3">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-paste"></i></div>
</figure>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Closed Accordion</h3>
									</div>
									<div class="card-body">
										<!-- Accordion begin -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">

											<!-- Section 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><!-- Accordion begin -->
<ul class="demo-accordion accordionjs m-0" data-active-index="false">

	<!-- Section 1 -->
	<li>
		<div><h3>Section 1</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<!-- Section 2 -->
	<li>
		<div><h3>Section 2</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<!-- Section 3 -->
	<li>
		<div><h3>Section 3</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Accordion Style</h3>
									</div>
									<div class="card-body">
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><ul class="demo-accordion accordionjs m-0">
	<li>
		<div><h3>Section 1</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 2</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 3</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
	<li>
		<div><h3>Section 4</h3></div>
		<div>
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Gradient Accordion style</h3>
									</div>
									<div class="card-body">
										<div class="panel-group1" id="accordion1">
											<div class="panel panel-default mb-4 overflow-hidden">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed bg-gradient-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
											<div class="panel panel-default overflow-hidden">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed bg-gradient-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
													</h4>
												</div>
												<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="html-code"><i class="las la-code mr-2"></i> Html </div>
									<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel-group1" id="accordion1">
	<div class="panel panel-default mb-4 overflow-hidden">
		<div class="panel-heading1">
			<h4 class="panel-title1">
				<a class="accordion-toggle collapsed bg-gradient-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
			<div class="panel-body">
				<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
			</div>
		</div>
	</div>
	<div class="panel panel-default overflow-hidden">
		<div class="panel-heading1">
			<h4 class="panel-title1">
				<a class="accordion-toggle collapsed bg-gradient-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
			</h4>
		</div>
		<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
			<div class="panel-body">
				<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"> <i class="las la-paste"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--INTERNAL Clipboard js -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL Prism js -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
		<!--INTERNAL Accordion js-->
		<script src="{{URL::asset('assets/plugins/accordion/accordion.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/accordion.js')}}"></script>
@endsection