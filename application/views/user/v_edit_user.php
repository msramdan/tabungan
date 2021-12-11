
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header">
                            <h2>
                                Edit Data User
                            </h2>
                        </div>              
                        <div class="body">
                            <form action="<?php echo base_url(); ?>user/simpanEditData/<?php echo $data_user['anggota_id'] ?>" method="post" enctype="multipart/form-data" role="form">
                                <div class="row clearfix">
                                    <input type="hidden" name="anggota_id" value="<?= $data_user['anggota_id'] ?>">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="username">Username</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="" value="<?php echo $data_user['username'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="username">Nama Lengkap</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required="" value="<?= $data_user['nama_anggota'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="email">Email</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email" id="email_address" class="form-control" placeholder="Email" required="" value="<?= $data_user['email'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="password">Password</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <font style="color: red">*Kosongkan jika tidak merubah password</font>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="alamat">Alamat</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $data_user['alamat'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="telepon">Telepon</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required="" value="<?= $data_user['telepon'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="telepon">Level User</label>
                                        <div class="row clearfix">
                                            <select class="form-control show-tick" required="" name="level">
                                                <?php if ($data_user['level']=='A') { ?>
                                                    <option value="A" selected="">Admin</option>
                                                    <option value="U">User</option>
                                                <?php }else{ ?>
                                                    <option value="A">Admin</option>
                                                    <option value="U" selected="">User</option>
                                                <?php } ?>
                                            </select>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label for="telepon">Is Aktive</label>  
                                        <div class="row clearfix">
                                                <select class="form-control show-tick" required="" name="is_aktive">
                                                    <?php if ($data_user['is_aktive']==1) { ?>
                                                        <option value="1" selected="">Aktive</option>
                                                        <option value="2">Non Aktive</option>
                                                    <?php }else{ ?>
                                                        <option value="1">Aktive</option>
                                                        <option value="2" selected="">Non Aktive</option>
                                                    <?php } ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                <a href="<?php echo site_url('user') ?>" class="btn btn-default m-t-15 waves-effect">CANCEL</a>
                            </form>
                        </div>
                
                </div>
            </div>
