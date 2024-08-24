 <div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <input type="hidden" name="" value="" class="">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h2 style="color: #fcfdfc; text-align: left; margin-top: 20px; margin-bottom: 40px;">Data Mahasiswa</h2>
            <hr style="color: #fcfdfc; width: 80rem;">
            <form action="" method="post">
                <div class="input-group">
                    <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary" style="padding: 8px 12px; margin-top: 30px;">Tambah Data Mahasiswa</a>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
                <table class="table table-striped table-hover" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; margin-top: 20px; margin-bottom: 5rem;">
                    <tr style="width: 10px; font-size: 20px;">
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NRP</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs):
                        ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['nrp']; ?></td>
                            <td><?= $mhs['email']; ?></td>
                            <td><?= $mhs['jurusan']; ?></td>
                            <td>
                                <a style="padding: 8px 12px; margin: 5px;" href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge btn btn-primary float-right">Detail</a>
                                <a style="padding: 8px 12px; margin: 5px;" href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge btn btn-success float-right edit.btn">Ubah</a>
                                <a style="padding: 8px 12px; margin: 5px;" href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge btn btn-danger float-right tombol-hapus">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
    </div>
</div>