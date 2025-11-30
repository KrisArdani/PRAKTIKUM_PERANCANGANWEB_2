

<?php

// SAYA SENGAJA TIDAK MENGHAPUS KOMENTAR AGAR MEMBANTU SAYA DALAM BELAJAR

$host = 'localhost'; // Host
$user = 'root'; // Username MySQL
$password = ''; // Password MySQL
$database = 'pendaftaran'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Tambahan, karena ada di form HTML sebelumnya

// Query untuk menyimpan data ke tabel users
// PERINGATAN: Kode ini rentan terhadap SQL Injection.
// Sebaiknya gunakan Prepared Statements.
$sql = "INSERT INTO mahasiswa (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!<br>";
    echo "<a href='praktikum4.php'>Tambah User Baru</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

?>