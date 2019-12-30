
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabel Pensiun</title>

    <!-- Bootstrap -->
    <link href="../aplikasi/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../aplikasi/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../aplikasi/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../aplikasi/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../aplikasi/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../aplikasi/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../aplikasi/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../aplikasi/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../aplikasi/build/css/custom.min.css" rel="stylesheet">
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
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>
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
        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tabel Pensiun</h3>
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
                    <h2>Tabel Laporan Data Pensiun</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table class="table table-striped table-bordered" id="datatable-buttons" >
						<thead>
							<tr align="center">
                            	<th>NO</th>
								<th>NAMA PEGAWAI</th>
								<th>NIP</th>
                                <th>PANGKAT GOLONGAN</th>
                                <th>JABATAN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>TAHUN PENSIUN</th>
                                
                                <th>TEMPAT TUGAS</th>
    						
							</tr>
                         </thead>
                        <tbody>
                        <tr>
                       <?php 
						include "../include/connect.php"; //sambungkan ke database
						$no= 1;
						$hasil=mysql_query("select * FROM tb_pensiun order by NIP");
						while ($baris = mysql_fetch_array($hasil)){
						echo "
							<td>$no</td>
							<td>$baris[NAMA_PEGAWAI]</td>
							<td>'$baris[NIP]</td>
							<td>$baris[PANGKAT_GOLONGAN]</td>
							<td>$baris[JABATAN]</td>
							<td>$baris[TANGGAL_LAHIR]</td>
							<td>$baris[TAHUN_PENSIUN]</td>
							
							<td>$baris[TUGAS]</td>
							" ?>
                            
                            </tr>
<?php $no++; } ?>
					</tbody>

					</table>
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
    <script src="../aplikasi/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../aplikasi/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../aplikasi/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../aplikasi/vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="../aplikasi/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../aplikasi/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../aplikasi/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../aplikasi/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../aplikasi/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../aplikasi/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../aplikasi/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
  </body>
</html>

