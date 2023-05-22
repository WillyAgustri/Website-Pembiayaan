<?php
session_start(); // Mulai sesi

// Hapus semua data session
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang Anda inginkan
header("Location: ../pages/login.php");
exit();
?>