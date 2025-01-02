<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Tampilkan data di halaman
    echo "<h1>Pesan Terkirim</h1>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Pesan:</strong> $pesan</p>";
} else {
    echo "Metode yang digunakan tidak diizinkan!";
}
?>
