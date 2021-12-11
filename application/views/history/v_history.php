<div class="box-body" style="overflow-x: scroll; ">
 <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Info</th>
                  <th>waktu</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($history as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['nama']; ?></td>
                  <td><?php echo $rows['info']; ?></td>
                  <td><?php echo $rows['tanggal']; ?> </td>
                </tr>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </tbody>
          </table>
        </div>



