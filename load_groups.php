<?php
include 'koneksi.php';

header('Content-Type: application/json');

$result = mysqli_query($conn, "SELECT * FROM groups_kurban ORDER BY id ASC");

$groups = [];

while ($row = mysqli_fetch_assoc($result)) {

    $group_id = $row['id'];

    $members_query = mysqli_query($conn, "SELECT * FROM members_kurban
        WHERE group_id='$group_id'
        ORDER BY nomor_anggota ASC");

    $members = [];

    while ($m = mysqli_fetch_assoc($members_query)) {
        $members[] = $m['nama_anggota'];
    }

    $groups[] = [
        "id" => $row['id'],
        "name" => $row['nama_kelompok'],
        "username" => $row['username'],
        "members" => $members
    ];
}

echo json_encode($groups);
?>