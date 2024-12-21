<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>仮会員登録フォーム</title>
<body>
    <form action="../tmp_register.php" method="post">
    <p>仮会員登録</p>
    <input type="hidden" name="_csrf_token" value="<?= $_SESSION['_csrf_token']; ?>">
        <label>
            メールアドレスを入力してください
            <input toype="email" name="email" value="">
        </label>
        <button type="submit">登録</button>
</body>
</html>