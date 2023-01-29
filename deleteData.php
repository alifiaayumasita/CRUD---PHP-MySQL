<?php
    include "koneksi.php";

    if(isset($_GET['id_kriteria'])){
    $delete = mysqli_query($conn, "DELETE FROM kriteria WHERE id_kriteria = '" .$_GET['id_kriteria']."' ");
        header('location.index.php');
    }
?>