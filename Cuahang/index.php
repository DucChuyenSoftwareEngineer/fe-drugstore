<?php include 'cut/header.php'?>
	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="container">
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<div class="page-sidebar navbar-collapse collapse">
					<!-- BEGIN SIDEBAR MENU -->
					<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
					<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
					<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
					<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
					<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
					<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<?php include 'cut/nav.php'?>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper" style="margin-top: -17px;">
				<div class="page-content">
					<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
					<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog"
						aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"
										aria-hidden="true"></button>
									<h4 class="modal-title">Modal title</h4>
								</div>
								<div class="modal-body">
									Widget settings form goes here
								</div>
								<div class="modal-footer">
									<button type="button" class="btn blue">Save changes</button>
									<button type="button" class="btn default" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>


					<div class="page-bar">
						<ul class="page-breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="index.html">Trang Ch??? </a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="#">C???a H??ng</a>
							</li>
						</ul>

					</div>
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 statistic-p">
							<div class="row statistic-r">
								<div class="col-lg-4">
									<div class="statistic ">
										<div class="statistic-img">
											<img src="../img/doanh thu ngay.jpg" alt="Doanh thu th??ng">
										</div>
										<div class="statistic-letter">
											<p class="revenue" >Doanh Thu Th??ng 9</p>
											<p style="font-weight: bold;"><span>1200000</span> VN??</p>
	
										</div>
	
									</div>

								</div>
								<div class="col-lg-4">
									<div class="statistic ">
										<div class="statistic-img">
											<img src="../img/icon4-01.png" alt="Doanh thu th??ng">
										</div>
										<div class="statistic-letter">
											<p class="revenue" >Doanh Thu Ng??y Hi???n T???i</p>
											<p style="font-weight: bold;"><span>1200000</span> VN??</p>
	
										</div>
	
									</div>

								</div>
								<div class="col-lg-4">
									<div class="statistic ">
										<div class="statistic-img">
											<img src="../img/doanhthuhientai.jpg" alt="Doanh thu th??ng">
										</div>
										<div class="statistic-letter">
											<p class="revenue" >Doanh Thu Trong Ng??y</p>
											<p style="font-weight: bold;"><span>1200000</span> VN??</p>
	
										</div>
	
									</div>

								</div>
							</div>
						</div>
				
						</div>
						
				
					<div class="row">
						<!-- phi???u ?????t h??ng -->
						<div class="col-md-6 col-sm-6">
							<!-- menu -->
							<div class="portlet light">
								<div class="portlet-title tabbable-line">
									<div class="caption">
										<i class="font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">Phi???u ?????t H??ng
										</span>
									</div>
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_1_1" data-toggle="tab">
												Ph?? Duy???t </a>
										</li>
										<li>
											<a href="#tab_1_2" data-toggle="tab">
												???? Duy???t</a>
										</li>

									</ul>
								</div>
								<div class="portlet-body">
									<!--Ch??a duy???t-->
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1_1">
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:60px !important">
																ID
															</th>
															<th scope="col" style="width:100px !important">
																ID Nh??n Vi??n
															</th>
															<th scope="col">
																Gi???
															</th>

															<th scope="col">
																Ng??y
															</th>


															<th>Tr???ng Th??i</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																NV01
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																NV02
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																NV03
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																NV04
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																NV05
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																NV06
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>
														<tr>
															<td>
																10
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-danger">
																	Ch??a Duy???t</span></td>

														</tr>























													</tbody>
												</table>
											</div>
										</div>
										<!-- ???? duy???t -->
										<div class="tab-pane" id="tab_1_2">
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:60px !important">
																ID
															</th>
															<th scope="col" style="width:100px !important">
																ID Nh??n Vi??n
															</th>
															<th scope="col">
																Gi???
															</th>

															<th scope="col">
																Ng??y
															</th>


															<th>Tr???ng Th??i</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																NV01
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>	

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																NV02
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																NV03
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																NV04
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																NV05
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																NV06
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>
														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>
														<tr>
															<td>
																10
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? duy???t</span></td>

														</tr>























													</tbody>
												</table>

											</div>
										</div>
									</div>

								</div>
								<!--END TABS-->
							</div>
						</div>
						<!-- phi???u nh???p kho -->
						<div class="col-md-6 col-sm-6">
							<!-- menu -->
							<div class="portlet light">
								<div class="portlet-title tabbable-line">
									<div class="caption">
										
										<span class="caption-subject font-green-sharp bold uppercase font-green-sharp">Phi???u Nh???p kho
										</span>
									</div>
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_2_1" data-toggle="tab">
											  Ch??a Nh???p </a>
										</li>
										<li>
											<a href="#tab_2_2" data-toggle="tab">
										    ???? Nh???p</a>
										</li>

									</ul>
								</div>
								<div class="portlet-body">
									<!--Ch??a nh???p-->
									<div class="tab-content">
										<div class="tab-pane active" id="tab_2_1">
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:60px !important">
																ID
															</th>
															<th scope="col" style="width:100px !important">
																ID Nh??n Vi??n
															</th>
															<th scope="col">
																Gi???
															</th>

															<th scope="col">
																Ng??y
															</th>


															<th>Tr???ng Th??i</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																NV01
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher1">
																	<input type="checkbox" name="" id="switcher1">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																NV02
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher2">
																	<input type="checkbox" name="" id="switcher2">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																NV03
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher3">
																	<input type="checkbox" name="" id="switcher3">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																NV04
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher4">
																	<input type="checkbox" name="" id="switcher4">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																NV05
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher5">
																	<input type="checkbox" name="" id="switcher5">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																NV06
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher6">
																	<input type="checkbox" name="" id="switcher6">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher7">
																	<input type="checkbox" name="" id="switcher7">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher8">
																	<input type="checkbox" name="" id="switcher8">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>
														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher9">
																	<input type="checkbox" name="" id="switcher9">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>
  
														</tr>
														<tr>
															<td>
																10
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><body>
																<span class="onclick	 checkbox switcher">
																  <label for="switcher10">
																	<input type="checkbox" name="" id="switcher10">
																	<span><small></small></span>
																  </label>
																</span>
															  
															
															</td>

														</tr>























													</tbody>
												</table>
											</div>
										</div>
										<!-- ???? duy???t -->
										<div class="tab-pane" id="tab_2_2">
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:60px !important">
																ID
															</th>
															<th scope="col" style="width:100px !important">
																ID Nh??n Vi??n
															</th>
															<th scope="col">
																Gi???
															</th>

															<th scope="col">
																Ng??y
															</th>


															<th>Tr???ng Th??i</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																NV01
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>	

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																NV02
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																NV03
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																NV04
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																NV05
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>
															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																NV06
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>
														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>
														<tr>
															<td>
																10
															</td>
															<td>
																NV07
															</td>
															<td>
																21h30
															</td>
															<td>
																12/09/2032
															</td>

															<td><span class="label label-success"> ???? Nh???n</span></td>

														</tr>























													</tbody>
												</table>

											</div>
										</div>
									</div>

								</div>
								<!--END TABS-->
							</div>
						</div>

					</div>
					<div class="clearfix">
					</div>
					<div class="row">
						<!-- danh sach nhan vien -->
						<div class="col-md-6 col-sm-6">
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
											
										<span class="caption-subject font-blue-steel bold uppercase font-green-sharp">Danh S??ch Nh??n Vi??n
											Tr???c </span>
									</div>
									<div class="actions">
										<div class="btn-group">
											<a class="btn green-haze btn-circle btn-sm" href="javascript:;"
												data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
												aria-expanded="false">
												T???t C???<i class="fa fa-angle-down"></i>
											</a>
											<div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right"
												style="text-align: center; cursor: s;">
												<option style="margin-top: 10px;" value="volvo">Ca S??ng</option>
												<option style="margin-top: 10px;" value="saab">Ca T???i</option>
												<option style="margin-top: 10px;" value="opel">T???t C???</option>
											</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng to">
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="tableHeader">
										<div class="table-scrollable">
											<table class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th scope="col" style="width:30px !important">
															M??NV
														</th>
														<th scope="col">
															T??n NV
														</th>
														<th scope="col">
															Gi??? V??o
														</th>
														<th scope="col">
															Gi??? Ra
														</th>
														<th scope="col">
															Ca Tr???c
														</th>


													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															NV01
														</td>
														<td>
															TR???n Th??? Th?????ng
														</td>
														<td>
															8h30
														</td>
														<td>
															16h30
														</td>
														<td>
															Ca s??ng
														</td>

													</tr>
													<tr>
														<td>
															NV02
														</td>
														<td>
															TR???n Th??? Th?????ng Loan
														</td>
														<td>
															8h30
														</td>
														<td>
															16h30
														</td>
														<td>
															Ca Chi???u
														</td>

													</tr>
													<tr>
														<td>
															NV03
														</td>
														<td>
															TR???n Th??? Th?????ng Loan Long
														</td>
														<td>
															8h30
														</td>
														<td>
															16h30
														</td>
														<td>
															Ca Chi???u
														</td>

													</tr>
													<tr>
														<td>
															NV04
														</td>
														<td>
															TR???n Th??? Ph????ng
														</td>
														<td>
															8h30
														</td>
														<td>
															16h30
														</td>
														<td>
															Ca Chi???u
														</td>

													</tr>










												</tbody>
											</table>
										</div>
									</div>
									<div class="scroller-footer">

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="portlet light tasks-widget">
								<div class="portlet-title">
									<div class="caption">
									
										<span class="caption-subject font-green-haze bold uppercase font-green-sharp">Th??ng B??o T??? C??c
											C???a H??ng</span>

									</div>
									<div class="actions">
										<div class="btn-group">
											<a href="javascript:;"
												class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
												<i class="fa fa-repeat"></i>  </a>

										</div>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng to">
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="task-content">
										<div class="tableHeader">
											<!-- START TASK LIST -->
											<ul class="task-list">
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Present 2013 Year IPO Statistics at Board Meeting </span>
														<span class="label label-sm label-success">Company</span>
														<span class="task-bell">
															<i class="fa fa-bell-o"></i>
														</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Hold An Interview for Marketing Manager Position </span>
														<span class="label label-sm label-danger">Marketing</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															AirAsia Intranet System Project Internal Meeting </span>
														<span class="label label-sm label-success">AirAsia</span>
														<span class="task-bell">
															<i class="fa fa-bell-o"></i>
														</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Technical Management Meeting </span>
														<span class="label label-sm label-warning">Company</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Kick-off Company CRM Mobile App Development </span>
														<span class="label label-sm label-info">Internal Products</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Prepare Commercial Offer For SmartVision Website Rewamp
														</span>
														<span class="label label-sm label-danger">SmartVision</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Sign-Off The Comercial Agreement With AutoSmart </span>
														<span class="label label-sm label-default">AutoSmart</span>
														<span class="task-bell">
															<i class="fa fa-bell-o"></i>
														</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															Company Staff Meeting </span>
														<span class="label label-sm label-success">Cruise</span>
														<span class="task-bell">
															<i class="fa fa-bell-o"></i>
														</span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li class="last-line">
													<div class="task-checkbox">
														<input type="checkbox" class="liChild" value="">
													</div>
													<div class="task-title">
														<span class="task-title-sp">
															KeenThemes Investment Discussion </span>
														<span class="label label-sm label-warning">KeenThemes </span>
													</div>
													<div class="task-config">
														<div class="task-config-btn btn-group">
															<a class="btn btn-xs default" href="javascript:;"
																data-toggle="dropdown" data-hover="dropdown"
																data-close-others="true">
																<i class="fa fa-cog"></i><i
																	class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																</li>
																<li>
																	<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																</li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
											<!-- END START TASK LIST -->
										</div>
									</div>
									<div class="task-footer">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Top 5 danh sach -->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
									
										<span class="caption-subject font-green-sharp bold uppercase"ss> Danh S??ch M???t H??ng
											Hang A</span>
									</div>
									<div class="actions">

										<a href="javascript:;"
											class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
											<i class="fa fa-repeat"></i> </a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng to">
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div id="region_statistics_loading" class="scrolls">
								
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:30px !important">
																STT
															</th>
															<th scope="col">
																T??n S???n ph???m
															</th>
															<th scope="col">
																SL
															</th>
															<th scope="col">
																T???ng Ti???n
															</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																Thu???c ng??? h???i ph??c
															</td>
															<td>
																89
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng TP.HCM
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng??? s
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>



													</tbody>
												</table>
											</div>
										
									</div>
								
								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Top 5 danh sach -->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
									
										<span class="caption-subject font-green-sharp bold uppercase "> C???nh B??o Thu???c H???t H???n</span>
									</div>
									<div class="actions">

										<a href="javascript:;"
											class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
											<i class="fa fa-repeat"></i> </a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng to">
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div id="region_statistics_loading" class="scrolls">
										
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:30px !important">
																STT
															</th>
															<th scope="col">
																T??n S???n ph???m
															</th>
															<th scope="col">
																SL
															</th>
															<th scope="col">
																Ng??y
															</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng
															</td>
															<td>
																1
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																Thu???c ng??? h???i ph??c
															</td>
															<td>
																8															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng TP.HCM
															</td>
															<td>
																5
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng??? s
															</td>
															<td>
																8
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>
														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																6
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																52
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																<span class="label label-danger">
																	12/01/2021</span>
															</td>
														</tr>



													</tbody>
												</table>
											
										</div>
									</div>
								
								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>

					
						<!-- END PORTLET-->
					</div>

					<div class="clearfix">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Top 5 danh sach -->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
										
										<span class="caption-subject bold uppercase font-green-sharp">Top Danh S??ch M???t H??ng B??n Ch???y </span>
									</div>
									<div class="actions">

										<a href="javascript:;"
											class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
											<i class="fa fa-repeat"></i> </a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng To">
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div id="region_statistics_loading" class="scrolls">
										
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:30px !important">
																STT
															</th>
															<th scope="col">
																T??n S???n ph???m
															</th>
															<th scope="col">
																SL
															</th>
															<th scope="col">
																T???ng Ti???n
															</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																Thu???c ng??? h???i ph??c
															</td>
															<td>
																89
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng TP.HCM
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng??? s
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>



													</tbody>
												</table>
											</div>
										
									</div>
								
								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Top 5 danh sach -->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption">
										
										<span class="caption-subject font-green-sharp bold uppercase">Thu???c C???n Ph???i Nh???p </span>
									</div>
									<div class="actions">

										<a href="javascript:;"
											class="btn btn-sm btn-circle btn-default easy-pie-chart-reload">
											<i class="fa fa-repeat"></i> </a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen"
											href="javascript:;" data-original-title="" title="Ph??ng To">
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
										</a>
									</div>
								</div>
								<div class="portlet-body">
									<div id="region_statistics_loading" class="scrolls">
									
											<div class="tableHeader table-scrollable">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th scope="col" style="width:30px !important">
																STT
															</th>
															<th scope="col">
																T??n S???n ph???m
															</th>
															<th scope="col">
																SL
															</th>
															<th scope="col">
																Th??nh Ti???n
															</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																1
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																2
															</td>
															<td>
																Thu???c ng??? h???i ph??c
															</td>
															<td>
																89
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																3
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng TP.HCM
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																4
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng??? s
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																5
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																6
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																7
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																8
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>
														<tr>
															<td>
																9
															</td>
															<td>
																Thu???c tr?????ng Sinh h???i d????ng Khong ng???
															</td>
															<td>
																59
															</td>
															<td>
																120000000<span>VN??</span>
															</td>

														</tr>



													</tbody>
												</table>
											
										</div>
									</div>
								
								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>
						
					</div>
					<div class="clearfix">
					</div>

				</div>

				<!-- BEGIN QUICK SIDEBAR -->
				<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
			
				<!-- END QUICK SIDEBAR -->
			</div>
			<!-- END CONTENT -->
			<!-- BEGIN QUICK SIDEBAR -->
			<!--Cooming Soon...-->
			<!-- END QUICK SIDEBAR -->
		</div>
		<!-- END CONTAINER -->
		<!-- BEGIN FOOTER -->
	<?php include 'cut/footer.php'?>
		<!-- END FOOTER -->
	</div>

	<script src="../js/jquery/jquery.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="../js/bootrap/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/bootrap/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="../js/jquery/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../js/layout/metronic.js"></script>
	<script src="../js/layout/layout.js"></script>

	<script>
		jQuery(document).ready(function () {
			Metronic.init(); // init metronic core componets
			Layout.init(); // init layout

		});
	</script>
</body>
<!-- END BODY -->

</html>