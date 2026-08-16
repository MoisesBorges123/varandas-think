@extends('layouts.master')
@section('css')
		<!-- Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min-rtl.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- Slect2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Data Tables</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layout mr-2 fs-14"></i>Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Data Tables</a></li>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Basic DataTable</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example1">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0">First name</th>
														<th class="wd-15p border-bottom-0">Last name</th>
														<th class="wd-20p border-bottom-0">Position</th>
														<th class="wd-15p border-bottom-0">Start date</th>
														<th class="wd-10p border-bottom-0">Salary</th>
														<th class="wd-25p border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
													</tr>
													<tr>
														<td>Harry</td>
														<td>Carr</td>
														<td>Technical Manager</td>
														<td>20011/02/87</td>
														<td>$86,000</td>
														<td>h.carr@datatables.net</td>
													</tr>
													<tr>
														<td>Lucas</td>
														<td>Dyer</td>
														<td>Javascript Developer</td>
														<td>2014/08/23</td>
														<td>$456,123</td>
														<td>l.dyer@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Hill</td>
														<td>Sales Manager</td>
														<td>2010/7/14</td>
														<td>$432,230</td>
														<td>k.hill@datatables.net</td>
													</tr>
													<tr>
														<td>Dominic</td>
														<td>Hudson</td>
														<td>Sales Assistant</td>
														<td>2015/10/16</td>
														<td>$654,300</td>
														<td>d.hudson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Integration Specialist</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Jonathan</td>
														<td>Ince</td>
														<td>junior Manager</td>
														<td>2012/11/23</td>
														<td>$345,789</td>
														<td>j.ince@datatables.net</td>
													</tr>
													<tr>
														<td>Leonard</td>
														<td>Ellison</td>
														<td>Junior Javascript Developer</td>
														<td>2010/03/19</td>
														<td>$205,500</td>
														<td>l.ellison@datatables.net</td>
													</tr>
													<tr>
														<td>Madeleine</td>
														<td>Lee</td>
														<td>Software Developer</td>
														<td>20015/8/23</td>
														<td>$456,890</td>
														<td>m.lee@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Miller</td>
														<td>Office Director</td>
														<td>2012/9/25</td>
														<td>$87,654</td>
														<td>k.miller@datatables.net</td>
													</tr>
													<tr>
														<td>Lisa</td>
														<td>Smith</td>
														<td>Support Lead</td>
														<td>2011/05/21</td>
														<td>$342,000</td>
														<td>l.simth@datatables.net</td>
													</tr>
													<tr>
														<td>Morgan</td>
														<td>Keith</td>
														<td>Accountant</td>
														<td>2012/11/27</td>
														<td>$675,245</td>
														<td>m.keith@datatables.net</td>
													</tr>
													<tr>
														<td>Nathan</td>
														<td>Mills</td>
														<td>Senior Marketing Designer</td>
														<td>2014/10/8</td>
														<td>$765,980</td>
														<td>n.mills@datatables.net</td>
													</tr>
													<tr>
														<td>Ruth</td>
														<td>May</td>
														<td>office Manager</td>
														<td>2010/03/17</td>
														<td>$654,765</td>
														<td>r.may@datatables.net</td>
													</tr>
													<tr>
														<td>Penelope</td>
														<td>Ogden</td>
														<td>Marketing Manager</td>
														<td>2013/5/22</td>
														<td>$345,510</td>
														<td>p.ogden@datatables.net</td>
													</tr>
													<tr>
														<td>Sean</td>
														<td>Piper</td>
														<td>Financial Officer</td>
														<td>2014/06/11</td>
														<td>$725,000</td>
														<td>s.piper@datatables.net</td>
													</tr>
													<tr>
														<td>Trevor</td>
														<td>Ross</td>
														<td>Systems Administrator</td>
														<td>2011/05/23</td>
														<td>$237,500</td>
														<td>t.ross@datatables.net</td>
													</tr>
													<tr>
														<td>Vanessa</td>
														<td>Robertson</td>
														<td>Software Designer</td>
														<td>2014/6/23</td>
														<td>$765,654</td>
														<td>v.robertson@datatables.net</td>
													</tr>
													<tr>
														<td>Una</td>
														<td>Richard</td>
														<td>Personnel Manager</td>
														<td>2014/5/22</td>
														<td>$765,290</td>
														<td>u.richard@datatables.net</td>
													</tr>
													<tr>
														<td>Justin</td>
														<td>Peters</td>
														<td>Development lead</td>
														<td>2013/10/23</td>
														<td>$765,654</td>
														<td>j.peters@datatables.net</td>
													</tr>
													<tr>
														<td>Adrian</td>
														<td>Terry</td>
														<td>Marketing Officer</td>
														<td>2013/04/21</td>
														<td>$543,769</td>
														<td>a.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Cameron</td>
														<td>Watson</td>
														<td>Sales Support</td>
														<td>2013/9/7</td>
														<td>$675,876</td>
														<td>c.watson@datatables.net</td>
													</tr>
													<tr>
														<td>Evan</td>
														<td>Terry</td>
														<td>Sales Manager</td>
														<td>2013/10/26</td>
														<td>$66,340</td>
														<td>d.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer</td>
														<td>20017/10/15</td>
														<td>$6,234,000</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Connor</td>
														<td>Johne</td>
														<td>Web Developer</td>
														<td>2011/1/25</td>
														<td>$92,575</td>
														<td>C.johne@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>2012/17/11</td>
														<td>$546,890</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>2013/07/14</td>
														<td>$206,850</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer</td>
														<td>2015/06/23</td>
														<td>$345,789</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>2013/07/19</td>
														<td>$335,300</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>2016/07/18</td>
														<td>$76,890</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>2010/11/45</td>
														<td>$678,890</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>2014/12/25</td>
														<td>$789,100</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>2015/1/19</td>
														<td>$345,890</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>2014/7/28</td>
														<td>$34,983</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>2013/8/19</td>
														<td>$98,000</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>2015/07/28</td>
														<td>$78,879</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>2010/02/14</td>
														<td>$452,500</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>20016/12/11</td>
														<td>$136,200</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>2011/09/26</td>
														<td>$645,750</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>2014/02/03</td>
														<td>$234,500</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>2015/05/03</td>
														<td>$163,500</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>2010/08/19</td>
														<td>$139,575</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>2012/08/11</td>
														<td>$98,540</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>2016/07/07</td>
														<td>$87,500</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>2017/04/09</td>
														<td>$138,575</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>2018/01/04</td>
														<td>$125,250</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>2017/06/01</td>
														<td>$115,000</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>2017/02/01</td>
														<td>$75,650</td>
														<td>j.acosta@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Responsive DataTable</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example2">
												<thead>
													<tr>
														<th class="wd-15p border-bottom-0">First name</th>
														<th class="wd-15p border-bottom-0">Last name</th>
														<th class="wd-20p border-bottom-0">Position</th>
														<th class="wd-15p border-bottom-0">Start date</th>
														<th class="wd-10p border-bottom-0">Salary</th>
														<th class="wd-25p border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
													</tr>
													<tr>
														<td>Harry</td>
														<td>Carr</td>
														<td>Technical Manager</td>
														<td>20011/02/87</td>
														<td>$86,000</td>
														<td>h.carr@datatables.net</td>
													</tr>
													<tr>
														<td>Lucas</td>
														<td>Dyer</td>
														<td>Javascript Developer</td>
														<td>2014/08/23</td>
														<td>$456,123</td>
														<td>l.dyer@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Hill</td>
														<td>Sales Manager</td>
														<td>2010/7/14</td>
														<td>$432,230</td>
														<td>k.hill@datatables.net</td>
													</tr>
													<tr>
														<td>Dominic</td>
														<td>Hudson</td>
														<td>Sales Assistant</td>
														<td>2015/10/16</td>
														<td>$654,300</td>
														<td>d.hudson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Integration Specialist</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Jonathan</td>
														<td>Ince</td>
														<td>junior Manager</td>
														<td>2012/11/23</td>
														<td>$345,789</td>
														<td>j.ince@datatables.net</td>
													</tr>
													<tr>
														<td>Leonard</td>
														<td>Ellison</td>
														<td>Junior Javascript Developer</td>
														<td>2010/03/19</td>
														<td>$205,500</td>
														<td>l.ellison@datatables.net</td>
													</tr>
													<tr>
														<td>Madeleine</td>
														<td>Lee</td>
														<td>Software Developer</td>
														<td>20015/8/23</td>
														<td>$456,890</td>
														<td>m.lee@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Miller</td>
														<td>Office Director</td>
														<td>2012/9/25</td>
														<td>$87,654</td>
														<td>k.miller@datatables.net</td>
													</tr>
													<tr>
														<td>Lisa</td>
														<td>Smith</td>
														<td>Support Lead</td>
														<td>2011/05/21</td>
														<td>$342,000</td>
														<td>l.simth@datatables.net</td>
													</tr>
													<tr>
														<td>Morgan</td>
														<td>Keith</td>
														<td>Accountant</td>
														<td>2012/11/27</td>
														<td>$675,245</td>
														<td>m.keith@datatables.net</td>
													</tr>
													<tr>
														<td>Nathan</td>
														<td>Mills</td>
														<td>Senior Marketing Designer</td>
														<td>2014/10/8</td>
														<td>$765,980</td>
														<td>n.mills@datatables.net</td>
													</tr>
													<tr>
														<td>Ruth</td>
														<td>May</td>
														<td>office Manager</td>
														<td>2010/03/17</td>
														<td>$654,765</td>
														<td>r.may@datatables.net</td>
													</tr>
													<tr>
														<td>Penelope</td>
														<td>Ogden</td>
														<td>Marketing Manager</td>
														<td>2013/5/22</td>
														<td>$345,510</td>
														<td>p.ogden@datatables.net</td>
													</tr>
													<tr>
														<td>Sean</td>
														<td>Piper</td>
														<td>Financial Officer</td>
														<td>2014/06/11</td>
														<td>$725,000</td>
														<td>s.piper@datatables.net</td>
													</tr>
													<tr>
														<td>Trevor</td>
														<td>Ross</td>
														<td>Systems Administrator</td>
														<td>2011/05/23</td>
														<td>$237,500</td>
														<td>t.ross@datatables.net</td>
													</tr>
													<tr>
														<td>Vanessa</td>
														<td>Robertson</td>
														<td>Software Designer</td>
														<td>2014/6/23</td>
														<td>$765,654</td>
														<td>v.robertson@datatables.net</td>
													</tr>
													<tr>
														<td>Una</td>
														<td>Richard</td>
														<td>Personnel Manager</td>
														<td>2014/5/22</td>
														<td>$765,290</td>
														<td>u.richard@datatables.net</td>
													</tr>
													<tr>
														<td>Justin</td>
														<td>Peters</td>
														<td>Development lead</td>
														<td>2013/10/23</td>
														<td>$765,654</td>
														<td>j.peters@datatables.net</td>
													</tr>
													<tr>
														<td>Adrian</td>
														<td>Terry</td>
														<td>Marketing Officer</td>
														<td>2013/04/21</td>
														<td>$543,769</td>
														<td>a.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Cameron</td>
														<td>Watson</td>
														<td>Sales Support</td>
														<td>2013/9/7</td>
														<td>$675,876</td>
														<td>c.watson@datatables.net</td>
													</tr>
													<tr>
														<td>Evan</td>
														<td>Terry</td>
														<td>Sales Manager</td>
														<td>2013/10/26</td>
														<td>$66,340</td>
														<td>d.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer</td>
														<td>20017/10/15</td>
														<td>$6,234,000</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Connor</td>
														<td>Johne</td>
														<td>Web Developer</td>
														<td>2011/1/25</td>
														<td>$92,575</td>
														<td>C.johne@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>2012/17/11</td>
														<td>$546,890</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>2013/07/14</td>
														<td>$206,850</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer</td>
														<td>2015/06/23</td>
														<td>$345,789</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>2013/07/19</td>
														<td>$335,300</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>2016/07/18</td>
														<td>$76,890</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>2010/11/45</td>
														<td>$678,890</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>2014/12/25</td>
														<td>$789,100</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>2015/1/19</td>
														<td>$345,890</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>2014/7/28</td>
														<td>$34,983</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>2013/8/19</td>
														<td>$98,000</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>2015/07/28</td>
														<td>$78,879</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>2010/02/14</td>
														<td>$452,500</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>20016/12/11</td>
														<td>$136,200</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>2011/09/26</td>
														<td>$645,750</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>2014/02/03</td>
														<td>$234,500</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>2015/05/03</td>
														<td>$163,500</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>2010/08/19</td>
														<td>$139,575</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>2012/08/11</td>
														<td>$98,540</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>2016/07/07</td>
														<td>$87,500</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>2017/04/09</td>
														<td>$138,575</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>2018/01/04</td>
														<td>$125,250</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>2017/06/01</td>
														<td>$115,000</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>2017/02/01</td>
														<td>$75,650</td>
														<td>j.acosta@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">File Export</div>
									</div>
									<div class="card-body">
										<div class="">
											<div class="table-responsive">
												<table id="example" class="table table-bordered text-nowrap key-buttons">
													<thead>
														<tr>
															<th class="border-bottom-0">Name</th>
															<th class="border-bottom-0">Position</th>
															<th class="border-bottom-0">Office</th>
															<th class="border-bottom-0">Age</th>
															<th class="border-bottom-0">Start date</th>
															<th class="border-bottom-0">Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Tiger Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
														</tr>
														<tr>
															<td>Garrett Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
														</tr>
														<tr>
															<td>Ashton Cox</td>
															<td>Junior Technical Author</td>
															<td>San Francisco</td>
															<td>66</td>
															<td>2009/01/12</td>
															<td>$86,000</td>
														</tr>
														<tr>
															<td>Cedric Kelly</td>
															<td>Senior Javascript Developer</td>
															<td>Edinburgh</td>
															<td>22</td>
															<td>2012/03/29</td>
															<td>$433,060</td>
														</tr>
														<tr>
															<td>Airi Satou</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>33</td>
															<td>2008/11/28</td>
															<td>$162,700</td>
														</tr>
														<tr>
															<td>Brielle Williamson</td>
															<td>Integration Specialist</td>
															<td>New York</td>
															<td>61</td>
															<td>2012/12/02</td>
															<td>$372,000</td>
														</tr>
														<tr>
															<td>Herrod Chandler</td>
															<td>Sales Assistant</td>
															<td>San Francisco</td>
															<td>59</td>
															<td>2012/08/06</td>
															<td>$137,500</td>
														</tr>
														<tr>
															<td>Rhona Davidson</td>
															<td>Integration Specialist</td>
															<td>Tokyo</td>
															<td>55</td>
															<td>2010/10/14</td>
															<td>$327,900</td>
														</tr>
														<tr>
															<td>Colleen Hurst</td>
															<td>Javascript Developer</td>
															<td>San Francisco</td>
															<td>39</td>
															<td>2009/09/15</td>
															<td>$205,500</td>
														</tr>
														<tr>
															<td>Sonya Frost</td>
															<td>Software Engineer</td>
															<td>Edinburgh</td>
															<td>23</td>
															<td>2008/12/13</td>
															<td>$103,600</td>
														</tr>
														<tr>
															<td>Jena Gaines</td>
															<td>Office Manager</td>
															<td>London</td>
															<td>30</td>
															<td>2008/12/19</td>
															<td>$90,560</td>
														</tr>
														<tr>
															<td>Quinn Flynn</td>
															<td>Support Lead</td>
															<td>Edinburgh</td>
															<td>22</td>
															<td>2013/03/03</td>
															<td>$342,000</td>
														</tr>
														<tr>
															<td>Charde Marshall</td>
															<td>Regional Director</td>
															<td>San Francisco</td>
															<td>36</td>
															<td>2008/10/16</td>
															<td>$470,600</td>
														</tr>
														<tr>
															<td>Haley Kennedy</td>
															<td>Senior Marketing Designer</td>
															<td>London</td>
															<td>43</td>
															<td>2012/12/18</td>
															<td>$313,500</td>
														</tr>
														<tr>
															<td>Tatyana Fitzpatrick</td>
															<td>Regional Director</td>
															<td>London</td>
															<td>19</td>
															<td>2010/03/17</td>
															<td>$385,750</td>
														</tr>
														<tr>
															<td>Michael Silva</td>
															<td>Marketing Designer</td>
															<td>London</td>
															<td>66</td>
															<td>2012/11/27</td>
															<td>$198,500</td>
														</tr>
														<tr>
															<td>Paul Byrd</td>
															<td>Chief Financial Officer (CFO)</td>
															<td>New York</td>
															<td>64</td>
															<td>2010/06/09</td>
															<td>$725,000</td>
														</tr>
														<tr>
															<td>Gloria Little</td>
															<td>Systems Administrator</td>
															<td>New York</td>
															<td>59</td>
															<td>2009/04/10</td>
															<td>$237,500</td>
														</tr>
														<tr>
															<td>Bradley Greer</td>
															<td>Software Engineer</td>
															<td>London</td>
															<td>41</td>
															<td>2012/10/13</td>
															<td>$132,000</td>
														</tr>
														<tr>
															<td>Dai Rios</td>
															<td>Personnel Lead</td>
															<td>Edinburgh</td>
															<td>35</td>
															<td>2012/09/26</td>
															<td>$217,500</td>
														</tr>
														<tr>
															<td>Jenette Caldwell</td>
															<td>Development Lead</td>
															<td>New York</td>
															<td>30</td>
															<td>2011/09/03</td>
															<td>$345,000</td>
														</tr>
														<tr>
															<td>Yuri Berry</td>
															<td>Chief Marketing Officer (CMO)</td>
															<td>New York</td>
															<td>40</td>
															<td>2009/06/25</td>
															<td>$675,000</td>
														</tr>
														<tr>
															<td>Caesar Vance</td>
															<td>Pre-Sales Support</td>
															<td>New York</td>
															<td>21</td>
															<td>2011/12/12</td>
															<td>$106,450</td>
														</tr>
														<tr>
															<td>Doris Wilder</td>
															<td>Sales Assistant</td>
															<td>Sidney</td>
															<td>23</td>
															<td>2010/09/20</td>
															<td>$85,600</td>
														</tr>
														<tr>
															<td>Angelica Ramos</td>
															<td>Chief Executive Officer (CEO)</td>
															<td>London</td>
															<td>47</td>
															<td>2009/10/09</td>
															<td>$1,200,000</td>
														</tr>
														<tr>
															<td>Gavin Joyce</td>
															<td>Developer</td>
															<td>Edinburgh</td>
															<td>42</td>
															<td>2010/12/22</td>
															<td>$92,575</td>
														</tr>
														<tr>
															<td>Jennifer Chang</td>
															<td>Regional Director</td>
															<td>Singapore</td>
															<td>28</td>
															<td>2010/11/14</td>
															<td>$357,650</td>
														</tr>
														<tr>
															<td>Brenden Wagner</td>
															<td>Software Engineer</td>
															<td>San Francisco</td>
															<td>28</td>
															<td>2011/06/07</td>
															<td>$206,850</td>
														</tr>
														<tr>
															<td>Fiona Green</td>
															<td>Chief Operating Officer (COO)</td>
															<td>San Francisco</td>
															<td>48</td>
															<td>2010/03/11</td>
															<td>$850,000</td>
														</tr>
														<tr>
															<td>Shou Itou</td>
															<td>Regional Marketing</td>
															<td>Tokyo</td>
															<td>20</td>
															<td>2011/08/14</td>
															<td>$163,000</td>
														</tr>
														<tr>
															<td>Michelle House</td>
															<td>Integration Specialist</td>
															<td>Sidney</td>
															<td>37</td>
															<td>2011/06/02</td>
															<td>$95,400</td>
														</tr>
														<tr>
															<td>Suki Burks</td>
															<td>Developer</td>
															<td>London</td>
															<td>53</td>
															<td>2009/10/22</td>
															<td>$114,500</td>
														</tr>
														<tr>
															<td>Prescott Bartlett</td>
															<td>Technical Author</td>
															<td>London</td>
															<td>27</td>
															<td>2011/05/07</td>
															<td>$145,000</td>
														</tr>
														<tr>
															<td>Gavin Cortez</td>
															<td>Team Leader</td>
															<td>San Francisco</td>
															<td>22</td>
															<td>2008/10/26</td>
															<td>$235,500</td>
														</tr>
														<tr>
															<td>Martena Mccray</td>
															<td>Post-Sales support</td>
															<td>Edinburgh</td>
															<td>46</td>
															<td>2011/03/09</td>
															<td>$324,050</td>
														</tr>
														<tr>
															<td>Unity Butler</td>
															<td>Marketing Designer</td>
															<td>San Francisco</td>
															<td>47</td>
															<td>2009/12/09</td>
															<td>$85,675</td>
														</tr>
														<tr>
															<td>Howard Hatfield</td>
															<td>Office Manager</td>
															<td>San Francisco</td>
															<td>51</td>
															<td>2008/12/16</td>
															<td>$164,500</td>
														</tr>
														<tr>
															<td>Hope Fuentes</td>
															<td>Secretary</td>
															<td>San Francisco</td>
															<td>41</td>
															<td>2010/02/12</td>
															<td>$109,850</td>
														</tr>
														<tr>
															<td>Vivian Harrell</td>
															<td>Financial Controller</td>
															<td>San Francisco</td>
															<td>62</td>
															<td>2009/02/14</td>
															<td>$452,500</td>
														</tr>
														<tr>
															<td>Timothy Mooney</td>
															<td>Office Manager</td>
															<td>London</td>
															<td>37</td>
															<td>2008/12/11</td>
															<td>$136,200</td>
														</tr>
														<tr>
															<td>Jackson Bradshaw</td>
															<td>Director</td>
															<td>New York</td>
															<td>65</td>
															<td>2008/09/26</td>
															<td>$645,750</td>
														</tr>
														<tr>
															<td>Olivia Liang</td>
															<td>Support Engineer</td>
															<td>Singapore</td>
															<td>64</td>
															<td>2011/02/03</td>
															<td>$234,500</td>
														</tr>
														<tr>
															<td>Bruno Nash</td>
															<td>Software Engineer</td>
															<td>London</td>
															<td>38</td>
															<td>2011/05/03</td>
															<td>$163,500</td>
														</tr>
														<tr>
															<td>Sakura Yamamoto</td>
															<td>Support Engineer</td>
															<td>Tokyo</td>
															<td>37</td>
															<td>2009/08/19</td>
															<td>$139,575</td>
														</tr>
														<tr>
															<td>Thor Walton</td>
															<td>Developer</td>
															<td>New York</td>
															<td>61</td>
															<td>2013/08/11</td>
															<td>$98,540</td>
														</tr>
														<tr>
															<td>Finn Camacho</td>
															<td>Support Engineer</td>
															<td>San Francisco</td>
															<td>47</td>
															<td>2009/07/07</td>
															<td>$87,500</td>
														</tr>
														<tr>
															<td>Serge Baldwin</td>
															<td>Data Coordinator</td>
															<td>Singapore</td>
															<td>64</td>
															<td>2012/04/09</td>
															<td>$138,575</td>
														</tr>
														<tr>
															<td>Zenaida Frank</td>
															<td>Software Engineer</td>
															<td>New York</td>
															<td>63</td>
															<td>2010/01/04</td>
															<td>$125,250</td>
														</tr>
														<tr>
															<td>Zorita Serrano</td>
															<td>Software Engineer</td>
															<td>San Francisco</td>
															<td>56</td>
															<td>2012/06/01</td>
															<td>$115,000</td>
														</tr>
														<tr>
															<td>Jennifer Acosta</td>
															<td>Junior Javascript Developer</td>
															<td>Edinburgh</td>
															<td>43</td>
															<td>2013/02/01</td>
															<td>$75,650</td>
														</tr>
														<tr>
															<td>Cara Stevens</td>
															<td>Sales Assistant</td>
															<td>New York</td>
															<td>46</td>
															<td>2011/12/06</td>
															<td>$145,600</td>
														</tr>
														<tr>
															<td>Hermione Butler</td>
															<td>Regional Director</td>
															<td>London</td>
															<td>47</td>
															<td>2011/03/21</td>
															<td>$356,250</td>
														</tr>
														<tr>
															<td>Lael Greer</td>
															<td>Systems Administrator</td>
															<td>London</td>
															<td>21</td>
															<td>2009/02/27</td>
															<td>$103,500</td>
														</tr>
														<tr>
															<td>Jonas Alexander</td>
															<td>Developer</td>
															<td>San Francisco</td>
															<td>30</td>
															<td>2010/07/14</td>
															<td>$86,500</td>
														</tr>
														<tr>
															<td>Shad Decker</td>
															<td>Regional Director</td>
															<td>Edinburgh</td>
															<td>51</td>
															<td>2008/11/13</td>
															<td>$183,000</td>
														</tr>
														<tr>
															<td>Michael Bruce</td>
															<td>Javascript Developer</td>
															<td>Singapore</td>
															<td>29</td>
															<td>2011/06/27</td>
															<td>$183,000</td>
														</tr>
														<tr>
															<td>Donna Snider</td>
															<td>Customer Support</td>
															<td>New York</td>
															<td>27</td>
															<td>2011/01/25</td>
															<td>$112,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Delted Row DataTable</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>
											<table id="example-delete" class="table table-bordered text-nowrap">
												<thead>
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
													</tr>
													<tr>
														<td>Angelica Ramos</td>
														<td>Chief Executive Officer (CEO)</td>
														<td>London</td>
														<td>47</td>
														<td>2009/10/09</td>
														<td>$1,200,000</td>
													</tr>
													<tr>
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
													</tr>
													<tr>
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
													</tr>
													<tr>
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
													</tr>
													<tr>
														<td>Fiona Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
													</tr>
													<tr>
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
													</tr>
													<tr>
														<td>Michelle House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
													</tr>
													<tr>
														<td>Suki Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
													</tr>
													<tr>
														<td>Prescott Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
													</tr>
													<tr>
														<td>Gavin Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
													</tr>
													<tr>
														<td>Martena Mccray</td>
														<td>Post-Sales support</td>
														<td>Edinburgh</td>
														<td>46</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
													</tr>
													<tr>
														<td>Unity Butler</td>
														<td>Marketing Designer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/12/09</td>
														<td>$85,675</td>
													</tr>
													<tr>
														<td>Howard Hatfield</td>
														<td>Office Manager</td>
														<td>San Francisco</td>
														<td>51</td>
														<td>2008/12/16</td>
														<td>$164,500</td>
													</tr>
													<tr>
														<td>Hope Fuentes</td>
														<td>Secretary</td>
														<td>San Francisco</td>
														<td>41</td>
														<td>2010/02/12</td>
														<td>$109,850</td>
													</tr>
													<tr>
														<td>Vivian Harrell</td>
														<td>Financial Controller</td>
														<td>San Francisco</td>
														<td>62</td>
														<td>2009/02/14</td>
														<td>$452,500</td>
													</tr>
													<tr>
														<td>Timothy Mooney</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>37</td>
														<td>2008/12/11</td>
														<td>$136,200</td>
													</tr>
													<tr>
														<td>Jackson Bradshaw</td>
														<td>Director</td>
														<td>New York</td>
														<td>65</td>
														<td>2008/09/26</td>
														<td>$645,750</td>
													</tr>
													<tr>
														<td>Olivia Liang</td>
														<td>Support Engineer</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2011/02/03</td>
														<td>$234,500</td>
													</tr>
													<tr>
														<td>Bruno Nash</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>38</td>
														<td>2011/05/03</td>
														<td>$163,500</td>
													</tr>
													<tr>
														<td>Sakura Yamamoto</td>
														<td>Support Engineer</td>
														<td>Tokyo</td>
														<td>37</td>
														<td>2009/08/19</td>
														<td>$139,575</td>
													</tr>
													<tr>
														<td>Thor Walton</td>
														<td>Developer</td>
														<td>New York</td>
														<td>61</td>
														<td>2013/08/11</td>
														<td>$98,540</td>
													</tr>
													<tr>
														<td>Finn Camacho</td>
														<td>Support Engineer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/07/07</td>
														<td>$87,500</td>
													</tr>
													<tr>
														<td>Serge Baldwin</td>
														<td>Data Coordinator</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2012/04/09</td>
														<td>$138,575</td>
													</tr>
													<tr>
														<td>Zenaida Frank</td>
														<td>Software Engineer</td>
														<td>New York</td>
														<td>63</td>
														<td>2010/01/04</td>
														<td>$125,250</td>
													</tr>
													<tr>
														<td>Zorita Serrano</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>56</td>
														<td>2012/06/01</td>
														<td>$115,000</td>
													</tr>
													<tr>
														<td>Jennifer Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>43</td>
														<td>2013/02/01</td>
														<td>$75,650</td>
													</tr>
													<tr>
														<td>Cara Stevens</td>
														<td>Sales Assistant</td>
														<td>New York</td>
														<td>46</td>
														<td>2011/12/06</td>
														<td>$145,600</td>
													</tr>
													<tr>
														<td>Hermione Butler</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>47</td>
														<td>2011/03/21</td>
														<td>$356,250</td>
													</tr>
													<tr>
														<td>Lael Greer</td>
														<td>Systems Administrator</td>
														<td>London</td>
														<td>21</td>
														<td>2009/02/27</td>
														<td>$103,500</td>
													</tr>
													<tr>
														<td>Jonas Alexander</td>
														<td>Developer</td>
														<td>San Francisco</td>
														<td>30</td>
														<td>2010/07/14</td>
														<td>$86,500</td>
													</tr>
													<tr>
														<td>Shad Decker</td>
														<td>Regional Director</td>
														<td>Edinburgh</td>
														<td>51</td>
														<td>2008/11/13</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Michael Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Details Display DataTable</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example-1" class="table table-striped table-bordered text-nowrap">
												<thead>
													<tr>
														<th class="border-bottom-0">First name</th>
														<th class="border-bottom-0">Last name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
														<th class="border-bottom-0">Extn.</th>
														<th class="border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger</td>
														<td>Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
														<td>5421</td>
														<td>t.nixon@datatables.net</td>
													</tr>
													<tr>
														<td>Garrett</td>
														<td>Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
														<td>8422</td>
														<td>g.winters@datatables.net</td>
													</tr>
													<tr>
														<td>Ashton</td>
														<td>Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
														<td>1562</td>
														<td>a.cox@datatables.net</td>
													</tr>
													<tr>
														<td>Cedric</td>
														<td>Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
														<td>6224</td>
														<td>c.kelly@datatables.net</td>
													</tr>
													<tr>
														<td>Airi</td>
														<td>Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
														<td>5407</td>
														<td>a.satou@datatables.net</td>
													</tr>
													<tr>
														<td>Brielle</td>
														<td>Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
														<td>4804</td>
														<td>b.williamson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>9608</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Rhona</td>
														<td>Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
														<td>6200</td>
														<td>r.davidson@datatables.net</td>
													</tr>
													<tr>
														<td>Colleen</td>
														<td>Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
														<td>2360</td>
														<td>c.hurst@datatables.net</td>
													</tr>
													<tr>
														<td>Sonya</td>
														<td>Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
														<td>1667</td>
														<td>s.frost@datatables.net</td>
													</tr>
													<tr>
														<td>Jena</td>
														<td>Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
														<td>3814</td>
														<td>j.gaines@datatables.net</td>
													</tr>
													<tr>
														<td>Quinn</td>
														<td>Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
														<td>9497</td>
														<td>q.flynn@datatables.net</td>
													</tr>
													<tr>
														<td>Charde</td>
														<td>Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
														<td>6741</td>
														<td>c.marshall@datatables.net</td>
													</tr>
													<tr>
														<td>Haley</td>
														<td>Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
														<td>3597</td>
														<td>h.kennedy@datatables.net</td>
													</tr>
													<tr>
														<td>Tatyana</td>
														<td>Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
														<td>1965</td>
														<td>t.fitzpatrick@datatables.net</td>
													</tr>
													<tr>
														<td>Michael</td>
														<td>Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
														<td>1581</td>
														<td>m.silva@datatables.net</td>
													</tr>
													<tr>
														<td>Paul</td>
														<td>Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
														<td>3059</td>
														<td>p.byrd@datatables.net</td>
													</tr>
													<tr>
														<td>Gloria</td>
														<td>Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
														<td>1721</td>
														<td>g.little@datatables.net</td>
													</tr>
													<tr>
														<td>Bradley</td>
														<td>Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
														<td>2558</td>
														<td>b.greer@datatables.net</td>
													</tr>
													<tr>
														<td>Dai</td>
														<td>Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
														<td>2290</td>
														<td>d.rios@datatables.net</td>
													</tr>
													<tr>
														<td>Jenette</td>
														<td>Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
														<td>1937</td>
														<td>j.caldwell@datatables.net</td>
													</tr>
													<tr>
														<td>Yuri</td>
														<td>Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
														<td>6154</td>
														<td>y.berry@datatables.net</td>
													</tr>
													<tr>
														<td>Caesar</td>
														<td>Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
														<td>8330</td>
														<td>c.vance@datatables.net</td>
													</tr>
													<tr>
														<td>Doris</td>
														<td>Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
														<td>3023</td>
														<td>d.wilder@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer (CEO)</td>
														<td>London</td>
														<td>47</td>
														<td>2009/10/09</td>
														<td>$1,200,000</td>
														<td>5797</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
														<td>8822</td>
														<td>g.joyce@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
														<td>9239</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
														<td>1314</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
														<td>2947</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
														<td>8899</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
														<td>2769</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
														<td>6832</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
														<td>3606</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
														<td>2860</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>Edinburgh</td>
														<td>46</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>8240</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/12/09</td>
														<td>$85,675</td>
														<td>5384</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>San Francisco</td>
														<td>51</td>
														<td>2008/12/16</td>
														<td>$164,500</td>
														<td>7031</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>San Francisco</td>
														<td>41</td>
														<td>2010/02/12</td>
														<td>$109,850</td>
														<td>6318</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>San Francisco</td>
														<td>62</td>
														<td>2009/02/14</td>
														<td>$452,500</td>
														<td>9422</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>37</td>
														<td>2008/12/11</td>
														<td>$136,200</td>
														<td>7580</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>New York</td>
														<td>65</td>
														<td>2008/09/26</td>
														<td>$645,750</td>
														<td>1042</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2011/02/03</td>
														<td>$234,500</td>
														<td>2120</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>38</td>
														<td>2011/05/03</td>
														<td>$163,500</td>
														<td>6222</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>Tokyo</td>
														<td>37</td>
														<td>2009/08/19</td>
														<td>$139,575</td>
														<td>9383</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>New York</td>
														<td>61</td>
														<td>2013/08/11</td>
														<td>$98,540</td>
														<td>8327</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/07/07</td>
														<td>$87,500</td>
														<td>2927</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2012/04/09</td>
														<td>$138,575</td>
														<td>8352</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>New York</td>
														<td>63</td>
														<td>2010/01/04</td>
														<td>$125,250</td>
														<td>7439</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>56</td>
														<td>2012/06/01</td>
														<td>$115,000</td>
														<td>4389</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>43</td>
														<td>2013/02/01</td>
														<td>$75,650</td>
														<td>3431</td>
														<td>j.acosta@datatables.net</td>
													</tr>
													<tr>
														<td>Cara</td>
														<td>Stevens</td>
														<td>Sales Assistant</td>
														<td>New York</td>
														<td>46</td>
														<td>2011/12/06</td>
														<td>$145,600</td>
														<td>3990</td>
														<td>c.stevens@datatables.net</td>
													</tr>
													<tr>
														<td>Hermione</td>
														<td>Butler</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>47</td>
														<td>2011/03/21</td>
														<td>$356,250</td>
														<td>1016</td>
														<td>h.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Lael</td>
														<td>Greer</td>
														<td>Systems Administrator</td>
														<td>London</td>
														<td>21</td>
														<td>2009/02/27</td>
														<td>$103,500</td>
														<td>6733</td>
														<td>l.greer@datatables.net</td>
													</tr>
													<tr>
														<td>Jonas</td>
														<td>Alexander</td>
														<td>Developer</td>
														<td>San Francisco</td>
														<td>30</td>
														<td>2010/07/14</td>
														<td>$86,500</td>
														<td>8196</td>
														<td>j.alexander@datatables.net</td>
													</tr>
													<tr>
														<td>Shad</td>
														<td>Decker</td>
														<td>Regional Director</td>
														<td>Edinburgh</td>
														<td>51</td>
														<td>2008/11/13</td>
														<td>$183,000</td>
														<td>6373</td>
														<td>s.decker@datatables.net</td>
													</tr>
													<tr>
														<td>Michael</td>
														<td>Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
														<td>5384</td>
														<td>m.bruce@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
														<td>4226</td>
														<td>d.snider@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--div-->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Click DataTable with child tabs & tables</div>
									</div>
									<div class="card-body">
										<div class="table-responsive datatble-filter">
											<table id="example4" class="table card-table table-vcenter text-nowrap border p-0">
												<thead>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr class="table-subheader">
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab1" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab2" data-toggle="tab">History</a></li>
																				<li><a href="#tab3" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab4" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab5" data-toggle="tab">History</a></li>
																				<li><a href="#tab6" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab7" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab8" data-toggle="tab">History</a></li>
																				<li><a href="#tab9" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab10" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab11" data-toggle="tab">History</a></li>
																				<li><a href="#tab12" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Fiona Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab13" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab14" data-toggle="tab">History</a></li>
																				<li><a href="#tab15" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab16" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab17" data-toggle="tab">History</a></li>
																				<li><a href="#tab18" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Michelle House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab19" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab20" data-toggle="tab">History</a></li>
																				<li><a href="#tab21" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Suki Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab22" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab23" data-toggle="tab">History</a></li>
																				<li><a href="#tab24" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Prescott Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab25" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab26" data-toggle="tab">History</a></li>
																				<li><a href="#tab27" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="table-subheader">
														<td>Gavin Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
													</tr>
													<tr style="display:none">
														<td colspan="9">
															<div class="">
																<div class="panel panel-primary receipts-inline-table border-0">
																	<div class="tab-menu-heading p-0 border-0">
																		<div class="tabs-menu1">
																			<!-- Tabs -->
																			<ul class="nav panel-tabs">
																				<li class=""><a href="#tab28" class="active" data-toggle="tab">Receipts</a></li>
																				<li><a href="#tab29" data-toggle="tab">History</a></li>
																				<li><a href="#tab30" data-toggle="tab">Waste</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="panel-body tabs-menu-body p-0 border-0">
																		<div class="tab-content">
																			<div class="tab-pane active" id="tab1">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Yuri Berry</td>
																							<td>Chief Marketing Officer (CMO)</td>
																							<td>New York</td>
																							<td>40</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Doris Wilder</td>
																							<td>Sales Assistant</td>
																							<td>Sidney</td>
																							<td>23</td>
																						</tr>
																						<tr>
																							<td>Angelica Ramos</td>
																							<td>Chief Executive Officer (CEO)</td>
																							<td>London</td>
																							<td>47</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab2">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Suki Burks</td>
																							<td>Developer</td>
																							<td>London</td>
																							<td>53</td>
																						</tr>
																						<tr>
																							<td>Fiona Green</td>
																							<td>Chief Operating Officer (COO)</td>
																							<td>San Francisco</td>
																							<td>48</td>
																						</tr>
																						<tr>
																							<td>Haley Kennedy</td>
																							<td>Senior Marketing Designer</td>
																							<td>London</td>
																							<td>43</td>
																						</tr>
																						<tr>
																							<td>Cedric Kelly</td>
																							<td>Senior Javascript Developer</td>
																							<td>Edinburgh</td>
																							<td>22</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="tab3">
																				<table class="table detail-transaction">
																					<tbody>
																						<tr>
																							<th>Name</th>
																							<th>Position</th>
																							<th>Office</th>
																							<th>Age</th>
																						</tr>
																						<tr class="last-product">
																							<td>Airi Satou</td>
																							<td>Junior Technical Author)</td>
																							<td>San Francisco</td>
																							<td>66</td>
																						</tr>
																						<tr>
																							<td>Bradley Greer</td>
																							<td>Software Engineer</td>
																							<td>London</td>
																							<td>41</td>
																						</tr>
																						<tr>
																							<td>Caesar Vance</td>
																							<td>Pre-Sales Support</td>
																							<td>New York</td>
																							<td>21</td>
																						</tr>
																						<tr>
																							<td>Brielle Williamson</td>
																							<td>Integration Specialist</td>
																							<td>New York</td>
																							<td>61</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
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
		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/datatables.js')}}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection