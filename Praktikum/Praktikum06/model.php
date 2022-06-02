<?php
    require('koneksi.php');

    function tampilBuku(){
        $stmt = koneksi() -> prepare("SELECT * FROM buku");
        $stmt -> execute();
        $hasil = $stmt -> fetchAll();

        if (!empty($hasil)) {
            foreach ($hasil as $buku) {
                echo "<tr>";
                echo "<td>". $buku['id_buku']."</td>";
                echo "<td>". $buku['judul_buku']."</td>";
                echo "<td>". $buku['penulis']."</td>";
                echo "<td>". $buku['penerbit']."</td>";
                echo "<td>". $buku['tahun_terbit']."</td>";
                echo "<td>". "<a href = 'formBuku.php?id_buku=". $buku['id_buku']. "'>Edit </a>";
                echo "<a href='buku.php?id_buku=" . $buku['id_buku'] . "' onclick=\"return confirm('Hapus data buku ini?')\"> Hapus</a></td>";
                echo "</tr>";
            }
        }
    }

    function tambahBuku($id, $judul, $penulis, $penerbit, $tahun){
        $sql = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES (:id, :judul, :penulis, :penerbit, :tahun)";
        $stmt = koneksi() -> prepare($sql);
        $hasil = $stmt -> execute(array(':id' => $id, ':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun' => $tahun));

        if (!empty($hasil)) {
            header('location: buku.php');
        }
    }

    function editBuku(){
        $stmt = koneksi() -> prepare("SELECT * FROM buku WHERE id_buku = ".$_GET['id_buku']);
        $stmt -> execute();
        $GLOBALS['hasil'] = $stmt -> fetchAll();
    }

    function updateBuku($id, $judul, $penulis, $penerbit, $tahun){
        $stmt = koneksi() -> prepare(
            "UPDATE buku SET judul_buku = '". $judul. "', penulis = '". $penulis. "', penerbit = '". $penerbit. "', tahun_terbit = '". $tahun. "' WHERE id_buku =". $id
        );
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: buku.php');
        }
    }

    function hapusBuku($id){
        $stmt = koneksi() -> prepare("DELETE FROM buku WHERE id_buku =". $id);
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: buku.php');
        }
    }

    function tampilMember(){
        $stmt = koneksi() -> prepare("SELECT * FROM member");
        $stmt -> execute();
        $hasil = $stmt -> fetchAll();

        if (!empty($hasil)) {
            foreach ($hasil as $member) {
                echo "<tr>";
                echo "<td>". $member['id_member']."</td>";
                echo "<td>". $member['nama_member']."</td>";
                echo "<td>". $member['no_member']."</td>";
                echo "<td>". $member['alamat']."</td>";
                echo "<td>". $member['tgl_mendaftar']."</td>";
                echo "<td>". $member['tgl_terakhir_bayar']."</td>";
                echo "<td>". "<a href = 'formMember.php?id_member=". $member['id_member']. "'>Edit </a>";
                echo "<a href='member.php?id_member=" . $member['id_member'] . "' onclick=\"return confirm('Hapus data member ini?')\"> Hapus</a></td>";
                echo "</tr>";
            }
        }
    }

    function tambahMember($id, $nama, $nomor, $alamat, $daftar, $bayar){
        $sql = "INSERT INTO member (id_member, nama_member, no_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (:id, :nama, :nomor, :alamat, :daftar, :bayar)";
        $stmt = koneksi() -> prepare($sql);
        $hasil = $stmt -> execute(array(':id' => $id, ':nama' => $nama, ':nomor' => $nomor, ':alamat' => $alamat, ':daftar' => $daftar, ':bayar' => $bayar));

        if (!empty($hasil)) {
            header('location: member.php');
        }
    }

    function editMember(){
        $stmt = koneksi() -> prepare("SELECT * FROM member WHERE id_member = ".$_GET['id_member']);
        $stmt -> execute();
        $GLOBALS['hasil'] = $stmt -> fetchAll();
    }

    function updateMember($id, $nama, $nomor, $alamat, $daftar, $bayar){
        $stmt = koneksi() -> prepare(
            "UPDATE member SET nama_member = '". $nama. "', no_member = '". $nomor. "', alamat = '". $alamat. "', tgl_mendaftar = '". $daftar. "', tgl_terakhir_bayar = '". $bayar. "' WHERE id_member =". $id
        );
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: member.php');
        }
    }

    function hapusMember($id){
        $stmt = koneksi() -> prepare("DELETE FROM member WHERE id_member =". $id);
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: member.php');
        }
    }

    function tampilPeminjaman(){
        $stmt = koneksi() -> prepare("SELECT * FROM peminjaman");
        $stmt -> execute();
        $hasil = $stmt -> fetchAll();

        if (!empty($hasil)) {
            foreach ($hasil as $peminjaman) {
                echo "<tr>";
                echo "<td>". $peminjaman['id_peminjaman']."</td>";
                echo "<td>". $peminjaman['tgl_pinjam']."</td>";
                echo "<td>". $peminjaman['tgl_kembali']."</td>";
                echo "<td>". "<a href = 'formPeminjaman.php?id_peminjaman=". $peminjaman['id_peminjaman']. "'>Edit  </a>";
                echo "<a href='peminjaman.php?id_peminjaman=" . $peminjaman['id_peminjaman'] . "' onclick=\"return confirm('Hapus data peminjaman ini?')\">  Hapus</a></td>";
                echo "</tr>";
            }
        }
    }

    function tambahPeminjaman($id, $pinjam, $kembali){
        $sql = "INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali) VALUES (:id, :pinjam, :kembali)";
        $stmt = koneksi() -> prepare($sql);
        $hasil = $stmt -> execute(array(':id' => $id, ':pinjam' => $pinjam, ':kembali' => $kembali));

        if (!empty($hasil)) {
            header('location: peminjaman.php');
        }
    }

    function editPeminjaman(){
        $stmt = koneksi() -> prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ".$_GET['id_peminjaman']);
        $stmt -> execute();
        $GLOBALS['hasil'] = $stmt -> fetchAll();
    }

    function updatePeminjaman($id, $pinjam, $kembali){
        $stmt = koneksi() -> prepare(
            "UPDATE peminjaman SET tgl_pinjam = '". $pinjam. "', tgl_kembali = '". $kembali. "' WHERE id_peminjaman =". $id
        );
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: peminjaman.php');
        }
    }

    function hapusPeminjaman($id){
        $stmt = koneksi() -> prepare("DELETE FROM peminjaman WHERE id_peminjaman =". $id);
        $hasil = $stmt -> execute();

        if (!empty($hasil)) {
            header('location: peminjaman.php');
        }
    }
?>