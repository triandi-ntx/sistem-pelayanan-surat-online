<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    header("Location:http://localhost/sistem-pelayanan-surat-online/pegawai.php");

    
