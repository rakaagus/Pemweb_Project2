<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>View User</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url() ?>index.php/user">Tempat Wisata</a></li>
						<li class="breadcrumb-item active">Detail User</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Detail User</h3>

				<div class="card-tools">
					<button
						type="button"
						class="btn btn-tool"
						data-card-widget="collapse"
						title="Collapse"
					>
						<i class="fas fa-minus"></i>
					</button>
					<button
						type="button"
						class="btn btn-tool"
						data-card-widget="remove"
						title="Remove"
					>
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama User</td><td><?= $user->nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td><td><?= $user->username; ?></td>
                                </tr>
                                <tr>
                                    <td>Password</td><td><?= $user->password; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td><td><?= $user->email; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Register</td><td><?= $user->created_at; ?></td>
                                </tr>
                                <tr>
                                    <td>Role User</td><td><?= $user->role; ?></td>
                                </tr>
                                <tr>
                                    <td>Status User</td><td>
										<?php if($user->status == 0):?>
											<span class="badge badge-danger">Benned</span>
										<?php else: ?>
											<span class="badge badge-primary">Active</span>
										<?php endif;?>
									</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
			<!-- /.card-body -->
			<div class="card-footer">Footer</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
