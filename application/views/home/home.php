<div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <marquee direction="left" scrollamount="4" align="center" font-size="50px"><h4>Web Aplikasi Tabungan Sekolah</h4></marquee>

</div>

<!-- Script Untuk Menampilkan waktu real time -->
<center>

<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function tampilkanwaktu(){
        //buat object date berdasarkan waktu saat ini
        var waktu = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = waktu.getHours() + ""; 
        //ambil nilai menit
        var sm = waktu.getMinutes() + "";
        //ambil nilai detik
        var ss = waktu.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);"> 
  <center>
<h1>              
<span id="clock"></span></h1> 
</center>
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
  echo "Minggu";
}elseif ($hari=="Monday") {
  echo "Senin";
}elseif ($hari=="Tuesday") {
  echo "Selasa";
}elseif ($hari=="Wednesday") {
  echo "Rabu";
}elseif ($hari=="Thursday") {
  echo("Kamis");
}elseif ($hari=="Friday") {
  echo "Jum'at";
}elseif ($hari=="Saturday") {
  echo "Sabtu";
}
?>,
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
  echo " Januari ";
}elseif ($bulan=="February") {
  echo " Februari ";
}elseif ($bulan=="March") {
  echo " Maret ";
}elseif ($bulan=="April") {
  echo " April ";
}elseif ($bulan=="May") {
  echo " Mei ";
}elseif ($bulan=="June") {
  echo " Juni ";
}elseif ($bulan=="July") {
  echo " Juli ";
}elseif ($bulan=="August") {
  echo " Agustus ";
}elseif ($bulan=="September") {
  echo " September ";
}elseif ($bulan=="October") {
  echo " Oktober ";
}elseif ($bulan=="November") {
  echo " November ";
}elseif ($bulan=="December") {
  echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>
</center>
<br><br>
<div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">info</i>
                        </div>
                        <div class="content">
                            <div class="text">SALDO KESELURUHAN</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?= rupiah($total_setor - $total_tarik)  ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">info</i>
                        </div>
                        <div class="content">
                            <div class="text">SALDO BULAN INI</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?= rupiah($total_setor_bulan - $total_tarik_bulan)  ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">info</i>
                        </div>
                        <div class="content">
                            <div class="text">SALDO HARI INI</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?= rupiah($total_setor_hari - $total_tarik_hari)  ?></div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA PENGGUNA</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?= $count_pengguna;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">class</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA KELAS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?= $count_kelas;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">DATA SISWA</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?= $count_nasabah;?></div>
                        </div>
                    </div>
                </div>


                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>Uang Setor dan Uang Tarik</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                              <div id="container"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# PIE -->





                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>5 Transaksi Terbaru</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jumlah Uang</th>
                                            <th>Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        <?php foreach ($list_transaksi as $rows) { ?>
                                     
                                      <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows['nama']; ?></td>
                                        <td><?php echo $rows['nama_kelas']; ?></td>
                                        <td><?php echo $rows['value']; ?></td>
                                        <td><?php echo $rows['jenis_trans']; ?></td>
                                      </tr>
                                      <?php $no++ ?>
                                    <?php } ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Data transaksi -->
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>5 Siswa/Nasabah Baru</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        <?php foreach ($list_nasabah as $rows) { ?>
                                     
                                      <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows['kd_nasabah']; ?></td>
                                        <td><?php echo $rows['nama']; ?></td>
                                        <td><?php echo $rows['nama_kelas']; ?></td>
                                        <td><?php echo $rows['notelp']; ?></td>
                                      </tr>
                                      <?php $no++ ?>
                                    <?php } ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Data Pengguna -->
            </div>

<script type="text/javascript">
  // Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Total Uang Keseluruhan ' + <?php echo $total_setor - $total_tarik; ?> + '' ,
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [{
            name: 'Uang di Setor ' + <?php echo $total_setor ?> + '' ,
            y: <?= $total_setor;?>,
            sliced: true,
            selected: true
        },{
            name: 'Uang di Tarik ' + <?php echo $total_tarik ?> + '' ,
            y: <?= $total_tarik;?>,
        }]
    }]
});
  
</script>



