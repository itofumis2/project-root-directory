<?php
require_once 'config.php';

function register_entry($title, $text, $imagePath) {
    global $link;
    $query = "INSERT INTO entries (title, text, image_path) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "sss", $title, $text, $imagePath);
    return mysqli_stmt_execute($stmt);
}

function get_random_entry() {
    global $link;
    $query = "SELECT title, text, image_path FROM entries ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($link, $query);
    if ($result) {
        return mysqli_fetch_assoc($result);
    }
    return false;
}
?>
