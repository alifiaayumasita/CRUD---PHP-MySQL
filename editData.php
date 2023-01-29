<?php
    include "koneksi.php";
    $data_edit = mysqli_query($conn, "SELECT * FROM kriteria WHERE id_kriteria = '" . $_GET['id_kriteria'] . "'");
    $result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Back</a>
    <h2> Edit Kriteria </h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Keterangan  :</td>
                <td><input type="text" name="keterangan" value="<?php echo $result['keterangan'] ?>" required/></td>
            </tr>
            <tr>
                <td>Kode Kriteria   :</td>
                <td><input type="text" name="kode_kriteria" value="<?php echo $result['kode_kriteria'] ?>" required/></td>
            </tr>
            <tr>
                <td>Bobot   :</td>
                <td><input type="number" id="bobot" name="bobot" step="any" value="<?php echo $result['bobot'] ?>" required/></td>
                <td><input type="submit" name="edit_kriteria" value="save" step="any"/></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['edit_kriteria'])){
        $update = mysqli_query($conn, "UPDATE kriteria SET keterangan = '" . $_POST['keterangan'] . "',
                kode_kriteria = '" . $_POST['kode_kriteria'] . "',
                bobot = '" . $_POST['bobot'] . "' WHERE id_kriteria = '".$_GET['id_kriteria']."'");
        if($update){
            echo "berhasil edit";
        }else{
            echo "gagal edit";
        }
    }
    ?>
</body>
</html>