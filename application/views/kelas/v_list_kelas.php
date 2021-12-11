<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                  <a href="<?php echo base_url(); ?>kelas/tambah_data" class="btn btn-primary" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Tambah kelas</a>&nbsp;
                <tr>
                  <th>No</th>
                  <th>Nama kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($kelas as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['nama_kelas']; ?></td>
                  <td style="width: 20%;">
                    <a href="<?php echo base_url(); ?>kelas/edit_kelas/<?php echo $rows['id_kelas']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="material-icons">edit</i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>kelas/DataHapus/<?php echo $rows['id_kelas'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="material-icons">delete</i></a>
                  </td>
                </tr>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </div>


            

