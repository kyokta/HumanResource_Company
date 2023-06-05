<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <h1>
                            <b>
                                TAMBAH PEKERJA
                            </b>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= BASEURL; ?>/pekerja/tambahpekerja" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="noind">NO INDUK</label>
                                    <input type="text" class="form-control" style="width: 400px" name="noind" placeholder="No Induk">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" style="width: 400px" name="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" style="width: 400px" name="tmp_lahir" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" style="width: 400px" name="tgl_lahir" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" style="width: 400px" name="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="npwp">NPWP</label>
                                    <input type="text" class="form-control" style="width: 400px" name="npwp" placeholder="NPWP">
                                </div>
                                <div class="form-group">
                                    <label for="seksi">Seksi</label>
                                    <input type="text" class="form-control" style="width: 400px" name="seksi" placeholder="Seksi">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" style="width: 400px" name="jabatan" placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                    <label for="golongan">Golongan</label>
                                    <input type="text" class="form-control" style="width: 400px" name="golongan" placeholder="Golongan">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" style="width: 400px" name="pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>