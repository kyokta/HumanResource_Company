<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center" style="padding-top: 30px;">
                            <h1><b>EDIT PEKERJA</b></h1>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;">
                    <div class="col-md-12">
                        <form action="<?= BASEURL; ?>/pekerja/updatepekerja" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <span><b>Data Pribadi:</b></span>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="id_pegawai" value="<?= $data['pekerja']['id_pegawai']; ?>" hidden readonly>
                                        <input type="text" class="form-control" style="width: 400px" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $data['pekerja']['nama_lengkap']; ?>" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" style="width: 400px" name="tmp_lahir" placeholder="Tempat Lahir" value="<?= $data['pekerja']['tempat_lahir']; ?>" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" style="width: 400px" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $data['pekerja']['tanggal_lahir']; ?>" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="npwp">NPWP</label>
                                        <input type="text" class="form-control" style="width: 400px" name="npwp" placeholder="NPWP" value="<?= $data['pekerja']['npwp']; ?>" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" style="width: 400px; height: 100px;" placeholder="Alamat" required><?= $data['pekerja']['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span><b>Data Perusahaan:</b></span>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="seksi">Seksi</label><br>
                                        <input type="text" id="selected-jabatan" value="<?= $data['seksi']; ?>" hidden>
                                        <select name="seksi" style="width: 400px;" class="form-control pekerja-seksi" required>
                                            <option value=""></option>
                                            <?php foreach ($data['seksi'] as $seksi) { ?>
                                                <?php if ($seksi['id'] == $data['pekerja']['seksi']) { ?>
                                                    <option value="<?= $seksi['id']; ?>" selected><?= $seksi['seksi']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $seksi['id']; ?>"><?= $seksi['seksi']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="jabatan">Jabatan</label><br>
                                        <select name="jabatan" style="width: 400px;" class="form-control pekerja-jabatan" required>
                                            <option value=""></option>
                                            <?php foreach ($data['jabatan'] as $jabatan) { ?>
                                                <?php if ($jabatan['id'] == $data['pekerja']['jabatan']) { ?>
                                                    <option value="<?= $jabatan['id']; ?>" selected><?= $jabatan['jabatan']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $jabatan['id']; ?>"><?= $jabatan['jabatan']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="golongan">Golongan</label><br>
                                        <select name="golongan" style="width: 400px;" class="form-control pekerja-golongan" required>
                                            <option value=""></option>
                                            <?php foreach ($data['golongan'] as $golongan) { ?>
                                                <?php if ($golongan['id'] == $data['pekerja']['golongan']) { ?>
                                                    <option value="<?= $golongan['id']; ?>" selected><?= $golongan['golongan']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $golongan['id']; ?>"><?= $golongan['golongan']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="pekerjaan">Pekerjaan</label><br>
                                        <select name="pekerjaan" style="width: 400px;" class="form-control pekerja-pekerjaan" required>
                                            <option value=""></option>
                                            <?php foreach ($data['pekerjaan'] as $pekerjaan) { ?>
                                                <?php if ($pekerjaan['id'] == $data['pekerja']['pekerjaan']) { ?>
                                                    <option value="<?= $pekerjaan['id']; ?>" selected><?= $pekerjaan['pekerjaan']; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $pekerjaan['id']; ?>"><?= $pekerjaan['pekerjaan']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding: 20px;">
                                    <a href="<?= BASEURL; ?>/Pekerja/index" class="btn btn-warning">Kembali</a>
                                    <button type="submit" id="editpekerja-submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>