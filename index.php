<?php
// index.php untuk testing deploy otomatis
$server = $_SERVER['SERVER_NAME'] ?? 'localhost';
$time = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web2 Deployed!</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0f1412;
      color: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .card {
      text-align: center;
      background: #1c2622;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 0 24px rgba(0,0,0,.4);
    }
    h1 {
      color: #00ffaa;
    }
    small {
      color: #aaa;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>🚀 Deploy Berhasil!</h1>
    <p>Aplikasi kamu sudah jalan di <strong><?= $server ?></strong></p>
    <small>Diperbarui pada <?= $time ?></small>
  </div>
</body>
</html>
