# subject-220602

- ### 正規表現
  - ## **"/^[　\s]+/u"** : **"/[　\s]+$/u"**
    - / は、この内側が正規表現文字列である事を定義したもの ( 仕様では他の文字も使えるはずだが、/ が一般的 )
    - / の右にある 小文字の u は、[パターン修飾子](https://www.php.net/manual/ja/reference.pcre.pattern.modifiers.php)と呼ばれ、正規日右舷の動作の **オプション** を設定する
    - \s は、スペース文字列を表す
    - [複数の文字] 鍵かっこの中の文字は、検索最小の文字を意味する
    - ^ は、先頭を意味する
    - $ は、一番最後を意味する
    - \+ は、直前の文字集合が 一つ以上の文字列になっているものを取得する
    - \* は、直前の文字集合が 0以上の文字列になっているものを取得する
  - ## **"/^[　\s]+|[　\s]+$/u"**
    - | は、両側の正規表現の or を意味する
  - ## . は任意の1文字
  - ## ? は直前の検索文字列にヒットする一番短いパターン
  - ## () で正規表現内の順番を指定して、後に配列等の変数で( $1 や $2 と言う表現もある ) 結果を部分取得できる

| 記号 | 意味 |
| ------------- | ------------- |
| . | 任意の１文字 |
| + | 直前1以上 |
| * | 直前0以上 |
| +? | 直前最短 |
| \| | or |
| [abc] | 指定した文字集合 |
| [a-c] | 指定して範囲集合 |
| [^a-c] | 集合の否定 |
| \d	| すべての数字 |
| \D	| すべての数字以外の文字 |
| \s	| 垂直タブ以外のすべての空白文字 |
| \S	| すべての非空白文字 |

- ### CSS 
  - IFRAME を使う為の calc ( ここでは、#head と #extend という縦に並ぶブロックをブラウザ内で自動リサイズする為に使用 )
  - CSS 内で使用する変数 [var(変数名) : カスタムプロパティ](https://www.webcreatorbox.com/tech/css-variables)
```css
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
```
