<div class="content mt-3">
<div class="animated fadeIn">
	
	<div class="card">
		<div class="card-header">
			Add New Category
		</div>
			<div class="card-body card-block">
				<form role="form" action="<?=base_url().'En/add_cat'?>" method="post">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Category Name" name="cat_name" type="text" autofocus="">
						</div>
					</fieldset>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
					<button type="reset" class="btn btn-danger btn-sm">
						<i class="fa fa-ban"></i> Reset
					</button>
				</div>
				</form>
			</div>
	</div>

	<div class="card">
		<div class="card-header">
			<strong class="card-title">Category List</strong>
		</div>
		<div class="card-body">
			<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Category Name</th>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach($get_all as $ga){
						?>
							<tr>
								<td><?=$ga->ID;?></td>
								<td><?=$ga->cat_name;?></td>
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