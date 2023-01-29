<html>
    <head>
        <title>SPK-MAUT</title>
    </head>
    <body>
        <h1>SPK - Multi Attribute Utility Theory</h1>
        <h2>Kriteria</h2>
        <a href="tambahData.php">Tambah Data</a>
        </br></br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Keterangan</th>
                <th>Kode Kriteria</th>
                <th>Bobot</th>
            </tr>
            <?php
            include "koneksi.php";
            $select = mysqli_query($conn, "SELECT * FROM kriteria");
            if(mysqli_num_rows($select) > 0){
            while($hasil = mysqli_fetch_array($select)){
            ?>
            <tr>
                <td><?php echo $hasil['id_kriteria']?></td>
                <td><?php echo $hasil['keterangan']?></td>
                <td><?php echo $hasil['kode_kriteria']?></td>
                <td><?php echo $hasil['bobot']?></td>
                <td>
                    <a href="editData.php?id_kriteria=<?php echo $hasil['id_kriteria'] ?>">edit</a>
                    <a href="deleteData.php?id_kriteria=<?php echo $hasil['id_kriteria'] ?>">delete</a>
                </td>
            </tr>
            <?php }}else{ ?>
                <tr>
                    <td colspan="4" align="center">Data Kosong</td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
