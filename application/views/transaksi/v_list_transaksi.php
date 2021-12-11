<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                  <a href="<?php echo base_url(); ?>transaksi/adddata" class="btn btn-primary" style="margin-bottom:20px; ">Tambah Transaksi</a>&nbsp;
                  <a href="" class="btn btn-success" style="margin-bottom:20px; "  data-toggle="modal" data-target="#exampleModal">Export Data</a>
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
                    <a href="<?php echo base_url(); ?>transaksi/edit_transaksi/<?php echo $rows['id_transaksi']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="material-icons">edit</i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>transaksi/DataHapusTransaksi/<?php echo $rows['id_transaksi'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="material-icons">delete</i></a>
                  </td>
                </tr>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Export Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url() ?>transaksi/excel" method="post" role="form">
                      

                      <div class="form-group">
                            <div class="form-line">
                              <input type="checkbox" id="md_checkbox_21" name="md_checkbox_21" value="Y" class="filled-in chk-col-green" />
                                <label for="md_checkbox_21">Export Semua Data ?</label>
                            </div>
                          </div>

                        <label for="awal" id="lebel1">Tanggal Awal</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="date" id="awal" class="form-control" name="awal" required="">
                            </div>
                          </div>

                          <label for="akhir"  id="lebel2">Tanggal Akhir</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="date" id="akhir" class="form-control" name="akhir" required="">
                            </div>
                          </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Export</button>
                      </div>
                       </form>
                    </div>
                  </div>
                </div>

                <script type="text/javascript">
                 //Inisiasi awal penggunaan jQuery
                 $(document).ready(function(){
                  document.getElementById('md_checkbox_21').onchange = function() {
                  document.getElementById('awal').disabled = this.checked;
                  document.getElementById('akhir').disabled = this.checked;
              };
   

                 });
                </script>
