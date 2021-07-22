<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<ul class="nav navbar-nav">
			<li><?php echo anchor("","Home") ?></li>
			<li><?php echo anchor("anggota","Anggota") ?></li>
			<li><?php echo anchor("petugas_koperasi","Petugas Koperasi") ?></li>
			<li><?php echo anchor("kategori_pinjaman","Kategori Pinjaman") ?></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Transaksi <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><?php echo anchor("simpanan","Input Simpanan") ?></li>
					<li><?php echo anchor("pinjaman","Input Pinjaman") ?></li>
					<li><?php echo anchor("angsuran","Input Angsuran") ?></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><?php echo anchor("simpanan/lapindividu/","Laporan Simpanan Individu") ?></li>
					<li><?php echo anchor("simpanan/lapkop/","Laporan Simpanan Koperasi") ?></li>					
					<li><?php echo anchor("pinjaman/lapindividu/","Laporan Pinjaman Individu") ?></li>
					<li><?php echo anchor("pinjaman/lapkop/","Laporan Pinjaman Koperasi") ?></li>
					<li><?php echo anchor("angsuran/lapangsuran/","Laporan Angsuran") ?></li>					
				</ul>
			</li>
			
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><?php echo anchor("login/logout","Logout") ?></li>
		</ul>		
	</div>
</div>