<?php
require_once 'include/db.php';
$entry = get_random_entry();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ランダムな日記エントリ</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php if ($entry): ?>
        <h1><?php echo htmlspecialchars($entry['title']); ?></h1>
        <div class="entry">
            <?php echo nl2br(htmlspecialchars($entry['text'])); ?>
        </div>
        <img src="<?php echo htmlspecialchars($entry['image_path']); ?>" alt="日記の画像">
    <?php else: ?>
        <p>エントリがありません。</p>
    <?php endif; ?>
</body>
</html>
