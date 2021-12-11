<?php 

$sql_tampil = "SELECT * from t_nasabah JOIN v_tabungan_siswa ON v_tabungan_siswa.id_nasabah =t_nasabah.id_nasabah";?>
    
    <body>
        <h2 style="margin-top:0px">View Data Tabungan</h2>
    <table class="table">
	    <tr><td>Nama Siswa</td><td><?= $data_nasabah['nama']; ?></td></tr>
        <tr><td>Alamat</td><td><?= $data_nasabah['alamat']; ?></td></tr>
        <tr><td>Kelas</td><td><?= $data_nasabah['nama_kelas']; ?></td></tr>
        <tr><td>Telepon</td><td><?= $data_nasabah['notelp']; ?></td></tr>
        <tr><td>Nama Orang Tua</td><td><?= $data_nasabah['orangtua']; ?></td></tr>
        <tr><td>Riwayat Transaksi</td><td><a href="<?php echo base_url() ?>transaksi/riwayat/<?php echo $data_nasabah['kd_nasabah'] ?>" class="btn btn-primary">Riwayat Transaksi</a></td></tr>
        <tr><td>
        <h2>Total Setor :<?= rupiah($tabungan['total_tabungan']) ?> </h2>
        <h2>Total Tarik :<?= rupiah($tabungan['pengeluaran'])?> </h2> 
        <?php $saldo = $tabungan['total_tabungan'] -$tabungan['pengeluaran'];  ?>
        <h2>Sisa Tabungan : <?php echo rupiah($saldo) ?> </h2>
        </td>
        </tr>
	    <tr><td></td><td><a href="<?php echo site_url('nasabah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
