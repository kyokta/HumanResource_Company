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
                        <form action="<?= BASEURL; ?>/pekerja/tambahpekerja" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <span><b>Data Pribadi:</b></span>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" style="width: 400px" name="nama_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" style="width: 400px" name="tmp_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" style="width: 400px" name="tgl_lahir" id="tambahpekerja-tgl_lahir" placeholder="Tanggal Lahir" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="npwp">NPWP</label>
                                        <input type="text" class="form-control" style="width: 400px" name="npwp" placeholder="NPWP" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" style="width: 400px; height: 100px;" placeholder="Alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span><b>Data Perusahaan:</b></span>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="seksi">Seksi</label><br>
                                        <select name="seksi" id="tambahpekerja-seksi" style="width: 400px;" class="form-control" required></select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="jabatan">Jabatan</label><br>
                                        <select name="jabatan" id="tambahpekerja-jabatan" style="width: 400px;" class="form-control" required></select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="golongan">Golongan</label><br>
                                        <select name="golongan" id="tambahpekerja-golongan" style="width: 400px;" class="form-control" required></select>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0px;">
                                        <label for="pekerjaan">Pekerjaan</label><br>
                                        <select name="pekerjaan" id="tambahpekerja-pekerjaan" style="width: 400px;" class="form-control" required></select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding: 20px;">
                                    <a href="<?= BASEURL; ?>/Pekerja/index" class="btn btn-warning">Kembali</a>
                                    <button type="submit" id="tambahpekerja-submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>