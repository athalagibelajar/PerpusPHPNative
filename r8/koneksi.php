<?php
$conn = mysqli_connect('localhost', 'root', '', 'r8');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else
    // echo "koneksi sukses"
        ?>