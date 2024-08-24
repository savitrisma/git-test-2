const flashData = $('.flash-data').data('flashdata');

if ( flashData ) {
    Swal.fire({
        title: 'Data Mahasiswa',
        text: 'Berhasil ' + flashData,
        icon: 'success',
        confirmButtonText: 'Close'
      })
}

// tombol-hapus
$('.tombol-hapus').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data Mahasiswa akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus Data!'
      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })

});