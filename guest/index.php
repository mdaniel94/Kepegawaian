<?php
	 include "../include/connect.php";
	 $PK= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KANWIL DJBC SUMBAGSEL'")); 
	 $PK1 =($PK['Jumlah']);
	 $WK= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KANWIL DJBC SUMBAGSEL'"));
	 $WK1 =($WK['Jumlah']);
	 $PP= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TMP B PALEMBANG'"));
	 $PP1 =($PP['Jumlah']);
	 $WP= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TMP B PALEMBANG'"));
	 $WP1 =($WP['Jumlah']);
	 $PL= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TMP B BANDAR LAMPUNG'"));
	 $PL1 =($PL['Jumlah']);
	 $WL= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TMP B BANDAR LAMPUNG'"));
	 $WL1 =($WL['Jumlah']);
	 $PJ= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TMP B JAMBI'"));
	 $PJ1 =($PJ['Jumlah']);
	 $WJ= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TMP B JAMBI'"));
	 $WJ1 =($WJ['Jumlah']);
	 $PPP= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TMP B PANGKAL PINANG'"));
	 $PPP1 =($PPP['Jumlah']);
	 $WPP= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TMP B PANGKAL PINANG'"));
	 $WPP1 =($WPP['Jumlah']);
	 $PB= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TMP B BENGKULU'"));
	 $PB1 =($PB['Jumlah']);
	 $WB= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TMP B BENGKULU'"));
	 $WB1 =($WB['Jumlah']);
	 $PT= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'PRIA' AND `TUGAS` ='KPPBC TIPE PRATAMA TANJUNG PANDAN'"));
	 $PT1 =($PT['Jumlah']);
	 $WT= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `JENIS_KELAMIN` = 'WANITA' AND `TUGAS` ='KPPBC TIPE PRATAMA TANJUNG PANDAN'"));
	 $WT1 =($WT['Jumlah']);
	 
	 $kanwil= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE`TUGAS` ='KANWIL DJBC SUMBAGSEL'"));
	 $kanwil1 =($kanwil['Jumlah']);
	 $palembang= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TMP B PALEMBANG'"));
	 $palembang1 =($palembang['Jumlah']);
	 $lampung= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TMP B BANDAR LAMPUNG'"));
	 $lampung1 =($lampung['Jumlah']);
	 $jambi= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TMP B JAMBI'"));
	 $jambi1 =($jambi['Jumlah']);
	 $pangkal= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TMP B PANGKAL PINANG'"));
	 $pangkal1 =($pangkal['Jumlah']);
	 $bengkulu= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TMP B BENGKULU'"));
	 $bengkulu1 =($bengkulu['Jumlah']);
	 
	 $tpandan= mysql_fetch_array(mysql_query(" SELECT COUNT(*) as Jumlah FROM tb_pegawai WHERE `TUGAS` ='KPPBC TIPE PRATAMA TANJUNG PANDAN'"));
	 $tpandan1 =($tpandan['Jumlah']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Menu Utama</title>

    <!-- Bootstrap -->
    <link href="../aplikasi/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../aplikasi/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
              </div>
              

            </div>
            <!-- /sidebar menu -->

        

        <!-- top navigation -->
        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home Kepegawaian <small>Selamat Datang </small></h3>
                
              </div>
              <div class="row">
              <div class="col-md-7 col-sm-7 col-xs-7">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Diagram Pegawai Berdasarkan Jenis Kelamin </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div id="echart_bar_horizontal" style="height:370px;"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-5 col-sm-5 col-xs-5">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Diagram Persentase Pegawai</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie2" style="height:350px;"></div>

                  </div>
                </div>
              </div>
            </div>
            
            
            </div>
            
            <div class="clearfix"></div>

            
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
    
    <!-- Custom Theme Scripts -->
    <script src="../aplikasi/build/js/custom.min.js"></script>
    
	<!-- ECharts -->
    <script src="../aplikasi/vendors/echarts/dist/echarts.min.js"></script>
    <script src="../aplikasi/vendors/echarts/map/js/world.js"></script>
    
  </body>
</html>
<script>
      var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };

      var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

      echartBar.setOption({
        title: {
          text: 'PEGAWAI',
          subtext: 'BERDASARKAN JENIS KELAMIN'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 100,
          data: ['Pria', 'Wanita']
        },
        toolbox: {
          show: true,
          feature: {
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        xAxis: [{
          type: 'value',
          boundaryGap: [0, 0.01]
        }],
        yAxis: [{
          type: 'category',
          data: ['KANWIL DJBC SUMBAGSEL', 'KPPBC TMP B PALEMBANG', 'KPPBC TMP B JAMBI', 'KPPBC TMP B BANDAR LAMPUNG', 'KPPBC TMP B PANGKAL PINANG', 'KPPBC TMP B BENGKULU', 'KPPBC TIPE PRATAMA TANJUNG PANDAN']
        }],
        series: [{
          name: 'Pria',
          type: 'bar',
          data: [<?php echo "$PK1";  ?>, <?php echo "$PP1";  ?>, <?php echo "$PJ1";  ?>,<?php echo "$PL1";  ?>, <?php echo "$PPP1";  ?>, 
		  <?php echo "$PB1";?>, <?php echo "$PT1";  ?>]
        }, {
          name: 'Wanita',
          type: 'bar',
          data: [<?php echo "$WK1";  ?>, <?php echo "$WP1";  ?>, <?php echo "$WJ1";  ?>,<?php echo "$WL1";  ?>, <?php echo "$WPP1";  ?>, 
		  <?php echo "$WB1";?>, <?php echo "$WT1";  ?>]
        }]
      });
	  var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);
      
      echartPieCollapse.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['KANWIL DJBC SUMBAGSEL', 'KPPBC TMP B PALEMBANG', 'KPPBC TMP B JAMBI', 'KPPBC TMP B BANDAR LAMPUNG', 'KPPBC TMP B PANGKAL PINANG', 'KPPBC TMP B BENGKULU', 'KPPBC TIPE PRATAMA TANJUNG PANDAN']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel']
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        series: [{
          name: 'Area Mode',
          type: 'pie',
          radius: [25, 90],
          center: ['50%', 170],
          roseType: 'area',
          x: '50%',
          max: 40,
          sort: 'ascending',
          data: [{
            value: <?php echo "$kanwil1";  ?>,
            name: 'KANWIL DJBC SUMBAGSEL'
          }, {
            value: <?php echo "$palembang1";  ?>,
            name: 'KPPBC TMP B PALEMBANG'
          }, {
            value: <?php echo "$jambi1";  ?>,
            name: 'KPPBC TMP B JAMBI'
          }, {
            value: <?php echo "$lampung1";  ?>,
            name: 'KPPBC TMP B BANDAR LAMPUNG'
          }, {
            value: <?php echo "$pangkal1";  ?>,
            name: 'KPPBC TMP B PANGKAL PINANG'
          }, {
            value: <?php echo "$bengkulu1";  ?>,
            name: 'KPPBC TMP B BENGKULU'
          }, {
            value: <?php echo "$tpandan1";  ?>,
            name: 'KPPBC TIPE PRATAMA TANJUNG PANDAN'
          }]
        }]
      });
	
      
    </script>
