<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">User</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-lg">
			<?= $this->session->flashdata('message') ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Username</th>
						<th scope="col">Nama User</th>
						<th scope="col">Id Level</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
                    foreach ($user as $ur) : ?>
					<tr>
						<th scope="row"><?= $i; ?></th>
						<td><?= $ur['username']; ?></td>
						<td><?= $ur['namalengkap']; ?></td>
						<td><?= $ur['level']; ?></td>
						<td>
							<a href="<?= base_url('user/') ?>edit_user/<?= $ur['id_user'] ?>"
								class="badge badge-warning">edit</a>
							<a href="<?= base_url('user/') ?>delete_user/<?= $ur['id_user'] ?>"
								class="badge badge-danger" onclick="return confirm('are you sure?');">hapus</a>
						</td>
					</tr>
					<?php $i++;
                    endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- End of Main Content -->
