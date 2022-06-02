# subject-220602

- ### 正規表現
  - ## **"/^[　\s]+/u"**
    - / は、この内側が正規表現文字列である事を定義したもの ( 仕様では他の文字も使えるはずだが、/ が一般的 )
    - / の右にある 小文字の u は、[パターン修飾子](https://www.php.net/manual/ja/reference.pcre.pattern.modifiers.php)と呼ばれ、正規日右舷の動作の **オプション** を設定する
