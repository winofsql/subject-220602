<!DOCTYPE html>
<html lang="ja">

<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>掲示板
    </title>
<style>
@charset "utf-8";

:root {
  --s-height: 250px;
}

/* IFRAME で表示する */
html,body {
    height: 100%;
}

body {
    margin: 0;
}
#head {
    width: 100%;
    height: var(--s-height);
    background-color: #fff;
}
#extend {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: calc( 100% - 3px );
    height: calc( 100% - var(--s-height) - 2px );
    border: solid 2px #c0c0c0;
}
</style>
</head>

<body>
    <div id="head">
        <h3 class="alert alert-primary">掲示板
        </h3>
        <div id="content" class="m-4">
            <form action="" method="POST" target="myframe">
                <p>
                    <span style='display:inline-block;width:100px;'>メッセージ
                    </span>
                    <input type="text" name="message" value="<?= $_POST["message"] ?>">
                </p>
                <p>
                    <span style='display:inline-block;width:100px;'>投稿者
                    </span>
                    <input type="text" name="user" value="<?= $_POST["user"] ?>">
                </p>
                <input type="submit" name="send" value="投稿">
            </form>
        </div>
    </div>

    <iframe id="extend" src="view2.php" name="myframe">
    </iframe>

</body>

</html>