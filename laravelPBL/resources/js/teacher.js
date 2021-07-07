var control_flag=true;

function downloadCSV(name) {
    //ダウンロードするCSVファイル名を指定する
    const filename = name+'.csv';
    //CSVデータ
    const data = "テスト, テスト, テスト\nテスト, テスト, テスト";
    //BOMを付与する（Excelでの文字化け対策）
    const bom = new Uint8Array([0xef, 0xbb, 0xbf]);
    //Blobでデータを作成する
    const blob = new Blob([bom, data], { type: "text/csv" });

        //BlobからオブジェクトURLを作成する
        const url = (window.URL || window.webkitURL).createObjectURL(blob);
        //ダウンロード用にリンクを作成する
        const download = document.createElement("a");
        //リンク先に上記で生成したURLを指定する
        download.href = url;
        //download属性にファイル名を指定する
        download.download = filename;
        //作成したリンクをクリックしてダウンロードを実行する
        download.click();
        //createObjectURLで作成したオブジェクトURLを開放する
        (window.URL || window.webkitURL).revokeObjectURL(url);
}
$('#csv').click(function(){
    var file_name=prompt("保存するファイルの名前");
    downloadCSV(file_name);
})

$('body').on('click', '#finish', function() {
    $('.remove').remove();
    control_flag=true;
  });

  $('body').on('click', '#all', function() {
    $('.approval_check').prop('checked', true);
  });


$('#approval').click(function(){
    if(control_flag){
        $('<th class=\'remove\'>承認</th>').prependTo('.th');
        $('<td class=\'remove\'><input type=\'checkbox\' class=\'approval_check\'></td>').prependTo('.td');
        $('#search').after('<div class=\'remove\'><div class=\'add_button\'><button>承認</button></div><div class=\'add_button\'><button id=\'all\'>全て選択</button></div><div class=\'add_button\'><button id="finish">終了</button></div></div>');
        control_flag=false;
    }
})