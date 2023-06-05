<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <h1><b>Jabatan</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- <button type=""></button> -->
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data['jabatan'] as $jabatan) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $jabatan['jabatan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>