<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ ('css/gamen.css') }}">
        <title>A013</title>
    </head>
    <header class="header">
        <p>岡山情報ビジネス学院<br>オープンキャンパス参加者情報確認画面</p>
    </header>
    <body>
        <p><span id="messe">受付で担当の方と確認してください！</span></p>
        <p><strong>1.参加者名</strong><br>
            <input type="text" class="text">　
            <input type="text" class="text"><br>
            <strong>ふりがな</strong><br>
            <input type="text" class="text">　
            <input type="text" class="text"><br></p>
        <p><strong>2.参加学科</strong><br>

        <p><strong>3.学校情報</strong><br>
           
        <p><strong>4.お住まいの地域</strong><br>

            <!--交通費支給対象の場合-->
            <div　id="target">
                <p><span style="background-color: #e4e004;">
                <font color="blue">交通費支給対象地域です。<br>案内をして下さい。&emsp;&emsp;&emsp;</font>
                </span></p>
            </div>
            <p><button type="button" id="miss" >訂正する</button><input type="confirm" id="last_confirm" value="確定"></p>
    </body>
</html>