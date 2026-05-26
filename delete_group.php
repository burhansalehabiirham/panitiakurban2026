<?php
include 'koneksi.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$id = intval($data['id']);

mysqli_query($conn, "DELETE FROM groups_kurban WHERE id='$id'");

echo json_encode([
    "success" => true,
    "message" => "Data berhasil dihapus"
]);
?>