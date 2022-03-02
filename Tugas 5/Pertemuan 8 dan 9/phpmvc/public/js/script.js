$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id').val('');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah', 
            data: { id: id },
            method: 'post',
            datatype: 'json',
            success: function (data) {
                var datas = JSON.parse(data);
                $('#nama').val(datas.nama);
                $('#nim').val(datas.nim);
                $('#email').val(datas.email);
                $('#jurusan').val(datas.jurusan);
                $('#id').val(datas.id);
            }
        });
    });
});