<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ ('css/participant.css') }}">
        <title>A012</title>
    </head>
    <header class="header">
        <p>岡山情報ビジネス学院<br>オープンキャンパス参加者情報入力フォーム</p>
    </header>
    <body>
        <a href="/team8.systemsUNO/laravelPBL/public/A010"><p>＜戻る<br></a>
        _____________情報を入力して下さい____________</p>
        <p><strong>1.参加者名</strong>&emsp;<span class="mandatory">必須</span><br>
        <input type="text" class="text" placeholder="例）山田" id="last_name">　
        <input type="text" class="text" placeholder="太郎" id="first_name"><br>
        <strong>ふりがな</strong>&emsp;<span class="mandatory">必須</span><br>
        <input type="text" class="text" placeholder="例）やまだ" id="f_last">　
        <input type="text" class="text" placeholder="たろう" id="f_first"><br></p>
        <p><strong>2.参加学科</strong>&emsp;<span class="mandatory">必須</span><br>
        <form id="department">
            <select>
                <option value="selected">参加する学科を選択してください。</option>
                <option value="医療福祉事務学科">医療福祉事務学科</option>
                <option value="診療情報管理士学科">診療情報管理士学科</option>
                <option value="ホテル・ブライダル学科">ホテル・ブライダル学科</option>
                <option value="経営アシスト学科">経営アシスト学科</option>
                <option value="公務員学科">公務員学科</option>
                <option value="公務員速習学科">公務員速習学科</option>
                <option value="保育学科">保育学科</option>
                <option value="情報スペシャリスト学科">情報スペシャリスト学科</option>
                <option value="情報システム学科">情報システム学科</option>
                <option value="ゲームクリエイター学科">ゲームクリエイター学科</option>
                <option value="ゲームプログラマー学科">ゲームプログラマー学科</option>
                <option value="データマーケター学科">データマーケター学科</option>
                <option value="ネット・動画クリエイター学科">ネット・動画クリエイター学科</option>
                <option value="CGデザイン学科">CGデザイン学科</option>
            </select>
        </form>
        <p><strong>本日はどちらのコースに参加しますか？</strong>&emsp;<span class="mandatory">必須</span><br>
        &thinsp;<input type="radio" name="course" value="フルコース">フルコース<br>
        &thinsp;<input type="radio" name="course" value="ショートコース">ショートコース</p>
        <p><strong>3.学校情報</strong>&emsp;<span class="mandatory">必須</span><br>
        ・学年<br>
        &thinsp;<input type="radio" name="rank" value="高校３年生">高校３年生<br>
        &thinsp;<input type="radio" name="rank" value="高校２年生">高校２年生<br>
        &thinsp;<input type="radio" name="rank" value="高校１年生">高校１年生<br>
        &thinsp;<input type="radio" name="rank" value="既卒">既卒<br>
        ・以下の入力欄に貴校名を入力後、検索ボタンを<br>
        　押して下の一覧から貴校名を選択して下さい。<br>
        <span class="note">※既卒の方も高校名を入力して下さい。</span><br>
        <input type="text" style="width: 20%; padding: 10px; font-size:15px;">　
        <button type="button"  style="width: 5%; padding: 10px; font-size:15px; background-color:rgb(112, 137, 247);">検索</button><br>
        一覧<br>
        <div style="padding: 10px; margin-bottom: 10px; margin-right: 900px;border: 1px solid #333333;">
        <input type="radio" name="school" ><br>
        <input type="radio" name="school"><br>
        <input type="radio" name="school"><br>
        </div>
        高校名&thinsp;<input type="text" style="width: 20%; padding: 10px;"><br>
        ・学科を入力して下さい<br>
        学科　&thinsp;<input type="text" style="width: 20%; padding: 10px;" placeholder="例) 普通科"></p>
        <p><strong>4.今日はどちらから来られましたか？</strong>&emsp;<span class="mandatory">必須</span><br>
        <span class="note">※該当する地域を選択して下さい。</span><br>
        <span class="note">※&nbsp;*&nbsp;が付いている地域は交通費支給対象地域です</span><br>
        <form>
            <select id="area">
                <option value="">地域を選択して下さい</option>
                <option value="岡山市">岡山市</option>
                <option value="倉敷市">倉敷市</option>
                <option value="玉野市">玉野市</option>
                <option value="笠岡市">笠岡市</option>
                <option value="井原市">井原市</option>
                <option value="総社市">総社市</option>
                <option value="高橋市">高橋市</option>
                <option value="備前市">備前市</option>
                <option value="瀬戸内市">瀬戸内市</option>
                <option value="赤磐市">赤磐市</option>
                <option value="浅口市">浅口市</option>
                <option value="和気町">和気町</option>
                <option value="早島町">早島町</option>
                <option value="里庄町">里庄町</option>
                <option value="矢掛町">矢掛町</option>
                <option value="久米南町">久米南町</option>
                <option value="美咲町">美咲町</option>
                <option value="吉備中央町">吉備中央町</option>
                <option value="津山町">*津山町</option>
                <option value="奈義町">*奈義町</option>
                <option value="勝央町">*勝央町</option>
                <option value="新見市">*新見市</option>
                <option value="真庭市">*真庭市</option>
                <option value="新庄村">*新庄村</option>
                <option value="鏡野町">*鏡野町</option>
                <option value="西栗倉町">*西栗倉町</option>
            </select>
        </form>

        <p><u>*県外からお越しの方</u><br>
        <form id="address">
            <select name=”address”>
                <option value="">都道府県を選んでください。</option>
                <optgroup label=北海道>
                    <option value="北海道">北海道</option></optgroup>
                <optgroup label=東北地方>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                </optgroup>
                <optgroup label=関東地方>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                </optgroup>
                <optgroup label=中部地方>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                </optgroup>
                <optgroup label=関西地方>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                </optgroup>
                <optgroup label=中国地方>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                </optgroup>
                <optgroup label=四国地方>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                </optgroup>
                <optgroup label=九州・沖縄地方>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </optgroup>
            </select>
        </form><br></p>
        <p><u>市区町村を入力してください。</u><br>
        <input type="text" class="text" id="city">
        <input type="radio" name="rank" value="市">市/
        <input type="radio" name="rank" value="区">区/
        <input type="radio" name="rank" value="町">町/
        <input type="radio" name="rank" value="村">村</p>
        <p><button type="button" id="vari" >確認画面へ→</button></p>
    </body>
</html>