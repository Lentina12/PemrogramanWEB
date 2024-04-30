<!-- Tabel untuk menampilkan data anggota dengan menggunakan DataTables -->
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <!-- Header kolom-kolom pada tabel -->
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>No telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('koneksi.php'); // mengimpor file koneksi.php untuk terhubung dengan database
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();
        // memeriksa apakah ada baris hasil query
        if ($res1->num_rows > 0) {
            // mengambil dan menampilkan data anggota
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? "Laki-laki" : "Perempuan";
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
        <!-- baris data pada tabel -->
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $no_telp; ?></td>
            <td>
                <!-- tombol untuk mengedit data -->
                <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                    <i class="fa fa-edit"></i>Edit
                </button>
                <!-- tombol untuk menghapus data -->
                <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                    <i class="fa fa-trash"></i>Hapus
                </button>
            </td>
        </tr>
        <?php
            }
        } else {
        ?>
        <!-- pesan jika tidak ada data yang ditemukan -->
        <tr>
            <td colspan="7">Tidak ada data ditemukan</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Script untuk mengatur perilaku DataTables -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable(); // Mengaktifkan DataTables pada tabel dengan ID 'example'
    });
</script>