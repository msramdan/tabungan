<div class="box-body" style="overflow-x: scroll; ">
    <div class="table-responsive">

        <a href="<?= base_url() ?>report/pdfSiswa" class="btn btn-danger" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Export PDF</a>

          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Siswa/Nasabah</th>
                  <th>Total Setor</th>
                  <th>Total Tarik</th>
                  <th>Sisa Saldo</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($report as $rows) { ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['kd_nasabah']; ?></td>
                  <td><?php echo $rows['nama']; ?></td>
                  <td><?php echo $rows['total_tabungan']; ?></td>
                  <td><?php echo $rows['pengeluaran']; ?></td>
                  <td><?php echo $rows['total_tabungan'] - $rows['pengeluaran']; ?></td>
                </tr>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </div>