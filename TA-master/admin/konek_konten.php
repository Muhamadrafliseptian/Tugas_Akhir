<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "user_level");
if (isset($_POST['registerbtn'])) {
    $judul_konten = $_POST['judul_konten'];
    $isi_konten = $_POST['isi_konten'];

    if ($judul_konten && $isi_konten) {
        $query = "INSERT INTO konten (judul_konten,isi_konten) VALUES ('$judul_konten','$isi_konten')";
        $query_run  = mysqli_query($connection, $query);

        if ($query_run) {
            $_SESSION['success'] = "Berhasil Menambahkan Konten";
            header('location: konten.php');
        } else {
            $_SESSION['status'] = "Berhasil Menambahkan Konten";
            header('location: konten.php');
        }
    }
}
//edit berita
if (isset($_POST['update_konten'])) {
    $id = $_POST['id_konten'];
    $judul_konten = $_POST['judul_konten'];
    $isi_konten = $_POST['isi_konten'];

    $query = "UPDATE konten SET judul_konten='$judul_konten', isi_konten='$isi_konten' WHERE id_konten='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header('location: konten.php');
    } else {
        header('location: konten.php');
    }
}
//delete berita
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM konten WHERE id_konten ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Konten berhasil dihapus";
        header('location: konten.php');
    } else {
        $_SESSION['status'] = "Konten gagal dihapus";
        header('location: konten.php');
    }
}
