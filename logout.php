<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
  echo "<script>
          alert('Anda perlu login untuk memasuki halaman');
          document.location.href = 'index.php';
        </script>";
  exit;
}

// kosongkan $_SESSION user login
$_SESSION = [];

session_unset();
session_destroy();
header("Location: index.php");
