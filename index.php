<html>
    <head>
        <title>Pendaftaran Siswa Baru | SMAN 2 Madiun</title>
    </head>

    <body>
        <h1>Data Siswa</h1>
        <a href="form_save.php">Tambah Data</a><br><br>
        <table border="1" width="100%">
        <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Load file koneksi.php
        include "config.php";
        // Buat query untuk menampilkan semua data siswa
        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute(); // Eksekusi querynya
        while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['telp']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td><a href='form_edit.php?id=".$data['id']."'>Ubah</a></td>";
            echo "<td><a href='process_delete.php?id=".$data['id']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>