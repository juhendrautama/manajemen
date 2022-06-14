
	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="		   background: #3a6186;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #483D8B, #00FFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin.php" style='color:white;'>Sistem Manajemen Laboratorium</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right" >
				<li class="dropdown">
				<?php $user=$this->session->userdata('level'); ?>
				<?php if($user=='1'){$user='Admin';}else{$user='Laboran';} ?>
					<a class="dropdown-toggle" style="background-color:#5f27cd;color:#ffffff" data-toggle="dropdown" href="#"> ini <?php echo $user; ?>
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="dtadmin.php?akun"><i class="fa fa-user fa-fw"></i> Ubah Password</a>
						<li class="divider"></li>
						<li><a href="Login/logout"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
						</li>
					</ul>
				</li>
			</ul>
	
			<div class="navbar-default sidebar" role="navigation" >
				<div class="sidebar-nav navbar-collapse" ><center><br />
				<?php $user=$this->session->userdata('level'); ?>
				<?php if($user=='1'){$user='Admin';}else{$user='Laboran';} ?>
				<?php if($this->uri->segment('2')=='tambah'){?>
					<img src="<?php base_url('') ?>../assets/image/logo.jpg" width="80" height="80" /><h4><?php echo $user; ?></h4></center> <br />
				<?php }else if($this->uri->segment('3')=='edit'){ ?>
					<img src="<?php base_url('') ?>../../../assets/image/logo.jpg" width="80" height="80" /><h4><?php echo $user; ?></h4></center> <br />
				<?php }else{ ?>	
					<img src="<?php base_url('') ?>assets/image/logo.jpg" width="80" height="80" /><h4><?php echo $user; ?></h4></center> <br />
				<?php } ?>	
					<!-- <ul class="nav" id="side-menu">
						<li><a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Home</a></li>
						<li><a href="data_lab.php"><i class="fa fa-database fa-fw"></i> Laboratorium</a></li>
						<li><a href="data_alkes.php"><i class="fa fa-gear fa-fw"></i> Alat Kesehatan</a></li>
						<li><a href="data_bahan.php"><i class="fa fa-leaf fa-fw"></i> Bahan Praktek</a></li>
						<li><a href="data_pemakaian_bahan.php"><i class="fa fa-book fa-fw"></i> Pemakaian Bahan</a></li>
						<li><a href="data_alat_musnah.php"><i class="fa fa-trash fa-fw"></i> Alat Musnah</a></li>
						<li><a href="data_pengadaan_alat.php"><i class="fa fa-plus-circle fa-fw"></i> Pengadaan</a></li>
						<li><a href="laporan.php"><i class="fa fa-print fa-fw"></i> Laporan</a></li>
					</ul> -->
		<ul class="nav menu">
		   <li class="active"><a href="dashboard"><em class="fa fa-dashboard fa-fw">&nbsp;</em> Home</a></li>
		   <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
		   <em class="fa fa-database fa-fw">&nbsp;</em> Master Data <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
		   <ul class="children collapse" id="sub-item-1">
		   <?php $user1=$this->session->userdata('level'); ?>
		   <?php if($user1=='1'){?>
			 <li><a class="" href="labor"><span class="">&nbsp;</span> Data Ruang Laboratorium</a></li>
			 <li><a class="" href="alkes"><span class="">&nbsp;</span> Data Alat Kesehatan</a></li>
			 <li><a class="" href="laboran"><span class="">&nbsp;</span> Data Petugas Laboran</a></li>
			 <li><a class="" href="bahan"><span class="">&nbsp;</span> Data Bahan Praktek</a></li>
			 <li><a class="" href="pbahan"><span class="">&nbsp;</span> Data Transaksi Pemakaian &nbsp;&nbsp;Bahan</a></li>
			 <li><a class="" href="musnah"><span class="">&nbsp;</span> Data Alat Musnah</a></li>
			 <li><a class="" href="jadwal"><span class="">&nbsp;</span> Data Jadwal Praktek</a></li>
			 <li><a class="" href="kegiatan"><span class="">&nbsp;</span> Data Kegiatan Laboratorium </a></li>
			 <li><a class="" href="karya"><span class="">&nbsp;</span> Data Hasil Karya Laboratorium </a></li>
			<?php }else{ ?>
				<li><a class="" href="alkes"><span class="">&nbsp;</span> Data Alat Kesehatan</a></li>	
				<li><a class="" href="bahan"><span class="">&nbsp;</span> Data Bahan Praktek</a></li>
				<li><a class="" href="pbahan"><span class="">&nbsp;</span> Data Transaksi Pemakaian &nbsp;&nbsp;Bahan</a></li>
				<li><a class="" href="musnah"><span class="">&nbsp;</span> Data Alat Musnah</a></li>
			<?php } ?>	

			</ul>
			</li>
			<?php if($user1=='1'){?>
			<li><a href="peminjaman"><em class="fa fa-book fa-fw">&nbsp;</em> Peminjaman</a></li>
			<li><a href="Pengadaan"><em class="fa fa-plus-circle fa-fw">&nbsp;</em> Pengadaan</a></li>
			<li><a href="laporan"><em class="fa fa-print fa-fw">&nbsp;</em> Laporan</a></li>
			<?php }else{ ?>
				<li><a href="peminjaman"><em class="fa fa-book fa-fw">&nbsp;</em> Peminjaman</a></li>
			<?php } ?>		
			<li><a href="login/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

		<div id="page-wrapper"><br />
			<div class="row">
				<div class="col-lg-12">
