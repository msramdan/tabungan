<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                   <a href="<?= base_url() ?>transaksi/export_excel/<?=$this->uri->segment(3) ?>" class="btn btn-success" style="margin-bottom:20px; ">Export Data</a>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa/Nasabah</th>
                  <th>Kelas</th>
                  <th>Jenis Transaksi</th>
                  <th>Uang</th>
                  <th>Tanggal</th>
                  <th>Petugas Penginput</th>
                  <th>Ket</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($transaksi as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['nama']; ?></td>
                  <td><?php echo $rows['nama_kelas']; ?></td>
                  <td><?php echo $rows['jenis_trans']; ?></td>
                  <td><?php echo rupiah($rows['value']) ?></td>
                  <td><?php echo $rows['tanggal']; ?></td>
                  <td><?php echo $rows['nama_anggota']; ?></td>
                  <td><?php echo $rows['keterangan']; ?></td>
                  <td style="width: 20%;">
<!--                     <a href="<?php echo base_url(); ?>kelas/edit_kelas/<?php echo $rows['id_nasabah']; ?>" class="btn btn-success  btn-xs" title="Edit"><i class="material-icons">remove_red_eye</i></a> -->
                    <a href="<?php echo base_url(); ?>transaksi/edit_transaksi/<?php echo $rows['id_transaksi']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="material-icons">edit</i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>transaksi/DataHapusTransaksi/<?php echo $rows['id_transaksi'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="material-icons">delete</i></a>
                  </td>
                </tr>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </div>

