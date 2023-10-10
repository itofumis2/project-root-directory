<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>日記登録</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="text" class="form-label">本文</label>
            <textarea id="text" name="text" class="form-control" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">画像</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn">登録</button>
        </div>
    </form>
</div>

</body>
</html>
