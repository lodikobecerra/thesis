<title>Motor Pools</title>

@include('navbar.css')
@include('navbar.topNavbar')
@include('navbar.sidebar')
@include('navbar.js')

<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- Main Content -->
			<div class="main-content" style="min-height: 636px;">
				<section class="section">
					<div class="section-body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul class="nav nav-pills" id="myTab3" role="tablist">
				                    <li class="nav-item">
				                      <a class="nav-link" href="trucks">Trucks</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="backhoeLoaders">Backhoe Loaders</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="payLoaders">Payloaders</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="bulldozers">Bulldozers</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="cementMixers">Cement Mixers</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="elfs">Elfs</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link active" href="motorPools">Motor Pools</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="batchings">Batching</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="asphalts">Asphalt</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" href="history">History</a>
				                    </li>
				                    <li class="nav-item">
				                      <a class="nav-link" data-toggle="modal"
                      data-target=".bd-example-modal-lg">Input Equipment</a>
				                    </li>
				                  </ul>
								
								<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="trucks" role="tabpanel" aria-labelledby="trucks-tab">
									
										<div class="card">
											<div class="card-header">
												<h4>MOTOR POOLS</h4>
											</div>
											<div class="card-body p-0">
												<div class="table-responsive">
													<table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
														<thead>
															<tr>
																<th>Body Number</th>
																<th>Status</th>
																<th>Last Project Location</th>
																<th>Operator</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															@foreach($equipments as $motorPool)
															<tr>
																<td><h5><span class="badge badge-secondary">{{$motorPool->body_number}}</span></h5></td></span>
																<td><span>{{$motorPool->status}}</span></td>
																<td><span>{{$motorPool->last_location}}</span></td>
																<td><span>{{$motorPool->operator}}</span></td>
																<td><a href="#" class="btn btn-primary">View Equipment</a></td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>        
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="/addEquipment" method="post" >
							{{csrf_field() }}
							<div class="form-row">
									<div class="form-group col-md-2">
									<label>Equipment Type</label>
									<select class="form-control" name="equipment_type"  placeholder="Pleace choose type of equipment">
										<option>Truck</option>
										<option>Backhoe Loader</option>
										<option>Payloader</option>
										<option>Bulldozer</option>
										<option>Cement Mixer</option>
										<option>Elf</option>
										<option>Motor Pool</option>
										<option>Batching</option>
										<option>Asphalt</option>
									</select>
									</div>
									<div class="form-group col-md-2">
									<label>Body Number</label>
									<input type="text" class="form-control" name="body_number" placeholder="Enter Body Number">
									</div>
									<div class="form-group col-md-2">
									<label>Status</label>
									<select class="form-control" name="status"  placeholder="Pleace  choose  an engineer">
										<option>Available</option>
										<option>Available, no Operator</option>
										<option>On Maintainance</option>
										<option>On Project</option>
									</select>
									</div>
									<div class="form-group col-md-4">
									<label>Last Project Location</label>
									<input type="text" class="form-control" name="last_location" placeholder="Last Location of Equipment">
									</div>
									<div class="form-group col-md-2">
									<label>Operator</label>
									<input type="text" class="form-control" name="operator" placeholder="Enter Name of Operator">
									</div>
								<div class="card-body" style="text-align:left;">
								<input type="submit" name="submit" class="btn btn-primary" value="Add Equipment">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
