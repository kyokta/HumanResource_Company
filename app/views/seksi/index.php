<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <h1>
                            <b>
                                Seksi
                            </b>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <button type="button" class="btn btn-primary">Tambah Seksi</button> -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Seksi
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Seksi</th>
                                <th>Unit</th>
                                <th>Departemen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['seksi'] as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['seksi']; ?></td>
                                    <td><?= $row['unit']; ?></td>
                                    <td><?= $row['departemen']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Seksi</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Seksi/tambahSeksi" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="departemen">Departemen</label>
                            </div>
                            <div class="col-md-8">
                                <select name="departemen" id="seksi-departemen">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Unit</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="unit">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="seksi">Seksi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="seksi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>