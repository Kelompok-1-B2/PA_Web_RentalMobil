<?php

$conn = mysqli_connect("localhost","root","","web");
if( !$conn ){
    die("Gagal Tehubung". mysqli_connect_error());
}

?>