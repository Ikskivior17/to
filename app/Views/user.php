<!-- <div class="container-fluid position-relative d-flex p-0">
	<div class="container-fluid pt-16 px-16">
					<div class="row g-4">
						<div class="col-sm-12 col-xl-6">
							<div class="bg-secondary rounded h-100 p-4">
								<h6 class="mb-4">Table User</h6>
								<a href="<?= base_url('/home/tambah_user/') ?>"><button class="button"  class="btn btn-square btn-outline-info m-2"><i class="fa fa-plus"></i></button></a>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Action</th>
			
		</tr>
		<?php
			$no=1;
			foreach ($ayu as $renold) {
				?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?php echo $renold->username ?></td> 
			<td><?php echo $renold->password ?></td>  
			<td><?php echo $renold->level ?></td>  
	<td>
		<a href="<?= base_url('/home/hapus_user/'. $renold->id_user) ?>"><button class="button"  class="btn btn-square btn-outline-info m-2"><i class="fa fa-eraser"></i></button></a>

	</td>
		</tr>
		
	<?php  }
	?>
	</div>
	</body>
	</html> -->

	<body>
    <div class="container-fluid position-relative d-flex p-0">
        

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                           
						<h6 class="mb-4">Table User</h6>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Action</th>
			
		</tr>
		<?php
			$no=1;
			foreach ($ayu as $renold) {
				?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?php echo $renold->username ?></td> 
			<td><?php echo $renold->password ?></td>  
			<td><?php echo $renold->level ?></td>  
	<td>
	<a href="<?= base_url('/home/tambah_user/') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>

		<a href="<?= base_url('/home/hapus_user/'. $renold->id_user) ?>"><button class="btn btn-danger"><i class="fa fa-eraser"> </i></button></a>

	</td>
		</tr>
		
	<?php  }
	?>
                        </table>
                    </div>
                </div>
            </div>
           
</body>