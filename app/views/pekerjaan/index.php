<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Pekerjaan</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-pekerjaan">
                        Tambah Pekerjaan
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Pekerjaan</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['pekerjaan'] as $pekerjaan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pekerjaan['pekerjaan']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary pekerjaan-edit-btn" data-bs-toggle="modal" data-bs-target="#edit-pekerjaan" value="<?= $pekerjaan['id_pekerjaan']; ?>">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger pekerjaan-delete-btn" value="<?= $pekerjaan['id_pekerjaan']; ?>">Hapus</button>
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

<!-- Modal Tambah Pekerjaan -->
<div class="modal fade" id="tambah-pekerjaan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Pekerjaan</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Pekerjaan/tambahPekerjaan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Pekerjaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
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

<!-- Modal Edit Pekerjaan -->
<div class="modal fade" id="edit-pekerjaan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Pekerjaan</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Pekerjaan/updatePekerjaan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="id_pekerjaan" id="editpekerjaan-id" hidden>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Pekerjaan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="pekerjaan" id="editpekerjaan-pekerjaan">
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