<?php
date_default_timezone_set("Asia/Taipei");
$novel = ['霞之謎', 'Gold/Apocrypha -秋雨新霽-'];
$num = array_rand($novel, 1);
switch ($num) {
    case 0:
        $novel_tail = file_get_contents('novel_tail_1.html');
        break;
    case 1:
        $novel_tail = file_get_contents('novel_tail_2.html');
        break;
}
$hour = date('H');
$hourText = '';
$root = null;
if ($hour >= 8) {
    $hourText = 24 - $hour;
    $root = 1;
    $chtAry = [
            '零', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六'
    ];
    $hourText = $chtAry[$hourText];
} else {
    $root = 2;
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
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function () {
            // $('#s1').on('change', function() {
            //     console.log('.on(change) = ' + $(this).val());
            // });
        });

        function nameChange() {
            $.getJSON('backend.php', function (data) {
                $.each(data, function (name, values) {
                    if (name === 'name') {
                        $.each(values, function (key, value) {
                            $('.n' + (key + 1)).text(value);
                        })
                    } else {
                        $.each(values, function (key, value) {
                            $('.s' + (key + 1)).text(value);
                        })
                    }
                });
            });
        }
    </script>
</head>
<body>
<div class="mGzaTb">
    <p>這個世界，經歷過一次末日〈Big Lost〉。</p>
    <p><br></p>
    <p>突如其來的白光，伴隨天搖地動的異變，使地球的總人口減少八成。</p>
    <p>大災難之後，倖存者中開始出現扭曲現實法則的異能者。</p>
    <p>有人主張這是人類的進化之路，也有人說這是墮落為惡魔的前兆，更有異能者自詡為神。</p>
    <p>唯一能確信的，只有人類仍為爭奪資源而互相傷害。</p>
    <p><br></p>
    <p><br></p>
    <p>──《給未曾蒙面的你》。</p>
    <p>「這次的合作夥伴嗎......是你啊。上回是園藝，這回又在看什麼？」</p>
    <p>來到集合地點後，我打量著穿著深褐色皮衣外套，有著亂糟糟鳥窩頭，坐在地板上讀書的男人。</p>
    <p>認識他以來，每回都可以看到他在閱讀不同種類的書籍。</p>
    <p>「接龍。小說接龍。由數名作者在幾乎無規則下的環境書寫故事，閱讀時可以從各種角度切入分析，挺有意思的。」</p>
    <p>說著說著他把書本刻意抬高，使我能看到上頭的書名。</p>
    <span id="novel-tail"><?= $novel_tail ?></span>
    <?php if ($root === 1) : ?>
        <p>「話說回來，距離任務執行時間，還有<?= $hourText ?>小時。你提早出現是要提早動工嗎？」</p>
        <p>他闔上書本，詫異地問。</p>
        <p>「我是這麼打算的，畢竟夜晚是他們的全盛期，風險太高。」</p>
        <p>「可是你的能力也是半夜才能使用不是嗎？」</p>
        <p>「我不是那麼喜歡那個充滿賭博性質的能力......」</p>
        <p>「也對，仔細想想就跟小說接龍有異曲同工之妙。」</p>
        <p>「......我記得你上次是用園藝做比喻的。」</p>
    <?php else : ?>
    <?php endif; ?>

</div>

<!--「 <label><input id="s1" type="text" title="serifu"></label> 」 <br>-->
</body>
</html>