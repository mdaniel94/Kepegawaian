<?php
if(!isset($_SESSION)) {
     session_start();
}
if(isset($_SESSION['username'])){
	include "../include/konek.php";
	 $user= mysql_fetch_array(mysql_query("SELECT * FROM user WHERE kode_user=$_SESSION[username]")); $nama =($user['nama']); $gambar = $user['gambar'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabel UKP</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-user"></i> <span>SIPANJI</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
              
              <?php
              if(empty($gambar)){
				  ?>
                  
			  		<img src="images/user.png" alt="..." class="img-circle profile_img">
			  <?php }
			  else{ ?>
                <img src="images/<?php echo "$gambar";?>.jpg" alt="..." class="img-circle profile_img">
                <?php } ?>
              </div>
              <div class="profile_info">
                <span>Welcome</span><br>
                <span><?php echo "$nama"; ?></span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-users"></i> Data Pegawai <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputpegawai.php">Input Data Pegawai</a></li>
                      <li><a href="tabelpegawai.php">Tabel Data Pegawai</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-star"></i> Usulan Kenaikan Pangkat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabelukptahunan.php">Konfirmasi Kenaikan Pangkat </a></li>
                      <li><a href="tabelukp.php">Data UKP Lengkap</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Kenaikan Gaji Berkala <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabeltahunankgb.php">Tabel Konfirmasi Kenaikan Gaji Berkala </a></li>
                      <li><a href="tabelkgb.php">Data KGB Lengkap</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-heart-o"></i> Usulan Pensiun <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabeltahunanpensiun.php">Data Tahunan Pegawai Pensiun</a></li>
                      <li><a href="tabelpensiun.php">Tabel Data Pensiun</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text"></i>Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabellaporanpegawai.php">Laporan Pegawai</a></li>
                      <li><a href="tabellaporankgb.php">Laporan KGB</a></li>
                      <li><a href="tabellaporanukp.php">Laporan UKP</a></li>
                      <li><a href="tabellaporanpensiun.php">Laporan Pensiun</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php
              if(empty($gambar)){
				  ?>
                  
			  		<img src="images/user.png" alt="">
			  <?php }
			  else{ ?>
                <img src="images/<?php echo "$gambar";?>.jpg" alt="">
                <?php } ?><?php echo "$nama"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profil.php"> Profile</a></li>
                    <li>
                      <a href="editprofil.php">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="aboutus.php">Help</a></li>
                    <li><a href="../login/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel Data UKP</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                    
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Setting Data Pangkat</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#semua" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Seluruh Data Pegawai SUMBAGSEL</a>
                        <li role="presentation"><a href="#tab_content1" id="profile-tab" role="tab" data-toggle="tab" aria-expanded="true">KANWIL DJBC SUMBAGSEL</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">KPPBC TMP B PALEMBANG</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">KPPBC TMP B BANDAR LAMPUNG</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" id="profile-tab3" role="tab" data-toggle="tab" aria-expanded="true">KPPBC TMP B JAMBI</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">KPPBC TMP B BENGKULU</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">KPPBC TMP B PANGKAL PINANG</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">KPPBC TIPE PRATAMA TANJUNG PANDAN</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="semua" aria-labelledby="home-tab">
                          <table class="table table-striped table-bordered" id="datatable" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable0" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KANWIL DJBC SUMBAGSEL' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable1" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TMP B PALEMBANG' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable2" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TMP B BANDAR LAMPUNG' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable3" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TMP B JAMBI' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable4" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TMP B BENGKULU' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						$no = 1;
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable5" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TMP B PANGKAL PINANG' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
                          <table class="table table-striped table-bordered" id="datatable6" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>TMT CPNS</th>
                                <th>JABATAN ESELON</th>
                                <th>TMT PANGKAT</th>
                                <th>NAIK PANGKAT</th>
                                <th>TEMPAT TUGAS</th>
                                <th>ACTION</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/konek.php"; //sambungkan ke database
						$no = 1;
						$hasil=mysql_query("SELECT * FROM `tb_ukp` WHERE `TUGAS`='KPPBC TIPE PRATAMA TANJUNG PANDAN' ORDER BY `NO` ASC,`PANGKAT_GOLONGAN` DESC");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[TMT_CPNS]</td>
							<td>$baris[JABATAN_ESELON]</td>
							<td>$baris[TMT_PANGKAT]</td>
							<td>$baris[NAIK_PANGKAT]</td>
							<td>$baris[TUGAS]</td>
							" ?>
                            <td><a href=update_ukp.php?NIP=<?php echo $baris['NIP']?>            
                <li>
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="glyphicon-class">Setting</span>
                </li>
                            		</a>
                                    <br>
                            <a href=hapus_ukp.php?NIP=<?php echo $baris['NIP']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"          
                <li>
                  <span class="glyphicon glyphicon-trash"></span>
                  <span class="glyphicon-class">Hapus</span>
                </li>
                            		</a></td>
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by Gantella Created By Muhammad Daniel Apriansyah Desain By Colorlib
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        
		$('#datatable').dataTable();
		$('#datatable0').dataTable();
		$('#datatable1').dataTable();
		$('#datatable2').dataTable();
		$('#datatable3').dataTable();
        $('#datatable4').dataTable();
		$('#datatable5').dataTable();
		$('#datatable6').dataTable();
      });
    </script>
  </body>
</html>
<?php 
}else{
?>
<script>document.location.href="../login/"</script>
<?php 
}
?>
