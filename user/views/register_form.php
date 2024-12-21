<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>本登録フォーム</title>
<body>
    <form action="register.php" method="POST">
        <p>会員登録</p>
        <input type="hidden" name="_csrf_token" value="<?=$_SESSION['_csrf_token']; ?>">
        <input type="hidden" name="register_token" value="<?= $registerToken; ?>">
        <label>名前
            <input type="name" name="name">
        </label>
        <label>パスワード
            <input type="password" name="password">
        </label>
        <br>
        <label>パスワード確認用
            <input type="password" name="password_confirmation">
        </label>
        <br>
        <button type="submit">登録</button>
    </form>
</body>
</html>