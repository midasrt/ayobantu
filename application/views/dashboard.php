<div class="content mt-3">

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-flat-color-1">
			<div class="card-body pb-0">
				<h4 class="mb-0">
					<?php
					foreach($count_usr as $cu){
						echo $cu->countall;
					}
					?>
				</h4>
				<p class="text-light">Total Users</p>
			</div>
		</div>
	</div>
	<!--/.col-->

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-flat-color-2">
			<div class="card-body pb-0">
				<h4 class="mb-0">
					<?php
					foreach($count_cmp as $cc){
						echo $cc->countall;
					}
					?>
				</h4>
				<p class="text-light">Total Campaigns</p>
			</div>
		</div>
	</div>
	<!--/.col-->

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-flat-color-3">
			<div class="card-body pb-0">
				<h4 class="mb-0">
					<?php
					foreach($count_cmp_24 as $cc24){
						echo $cc24->count24;
					}
					?>
				</h4>
				<p class="text-light">New Campaign</p>
			</div>
		</div>
	</div>
	<!--/.col-->

	<div class="col-xl-6">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title mb-0">Transaction Overview</h4>
					</div>
				</div>
				<!-- CANVAS -->
				<div class="chart-wrapper mt-4">
					<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-4">
							<h4 class="card-title mb-0">Online Users</h4>
						</div>
					</div>
					<!-- CANVAS -->
					<div class="chart-wrapper mt-4">
						<canvas class="main-chart" id="online-user-week-line-chart" height="50"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title mb-0">Transaction Overview</h4>
							</div>
						</div>
						<!-- CANVAS -->
						<div class="chart-wrapper mt-4">
							<canvas id="trafficChart" style="height:200px;" height="200"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-4">
									<h4 class="card-title mb-0">Transaction Overview</h4>
								</div>
							</div>
							<!-- CANVAS -->
							<div class="chart-wrapper mt-4">
								<canvas id="trafficChart" style="height:200px;" height="200"></canvas>
							</div>
						</div>
					</div>
				</div>

</div> <!-- .content -->

