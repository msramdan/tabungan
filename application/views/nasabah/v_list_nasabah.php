<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                  <a href="<?php echo base_url(); ?>nasabah/tambah_data" class="btn btn-primary" style="margin-bottom:20px; ">Tambah Siswa</a>&nbsp;
                  <a href="" class="btn btn-success" style="margin-bottom:20px; "  data-toggle="modal" data-target="#exampleModal">Import Data</a>
                  <a href="<?= base_url() ?>file/format_import_siswa.xlsx"class="btn btn-success" style="margin-bottom:20px;float: right; ">Download Format Import</a>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Alamat</th>
                  <th>Kelas</th>
                  <th>Telepon</th>
                  <th>Nama Orang Tua</th>
                  <th>Total Tabungan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($nasabah as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['kd_nasabah']; ?></td>
                  <td><?php echo $rows['nama']; ?></td>
                  <td><?php echo $rows['alamat']; ?></td>
                  <td><?php echo $rows['nama_kelas']; ?></td>
                  <td><?php echo $rows['notelp']; ?></td>
                  <td><?php echo $rows['orangtua']; ?></td>
                  <td><a href="<?php echo base_url(); ?>nasabah/view_nasabah/<?php echo $rows['id_nasabah']; ?>/<?php echo $rows['kd_nasabah']; ?>" class="btn btn-success  btn-xs" title="View Tabungan"><i class="material-icons">remove_red_eye</i></a></td>
                  <td style="width: 20%;">
                    
                    <a href="<?php echo base_url(); ?>nasabah/editNasabah/<?php echo $rows['id_nasabah']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="material-icons">edit</i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>nasabah/DataHapus/<?php echo $rows['id_nasabah'] ?>/<?php echo $rows['kd_nasabah']; ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="material-icons">delete</i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>nasabah/import_siswa" method="post" enctype="multipart/form-data" role="form">
                            <label for="id_kelas">Kelas</label>
                            <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" required="" name="id_kelas">
                                                    <option value="">-- Please select --</option>
                                                    <?php foreach ($kelas_siswa as $rows) { ?>
                                              <option value="<?php echo $rows['id_kelas']?>"><?php echo $rows['nama_kelas'] ?></option>       
                                            <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <label for="berkas_excel">File</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input required="" type="file" id="berkas_excel" class="form-control" name="berkas_excel">
                                    </div>
                                </div>
                           
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
       </form>
    </div>
  </div>
</div>

