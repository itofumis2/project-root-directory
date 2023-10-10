<?php
include 'include/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $text = mysqli_real_escape_string($link, $_POST['text']);

    // Handle the image upload
    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;
        }
    }

    // Call the register_entry function from db.php
    if (register_entry($title, $text, $imagePath)) {
        $message = "<div class='alert alert-success'>登録が完了しました。</div>";
    } else {
        $message = "<div class='alert alert-danger'>エラー: " . mysqli_error($link) . "</div>";
    }
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録完了</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <?php if (isset($message)) echo $message; ?>
    <button onclick="window.location.href='view.php'">ランダムに表示</button>
</div>

</body>
</html>
