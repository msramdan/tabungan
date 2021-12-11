<!DOCTYPE html>
 <html><head>
    <title>Laporan Tabungan Kelas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
                font-size: 11px
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 1px 2px;
            }

            #footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                /*background-color: #03a9f4;*/
                /*color: white;*/
                text-align: right;
                line-height: 35px;
            }
        </style>
</head><body >
    <table border="0" cellpadding="0" align="center">
                    <tr>
                        <td style="width: 100%;text-align: center;">
                            <h2>Laporan Tabungan Kelas</h2>
                            <p style="padding: 5px"></p>
                        </td>
                    </tr>
    </table>
    <br>
    <table class="word-table">
        <tr> 
          <th>No</th>
        <th>Kelas</th>
        <th>Total Stor</th>
        <th>Total Tarik</th>
        <th>Total Saldo Kelas</th>
        </tr>
         <?php
                $no=0;
                foreach ($tabungan as  $rows):
                $no++;  
                ?>
                  <tr>

                    <td><?php echo $no; ?></td>
                    <td><?php echo $rows['nama_kelas']; ?></td>
                    <td><?php echo rupiah($rows['total_tabungan'])?></td>
                    <td><?php echo rupiah($rows['pengeluaran']) ?></td>
                    <td><?php echo rupiah($rows['total_tabungan'] - $rows['pengeluaran']) ?></td>
                  </tr>
                <?php endforeach; ?>
                
</table>

    <table class="" style="margin-top: 30px; width: 200px;text-align: center; margin-left: 350px">
        <tr> 
          <td width="250px">Tasikmalaya, <?= date('d F Y') ?></td> 
        </tr>
        <tr>
          <td style="height: 70px;"></td>
        </tr>
        <tr>
          <td><?php  echo ucfirst($this->session->userdata('nama')); ?></td>
        </tr>
                
</table>




<table id="footer" width="100%">
  <tr>
    <!-- <td width="100%"><b>Hotmie Resto Dewi Sartika </b> || RT.004/RW.007, Margahayu, Kecamatan Bekasi Timur, Kota Bekasi, Jawa Barat 17113</td> -->
  </tr>
</table>