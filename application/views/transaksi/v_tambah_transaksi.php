
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header">
                            <h2>
                                Tambah Data Transaksi
                            </h2>
                        </div>              
                        <div class="body">
                            <form action="<?php echo base_url(); ?>transaksi/simpan_data" method="post" enctype="multipart/form-data" role="form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="ina">Nama Siswa/Nasabah</label>
                                          <div class="input-group">
                                            <input type="text" class="form-control" required autocomplete="off" name="kd_nasabah" id="search-box" placeholder="Ketik ID SIswa / Nama Siswa" type="text" value="">
                                            
                                            <span class="input-group-btn">
                                              <a data-toggle="modal" data-target="#TableAnggota" class="btn btn-primary"><i class="material-icons">search</i></a>
                                            </span>
                                          </div>
                                        <label for="ina">Biodata</label>
                                          <div id="result_tunggu"> <p style="color:red">* Belum Ada Hasil</p></div>
                                          <div id="result"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="jenis_trans">Jenis Transaksi</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" required="" name="jenis_trans" id="jenis_trans">
                                                    <option value="">-- Please select --</option>
                                                    <option value="Setor">Setor</option>
                                                    <option value="Tarik">Tarik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="value">Jumlah Uang</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="value" id="value" class="form-control" placeholder="Jumalah Uang" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="tanggal">Tanggal</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="keterangan">Keterangan</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                <a href="<?php echo site_url('transaksi') ?>" class="btn btn-default m-t-15 waves-effect">CANCEL</a>
                            </form>
                        </div>
                
                </div>
            </div>



  <div class="modal fade" id="TableAnggota">
  <div class="modal-dialog" style="width:80%;">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title">Daftar Siswa/Nasabah</h4>
  </div>
  <div id="modal_body" class="modal-body fileSelection1">
  <div class="box-body" style="overflow-x: scroll; ">
  <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    <thead>
      <tr>
        <th>No</th>
        <th>KD Siswa/Nasabah</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Telepon</th>
        <th>Nama Orang Tua</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1;foreach($nasabah as $isi){ ?>
      <tr>
        <td><?= $no;?></td>
        <td><?= $isi['kd_nasabah'];?></td>
        <td><?= $isi['nama'];?></td>
        <td><?= $isi['nama_kelas'];?></td>
        <td><?= $isi['notelp'];?></td>
        <td><?= $isi['orangtua'];?></td>
        <td style="width:20%;">
          <button class="btn btn-primary" id="Select_File1" data_id="<?= $isi['kd_nasabah'];?>">
          <i class="fa fa-check"> </i> Pilih
          </button>
        </td>
      </tr>
    <?php $no++;}?>
   
    </table>
  </div>
  </div>
</div>
  <div class="modal-footer">
    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
  </div>
  </div>
  </div>
  </div>

    <script>
  $(".fileSelection1 #Select_File1").click(function (e) {
    document.getElementsByName('kd_nasabah')[0].value = $(this).attr("data_id");
    $('#TableAnggota').modal('hide');
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('transaksi/result');?>",
      data:'kd_nasabah='+$(this).attr("data_id"),
      beforeSend: function(){
        $("#result").html("");
        $("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
      },
      success: function(html){
        $("#result").html(html);
        $("#result_tunggu").html('');
      }
    });
  });
  </script>
    <script>
  // AJAX call for autocomplete 
  $(document).ready(function(){
    $("#search-box").keyup(function(){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('transaksi/result');?>",
        data:'kd_nasabah='+$(this).val(),
        beforeSend: function(){
          $("#result").html("");
          $("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
        },
        success: function(html){
          $("#result").html(html);
          $("#result_tunggu").html('');
        }
      });
    });
  });
  </script>
