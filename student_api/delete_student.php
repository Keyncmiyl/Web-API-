<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (!isset($data->id)) {
    echo json_encode(["message" => "ID is required"]);
    exit;
}

$id = $data->id;
$sql = "DELETE FROM students WHERE id='$id'";

if ($conn->query($sql)) {
    echo json_encode(["message" => "Student deleted successfully"]);
} else {
    echo json_encode(["error" => "Delete failed"]);
}
?>