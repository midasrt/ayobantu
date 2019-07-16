<div class="content mt-3">
<div class="animated fadeIn">

	<div class="card">
		<div class="card-header">
			<strong class="card-title">Campaign List</strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
                        <th>Campaign Name</th>
                        <th>Campaign Category</th>
                        <th>Submitter Email</th>
                        <th>Submitter Name</th>
                        <th>Target Amount</th>
                        <th>Current Amount</th>
                        <th>Donation Count</th>
                        <th>Create Date</th>
                        <th>Last Update</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach($get_all as $ga){
						?>
							<tr>
								<td><?=$ga->ID;?></td>
                                <td><?=$ga->title;?></td>
                                <td><?=$ga->cat_name;?></td>
                                <td><?=$ga->email;?></td>
                                <td><?=$ga->full_name;?></td>
                                <td><?=number_format($ga->target_amt,0);?></td>
                                <td><?=number_format($ga->curamt,0);?></td>
                                <td><?=$ga->curctr;?></td>
                                <td><?=$ga->create_date;?></td>
                                <td><?=$ga->last_update;?></td>
                                <td><?=$ga->ID;?></td>
							</tr>
						<?php
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>