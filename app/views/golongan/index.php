<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>Golongan</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-golongan">
                        Tambah Jabatan
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align: center;"><b>No</b></th>
                                <th style="text-align: center;"><b>Golongan</b></th>
                                <th style="text-align: center;"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['golongan'] as $golongan) : ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td style="text-align: center;"><?= $golongan['golongan']; ?></td>
                                    <td style="text-align: center;">
                                        <button type="button" class="btn btn-primary golongan-edit-btn" data-bs-toggle="modal" data-bs-target="#edit-golongan" value="<?= $golongan['id_golongan']; ?>">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger golongan-delete-btn" value="<?= $golongan['id_golongan']; ?>">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br><br>
                    <a href="<?= BASEURL; ?>" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah Golongan -->
<div class="modal fade" id="tambah-golongan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Golongan</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Golongan/tambahGolongan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Golongan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="golongan" placeholder="Golongan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="golongan-tambah-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Golongan -->
<div class="modal fade" id="edit-golongan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Golongan</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Golongan/updateGolongan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="id_golongan" id="editgolongan-id" hidden>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Golongan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="golongan" id="editgolongan-golongan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>