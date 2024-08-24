<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 mx-auto" style="padding-top: 30px;">
            <div class="card" style="border-radius: 10px; width: 100%; border-color: #63738f; background-color: #fcfdfc;">
                <div class="card-header" style="text-align: center; padding: 20px; background-color: #63738f; color: #fcfdfc;">
                    <strong>DETAIL DATA MAHASISWA</strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($mahasiswa['nama']); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($mahasiswa['nrp']); ?></h6>
                    <p class="card-text"><strong>Email:</strong> <?= htmlspecialchars($mahasiswa['email']); ?></p>

                    <p class="card-text"><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($mahasiswa['jenis_kelamin']); ?></p>

                    <!-- Tampilkan ekstrakurikuler jika ada -->
                    <?php if (!empty($mahasiswa['ekstrakurikuler'])): ?>
                        <p class="card-text"><strong>Ekstrakurikuler:</strong> <?= htmlspecialchars($mahasiswa['ekstrakurikuler']); ?></p>
                    <?php endif; ?>

                    <p class="card-text"><strong>Jurusan:</strong> <?= htmlspecialchars($mahasiswa['jurusan']); ?></p>

                    <!-- Tombol Kembali -->
                    <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
