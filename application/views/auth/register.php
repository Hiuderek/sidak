<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100" style="width:90%">
			<div class="text-center p-t-10">
				<button class="btn btn-info" style="color:white;margin-bottom:10px; margin-right:-100px; float:left" onClick="javascript:history.go(-1)">
					<div class="fa fa-arrow-left"></div>
					Kembali
				</button>
			</div>
			<form class="login100-form validate-form" action="<?= base_url('welcome/regis'); ?>" method="post">
				<span class="login100-form-title p-b-20">
					Daftarkan Pengguna Borang
				</span>
				<div>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nama" style="margin-bottom: 10px" value="<?= set_value('name') ?>">
					<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" style="margin-bottom: 10px" value="<?= set_value('email') ?>">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" style="margin-bottom: 10px" value="<?= set_value('username') ?>">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="input-group" style="margin-bottom: 10px">
					<span class="input-group-addon"><span class="fa fa-user" style="margin-right: 10px;"></span>Pilih Koordinator</span>
					<span class="form-control"><select class="form-control" style="width:100%" name="pengguna" value="pilih pengguna" required>
							<option selected disabled>Pilih</option>
							<option value=2>Dosen</option>
							<option value=3>Mahasiswa</option>
						</select></span></p>
				</div>
				<div>
					<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" style="margin-bottom: 10px">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div>
					<input type="password" class="form-control" id="password2" name="password2" placeholder="Re-type password" style="margin-bottom: 10px">
				</div>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit">
							Daftarkan
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>