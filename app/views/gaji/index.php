<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Gaji</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-gaji">
                        Tambah Gaji
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Pekerja</td>
                                <td>Jumlah Gaji (kali)</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['gaji'] as $gaji) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $gaji['nama']; ?></td>
                                    <td><?= $gaji['jumlah']; ?></td>
                                    <td>
                                        <a href="<?= BASEURL; ?>/Gaji/detailGaji/<?= $gaji['id_pegawai'];?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah Gaji -->
<div class="modal fade" id="tambah-gaji">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Gaji</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Gaji/tambahGaji" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Nama Pekerja</label>
                            </div>
                            <div class="col-md-8">
                                <select name="pekerja" class="form-control">
                                    <option value=""></option>
                                    <?php foreach ($data['pekerja'] as $pekerja) : ?>
                                        <option value="<?= $pekerja['id_pegawai']; ?>"><?= $pekerja['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Jumlah</label>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input type="number" class="form-control" name="gaji" placeholder="Jumlah">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Bulan</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bulan" class="form-control" placeholder="Bulan">
                                    <option value=""></option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Tahun</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="tahun" placeholder="Tahun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="pekerjaan-tambah-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>