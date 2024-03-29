<?php
$loopCount = $_COOKIE['loopCount'];
$hour = date('H');
if ($hour >= 8) {
    $root = 1;
} else {
    $root = 2;
}
if ($_SERVER['REMOTE_ADDR'] == '111.251.159.104') {
    $root = 2;
}
$edit = false;
if (($loopCount > 1 && $root == 2) || ($loopCount == 0 && $root == 2)) {
    $edit = true;
}
if (!$edit) {
    exit;
}
?>
<html lang="zh_TW">
<head>
    <title>時よ止まれ</title>
    <style>
        .mGzaTb {
            padding: 8px;
            color: rgba(33, 33, 33, 1);
            font-family: "Source Sans Pro", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.75;
            font-variant-ligatures: none;
            margin: 0;
            outline: none;
            position: relative;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            cursor: default;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function () {
            setTimeout('ShowTime()',500);
        });
        function del(id) {
            $('#display-time-left').remove();
            var thisId = $('#' + id);
            thisId.css('text-decoration', 'line-through');
            $.ajax({
                type: "POST",
                url: "metaText.php",
                dataType: "json",
                data: {
                    id: id,
                },
                success: function(data) {
                    thisId.after(data.text);
                    thisId.prop('onclick', null).off('click');
                    setTimeout('ShowTime()',500);
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                }
            });
        }
        function point(id) {
            $('#display-time-left').remove();
            var thisId = $('#' + id);
            thisId.css('color', '#DC143C');
            $.ajax({
                type: "POST",
                url: "metaText.php",
                dataType: "json",
                data: {
                    id: id,
                },
                success: function(data) {
                    thisId.after(data.text);
                    thisId.prop('onclick', null).off('click');
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                }
            });
        }
        function ShowTime(){
            var NowDate=new Date();
            var s=NowDate.getSeconds();
            document.getElementById('display-time-left').innerHTML = '00:'+s+'';
            if (s%59 === 0) {
                var post;
                $('html,body').animate({scrollTop:0}, 333);
                $('#display-time-left').remove();
                $('#break').empty();
                $('#text-1').prop('onclick', null).off('click').empty().html('<p>他卻不理會我的話語，一個箭步朝我衝來，手電筒的光源也同時消失。</p>');
                $('#text-2').prop('onclick', null).off('click').empty().html('<p>可男子卻未放棄攻擊的念頭，他一咬牙，厚重的鱗片覆上全身。</p>');
                $('#text-3').prop('onclick', null).off('click').empty().html('<p>眼前的男子轉眼間冷卻下來，不被仇恨與憤怒衝昏頭。</p>');
                if (document.getElementById('text-3')) {
                    post = 'break2';
                } else {
                    post = 'break';
                }
                $.ajax({
                    type: "POST",
                    url: "metaText.php",
                    dataType: "json",
                    data: {
                        id: post,
                    },
                    success: function(data) {
                        $('#break').after(data.text);
                    },
                    error: function(jqXHR) {
                        console.log(jqXHR);
                    }
                });
            }
            setTimeout('ShowTime()',1000);
        }
    </script>
</head>
<body>
<div class="mGzaTb">
    <p>靠著手電筒微弱的光源，我好不容易走出樹林，來到一塊空地。</p>
    <p>要說異樣的話，就是不遠處有一間小木屋，以及眼前不到十公尺的距離有一位臉色蒼白的男子，透過手電筒的光源更顯陰森嚇人。</p>
    <p>「呃、晚安？」</p>
    <p>我試著以友善的態度對他揮手。</p>
    <p>「滾回去。」</p>
    <p>男子厲聲道。</p>
    <p>「別這麼說嘛。同為能力者也許我們可以聊聊，做個朋友之類的？」</p>
    <p>聽到能力者三個字，他的表情更加猙獰，隨即像是發現什麼一樣大聲咆嘯：</p>
    <p>「你是......諾斯底的......走狗！」</p>
    <p>奇怪我明明沒有自報家門啊？難道是我身上有什麼特徵，例如身上的教袍......好吧。</p>
    <p>察覺自己的愚蠢後，我高舉雙手，持續釋出善意。</p>
    <p>「等等，我不是來跟你相殺的。我只是想確認一些事，例如高尾山下的村民遭到洗劫──」</p>
    <p style="cursor: not-allowed;" onclick="del('text-1')" id="text-1">他卻不理會我的話語，一個箭步朝我衝來，手電筒的光源也同時消失。</p>
    <div id="break"></div>
    <p id="display-time-left"></p>
</div>
</body>
</html>