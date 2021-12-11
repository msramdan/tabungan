
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header">
                            <h2>
                                Tambah Data Siswa/Nasabah
                            </h2>
                        </div>              
                        <div class="body">
                            <form action="<?php echo base_url(); ?>nasabah/simpan_data" method="post" enctype="multipart/form-data" role="form">
                                 <input type="hidden" name="kd_nasabah" id="kd_nasabah" class="form-control" placeholder="Nama Lengkap" required="" value="<?= $kodeunik; ?>">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="nama">Kode Siswa/Nasabah</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" disabled="" name="kd_nasabah" id="kd_nasabah" class="form-control" placeholder="Nama Lengkap" required="" value="<?= $kodeunik; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="nama">Nama Siswa/Nasabah</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="alamat">Alamat</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="notelp">Telepon</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="notelp" id="notelp" class="form-control" placeholder="Telepon" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="orangtua">Nama Orang Tua</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="orangtua" id="orangtua" class="form-control" placeholder="Nama Orang Tua" required="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                <a href="<?php echo site_url('nasabah') ?>" class="btn btn-default m-t-15 waves-effect">CANCEL</a>
                            </form>
                        </div>
                
                </div>
            </div>
