<div class="row clearfix">

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="card">
        <div class="body">
                        <div class="alert alert-success">
                                <strong>Pilih Tanggal</strong>
                            </div>
                             <form method="GET">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <?php if(isset($_GET['tanggal']) ){ ?>
                                        <input required="" type="date" id="tanggal" class="form-control" name="tanggal" value="<?= $_GET['tanggal'] ?>">
                                      <?php }else{ ?>
                                        <input required="" type="date" id="tanggal" class="form-control" name="tanggal" value="">
                                      <?php } ?> 
                                    </div>
                                </div>
                                
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">View Data</button>
                                    <?php if(isset($_GET['tanggal']) ){ ?>
                                      <a href="<?= base_url('report/tabunganKelasPerHari') ?>" class="btn btn-warning m-t-15 waves-effect" > Reset</a>
                                    <?php } ?> 

                                </span>
                            </form>
                    </div>
      </div>
    </div>

  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <div class="card">
        <div class="body">
          <div class="table-responsive">
          <?php if(isset($_GET['tanggal'])){
              $tanggal = $_GET['tanggal'];
              $sql = "SELECT * from v_rekap_kelas_per_hari where tanggal='$tanggal '";
              $data = $this->db->query($sql)->result_array();
          } ?>


            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Total Setor</th>
                    <th>Total Tarik</th>
                    <th>Sisa Saldo </th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php if(isset($_GET['tanggal'])){ ?>
                        <?php $no=1;
                        foreach ($data as $rows) { ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $rows['nama_kelas']; ?></td>
                          <td><?php echo $rows['total_tabungan']; ?></td>
                          <td><?php echo $rows['pengeluaran']; ?></td>
                          <td><?php echo $rows['total_tabungan'] - $rows['pengeluaran']; ?></td>
                        </tr>
                      <?php $no++ ?>
                    <?php } ?>
                  <?php } ?>

                  
                </table>
              </div>

                             
        </div>
    </div>
  </div>
</div>
