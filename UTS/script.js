$(document).ready(function(){
    $('#registerForm').submit(function(event){
        event.preventDefault(); // Mencegah perilaku default formulir

        // Mengambil nilai dari input formulir
        var email = $('#email').val();
        var nama_lengkap = $('#nama_lengkap').val();
        var asal_sekolah = $('#asal_sekolah').val();
        var kelas = $('#kelas').val();
        var alamat = $('#alamat').val();
        var jenjang = $('#jenjang').val();
        var kategori = $('#kategori').val();

        // Melakukan proses submit form dengan AJAX
        $.ajax({
            type: 'POST',
            url: 'process_registration.php',
            data: JSON.stringify({
                email: email,
                nama_lengkap: nama_lengkap,
                asal_sekolah: asal_sekolah,
                kelas: kelas,
                alamat: alamat,
                jenjang: jenjang,
                kategori: kategori
            }),
            contentType: 'application/json', // Menentukan tipe konten sebagai JSON
            success: function(response){
                alert(response); // Tampilkan pesan dari server
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log pesan error jika terjadi
            }
        });
    });
}); 