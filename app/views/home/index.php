<style>
    .carousel {
        background-color: lightgrey;
    }

    .card {
        cursor: pointer;
        background-color: lightgrey;
    }

    .card:hover {
        background-color: grey;
    }
</style>
<!-- Header-->
<header class="py-5">
    <div class="p-4 p-lg-5 rounded-3 text-center carousel">
        <div class="m-4 m-lg-5">
            <h1 class="display-5 fw-bold">Hello admin!</h1>
            <p class="fs-4">Human Resource TRPL Corp.</p>
        </div>
    </div>
</header>
<!-- Page Content-->
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Pekerja/index'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/person-circle.svg"></div>
                    <h2 class="fs-4 fw-bold">Karyawan</h2>
                    <p class="mb-0">Data Karyawan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Seksi/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/person-gear.svg"></div>
                    <h2 class="fs-4 fw-bold">Seksi</h2>
                    <p class="mb-0">Data seksi, unit, dan departemen</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Jabatan/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/building-fill.svg" alt=""></div>
                    <h2 class="fs-4 fw-bold">Jabatan</h2>
                    <p class="mb-0">Data jabatan karyawan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Golongan/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/briefcase-fill.svg" alt=""></div>
                    <h2 class="fs-4 fw-bold">Golongan</h2>
                    <p class="mb-0">Data golongan karyawan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Pekerjaan/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/cup-hot-fill.svg" alt=""></div>
                    <h2 class="fs-4 fw-bold">Pekerjaan</h2>
                    <p class="mb-0">Data pekerjaan karyawan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Gaji/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/currency-exchange.svg" alt=""></div>
                    <h2 class="fs-4 fw-bold">Gaji</h2>
                    <p class="mb-0">Data gaji karyawan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-12 mb-5">
            <div class="card border-0 h-100" onclick="location.href='<?= BASEURL; ?>/Cuti/index/'">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src="<?= BASEURL; ?>/assetss/img/calendar-x.svg" alt=""></div>
                    <h2 class="fs-4 fw-bold">Cuti</h2>
                    <p class="mb-0">Data cuti karyawan</p>
                </div>
            </div>
        </div>
    </div>
</section>