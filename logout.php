<?php
session_start();
session_unset();      // kosongkan semua data session
session_destroy();    // hancurkan session yang tersimpan di server

header("Location: login.php");  // Arahkan kembali pengguna ke form login
exit;
?>