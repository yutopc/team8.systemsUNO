<!DOCTYPE html>
<html>
    <head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="./css/teacher.css">
    </head>
    <body>

      <header>
        <div class="cp_navi">
          <ul>
              <li><a id="csv" herf='CSV'>CSV出力</a></li>
            <li>
              <a href="#">表示 <span class="caret"></span></a>
              <div>
                <ul>
                  <li><input type="checkbox" name="check_1" value="1" checked="checked">氏名</li>
                  <li><input type="checkbox" name="check_2" value="1" checked="checked">高校</li>
                  <li><input type="checkbox" name="check_3" value="1" checked="checked">参加日</li>
                </ul>
              </div>
            </li>
            <li><a id="approval">承認</a></li>
            <li><a href="A003">トップに戻る</a></li>

          </ul>
          </div>

          <div id="search">
            <input type="checkbox" name=''>名前<input type="text" style="width:110px;">
            <input type="checkbox" name=''>参加者NO<input type="text" style="width:50px;">
            <input type="checkbox" name=''>参加日<input type="date" style="width:125px;">~<input type="date" style="width:125px;">
            <input type="checkbox" name=''>参加学科<select><option></option><option>情報スペシャリスト学科</option><option>ネット・動画クリエイター学科</option></select>
            <input type="checkbox" name=''>参加回数<select><option></option><option>1回</option><option>2回</option><option>3回</option><option>3回以上</option></select><br>
            <input type="checkbox" name=''>入試対象年度<select><option>2022年</option><option>2023年</option></select>
            <input type="checkbox" name=''>高校<input type="text">
          </div>

      </header>
        <table border="1" id="participant_table">
            <tr class="th">
              <th>参加日</th>
              <th>参加者NO</th>
              <th>氏名</th>
              <th>学校名</th>
              <th>学年</th>
              <th>入試対象年度</th>
              <th>参加回数</th>
              <th>参加学科</th>
              <th>コース</th>
              <th>合否</th>
              <th>詳細</th>
            </tr>
            <tr class="td">
              <td>2021/6/10</td>
              <td>0</td>
              <td>test</td>
              <td>test</td>
              <td>3</td>
              <td>2022</td>
              <td>3</td>
              <td>情報スペシャリスト</td>
              <td>フル</td>
              <td><button>登録</button></td>
              <td><button>詳細</button></td>
            </tr>
            <tr class="td">
              <td>2021/6/10</td>
              <td>0</td>
              <td>test</td>
              <td>test</td>
              <td>3</td>
              <td>2022</td>
              <td>3</td>
              <td>情報スペシャリスト</td>
              <td>フル</td>
              <td><button>登録</button></td>
              <td><button>詳細</button></td>
            </tr>
            <tr class="td">
              <td>2021/6/10</td>
              <td>0</td>
              <td>test</td>
              <td>test</td>
              <td>3</td>
              <td>2022</td>
              <td>3</td>
              <td>情報スペシャリスト</td>
              <td>フル</td>
              <td><button>登録</button></td>
              <td><button>詳細</button></td>
            </tr>
            <tr class="td">
              <td>2021/6/10</td>
              <td>0</td>
              <td>test</td>
              <td>test</td>
              <td>3</td>
              <td>2022</td>
              <td>3</td>
              <td>情報スペシャリスト</td>
              <td>フル</td>
              <td><button>登録</button></td>
              <td><button>詳細</button></td>
            </tr>
            <tr class="td">
              <td>2021/6/10</td>
              <td>0</td>
              <td>test</td>
              <td>test</td>
              <td>3</td>
              <td>2022</td>
              <td>3</td>
              <td>情報スペシャリスト</td>
              <td>フル</td>
              <td><button>登録</button></td>
              <td><button>詳細</button></td>
            </tr>
          </table>
          <script src="../resources/js/teacher.js" ></script>

    </body>
</html>