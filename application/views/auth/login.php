<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<?php if ($this->session->flashdata('message')) { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('message'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } ?>
			<form class="login100-form validate-form" action="<?php echo base_url(''); ?>" method="post">
				<span class="login100-form-title p-b-5" style="font-size: 20px">
					SELAMAT DATANG DI YODYA KARYA (Persero)
				</span>
				<span class="login100-form-title p-b-5" style="font-size: 20px">
					WILAYAH II MAKASSAR
				</span>
				<span class="login100-form-title p-b-20">
					<i class="zmdi zmdi-library"></i>
				</span>

				<div class="wrap-input100">
					<input class="input100" type="text" name="username">
					<span class="focus-input100" data-placeholder="Username"></span>
				</div>
				<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

				<div class="wrap-input100">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="pass">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>
				<?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit">
							Masuk
						</button>
					</div>
				</div>
				<div class="text-center p-t-10">
					<hr class="sidebar-divider my-0">
				</div>
				<div class="text-center p-t-10">
					<p>©<?= date('Y') ?> All Rights Reserved.</p>
				</div>
			</form>
		</div>
	</div>
</div>