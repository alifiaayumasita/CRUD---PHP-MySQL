<?php
$conn = mysqli_connect('localhost', 'root', '', 'database_spk');
if($conn){
    echo '';
}else{
    echo 'db unconnected';
}
?>
