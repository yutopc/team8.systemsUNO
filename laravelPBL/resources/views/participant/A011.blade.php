<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ ('css/participant.css') }}">
        <title>A011</title>
    </head>
    <header class="header">
        <p>岡山情報ビジネス学院<br>オープンキャンパス参加者情報入力フォーム</p>
    </header>
    <body>
        <input type="button" onclick="history.back()" class="back" value="☜前画面へ戻る">
        <p style="margin-left: 65px;margin-top: 40px;">前回のオープンキャンパスでもらった<br>参加者番号を入力して下さい。</p>
        <textarea id="join_code"></textarea><br>
        <input type="submit" value="確定" id="join_confirm">
        <p>※参加者番号が分からない方は受付までお越し下さい。</p>
    </body>
</html>