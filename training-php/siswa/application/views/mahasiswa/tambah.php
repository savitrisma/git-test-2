<div class="container">

    <div class="row mt-3">
        <div class="col-md-6 mx-auto" style="padding-top: 30px;">

            <div class="card" style="border-radius: 10px; width: 100%; border-color: #63738f; background-color: #fcfdfc;">
                <div class="card-header" style="text-align: center; padding: 20px; background-color: #63738f; color: #fcfdfc;">
                    <strong>FROM TAMBAH DATA MAHASISWA</strong>
                </div>
                <div class="card-body">
                    <form action="" method="post" class="needs-validation">
                        <div class="mb-3">
                            <label for="nama" class="form-label" style="font-weight: bold;">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="nrp" class="form-label" style="font-weight: bold;">NRP</label>
                            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP anda">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="font-weight: bold;">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Kegiatan Ekstrakurikuler</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ekstrakurikuler[]" id="ekskul_basket" value="Basket">
                                <label class="form-check-label" for="ekskul_basket">Basket</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ekstrakurikuler[]" id="ekskul_karate" value="Karate">
                                <label class="form-check-label" for="ekskul_karate">Karate</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ekstrakurikuler[]" id="ekskul_teater" value="Teater">
                                <label class="form-check-label" for="ekskul_teater">Teater</label>
                            </div>
                            <small class="form-text text-danger"><?= form_error('ekstrakurikuler[]'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan" style="font-weight: bold;">Jurusan</label>
                            <select class="form-control" aria-label="Default select example" id="jurusan" name="jurusan">
                                <option selected disabled>- Pilih Jurusan Anda -</option>
                                <?php foreach ($jurusan as $jur) : ?>
                                    <option value="<?= $jur; ?>"><?= $jur; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a padding: 8px 12px; href="<?= base_url() ?>mahasiswa" class="btn btn-secondary mt-3 me-3">Kembali</a>
                            <button type="submit" name="tambah" class="btn btn-primary mt-3" style="padding: 8px 12px;">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>