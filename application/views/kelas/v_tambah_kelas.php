      <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header">
                            <h2>
                                TAMBAH KELAS
                            </h2>
                        </div>
                        <div class="body">
                             <form action="<?php echo base_url(); ?>kelas/SimpanData" method="post" enctype="multipart/form-data" role="form">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input required="" type="text" id="password" class="form-control" name="nama_kelas">
                                        <label class="form-label">Nama kelas</label>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                <a href="<?php echo site_url('kelas') ?>" class="btn btn-default m-t-15 waves-effect">CANCEL</a>
                            </form>
                        </div>
                    </div>
            </div>
