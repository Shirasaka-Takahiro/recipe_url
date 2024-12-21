<?php

//セッション開始
session_start();

//formに埋め込む csrf token を生成
if (empty($_SESSION['_csrf_token'])) {
    $_SESSION['_csrf_token'] = bin2hex(random_bytes(32));
}

//仮登録フォームに埋め込み
require './views/tmp_register_form.php';

?>