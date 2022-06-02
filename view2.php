<?php
require_once("setting.php");
header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

// *************************************
// ファイルの読込み( A )
// テキストファイルを読み込んで行を要素とした配列にする
// *************************************
$posts = @file($dataFile, FILE_IGNORE_NEW_LINES);

// 配列を逆順に変換する( 最後に追加した行が先頭になる )
if ( $posts !== FALSE ) {
    $posts = array_reverse($posts);
}
else {
    // ファイルが無い場合空の配列
    $posts = array();
}

$kensu = count($posts);

// *************************************
// 画面用データの作成( B )
// *************************************
if ( $kensu != 0 ) {
    foreach ($posts as $post) {
        $lines = explode( "\t", $post );

        $message = hsc( $lines[0] );
        $user = hsc( $lines[1] );
        $time_stamp = $lines[2];

        $line_data .= "<li>{$message} {$user} - {$time_stamp}</li>";
    }
}
else {
    $line_data .= '<li>投稿データはありません</li>';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

<style>
#databody {
    margin: 20px;
}
</style>
</head>

<body>
<h4 class="alert alert-primary">投稿一覧 (<?= $GLOBALS["kensu"] ?>件)</h4>
<div id="databody">

    <ul>
        <?= $GLOBALS["line_data"] ?>
    </ul>

</div>
</body>
</html>
