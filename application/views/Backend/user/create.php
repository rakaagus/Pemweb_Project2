<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create User</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url()?>index.php/dashboard">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>index.php/user/">User</a></li>
						<li class="breadcrumb-item active">Create User</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
    <?php
        if(validation_errors()){
      ?>
      <div class="card">
        <div class="card-header">
          error
        </div>
        <div class="card-body">
          <ul>
            <?php if(form_error('nama')){ ?>
            <li><?php echo form_error('nama'); ?></li>
            <?php }?>
            <?php if(form_error('username')){ ?>
            <li><?php echo form_error('username'); ?></li>
            <?php }?>
            <?php if(form_error('email')){ ?>
            <li><?php echo form_error('email'); ?></li>
            <?php }?>
            <?php if(form_error('password')){ ?>
            <li><?php echo form_error('password'); ?></li>
            <?php }?>
          </ul>
        </div>
      </div>
      <?php } ?>
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Create User</h3>

				<div class="card-tools">
					<button
						type="button"
						class="btn btn-tool"
						data-card-widget="collapse"
						title="Collapse"
					>
						<i class="fas fa-minus"></i>
					</button>

				</div>
			</div>
			<div class="card-body">
				<div>
				<?= form_open('user/save')?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" value="<?= set_value('nama') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="UserName" name="username" value="<?= set_value('username') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-10">
          <div class="input-group mb-3">
              <select class="custom-select" id="inputGroupSelect01" name="role">
                <option value="admin">admin</option>
                <option value="user">User</option>
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-2">
            <input type="submit" value="Add" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
        </div>
        <?= form_close();?>
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
