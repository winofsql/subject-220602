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
