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
    <h2> Tambah Kriteria </h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Keterangan  :</td>
                <td><input type="text" name="keterangan" placeholder="Keterangan" required/></td>
            </tr>
            <tr>
                <td>Kode Kriteria   :</td>
                <td><input type="text" name="kode_kriteria" placeholder="Kode Kriteria" required/></td>
            </tr>
            <tr>
                <td>Bobot   :</td>
                <td><input type="number" id="bobot" name="bobot" placeholder="number only" step="any" required/></td>
                <td><input type="submit" name="save_kriteria" value="save" step="any"/></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['save_kriteria'])){
            $insert = mysqli_query($conn, "INSERT INTO kriteria VALUES
            ('',
            '" . $_POST['keterangan'] . "',
            '" . $_POST['kode_kriteria'] . "',
            '" . $_POST['bobot'] . "')");
        if($insert){
            echo '';
        }else{
            echo 'gagal disimpan' . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>