<?php
include 'connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) { // after delete number number serial
    $id = $_GET['id'];

    if ($conn->query("DELETE FROM test WHERE id = $id") === TRUE) {
        echo "<script>alert('Record deleted successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to delete record!'); window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Invalid ID!'); window.location.href = 'index.php';</script>";
}

$conn->close();
?>
