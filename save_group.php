<?php
include 'koneksi.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$id = isset($data['id']) ? intval($data['id']) : 0;
$name = mysqli_real_escape_string($conn, $data['name']);
$username = mysqli_real_escape_string($conn, $data['username']);
$members = $data['members'];

if ($id > 0) {

    mysqli_query($conn, "UPDATE groups_kurban SET
        nama_kelompok='$name',
        username='$username'
        WHERE id='$id'");

    mysqli_query($conn, "DELETE FROM members_kurban WHERE group_id='$id'");

    foreach ($members as $i => $member) {
        $member = mysqli_real_escape_string($conn, $member);

        mysqli_query($conn, "INSERT INTO members_kurban(
            group_id,
            nomor_anggota,
            nama_anggota
        ) VALUES(
            '$id',
            '".($i+1)."',
            '$member'
        )");
    }

    echo json_encode([
        "success" => true,
        "message" => "Data berhasil diperbarui"
    ]);

} else {

    mysqli_query($conn, "INSERT INTO groups_kurban(
        nama_kelompok,
        username
    ) VALUES(
        '$name',
        '$username'
    )");

    $group_id = mysqli_insert_id($conn);

    foreach ($members as $i => $member) {
        $member = mysqli_real_escape_string($conn, $member);

        mysqli_query($conn, "INSERT INTO members_kurban(
            group_id,
            nomor_anggota,
            nama_anggota
        ) VALUES(
            '$group_id',
            '".($i+1)."',
            '$member'
        )");
    }

    echo json_encode([
        "success" => true,
        "message" => "Kelompok berhasil ditambahkan"
    ]);
}
?>