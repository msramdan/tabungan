<?php
if ($this->session->userdata('level')=='A') { ?>
<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                  <a href="<?php echo base_url(); ?>user/adddata" class="btn btn-primary" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Tambah User</a>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Email User</th>
                  <th>No Telepon</th>
                  <th>Level</th>
                  <th>Status User</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($user as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['username']; ?></td>
                  <td><?php echo $rows['nama_anggota']; ?> </td>
                  <td><?php echo $rows['email']; ?> </td>
                  <td><?php echo $rows['telepon']; ?> </td>
                  <?php if ($rows['level']=='A') { ?>
                   <td><?php echo "Admin";?></td>
                  <?php } else if($rows['level']=='U'){?>
                    <td><?php echo "User";?></td>
                  <?php } else if($rows['level']=='S'){?>
                    <td><?php echo "Super User";?></td>
                  <?php }else{?>
                    <td><?php echo "Atasan";?></td>
                  <?php } ?>
                  <?php if($rows['is_aktive']=='1'){ ?>
                      <td><?php echo "Aktive"; ?></td>
                  <?php }else{ ?>
                      <td><?php echo "Non Aktive"; ?></td>
                  <?php } ?>
                  <td>
                    <a href="<?php echo base_url(); ?>user/editUser/<?php echo $rows['anggota_id']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="material-icons">edit</i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>user/datahapus/<?php echo $rows['username'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="material-icons">delete</i></a>
                  </td>
            
             
                <?php $no++ ?>
              <?php } ?>
              </table>
              </div>
              <?php } else { ?>
          <?php redirect('error'); ?>
        <?php }?>



