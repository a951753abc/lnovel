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
    <p>AC 1999.5.10.</p>
    <p><br></p>
    <p>從學界被放逐後，這是我第一次，也許也是最後一次提起筆。</p>
    <p>我認為我有必須寫下什麼，將之留給後人，留給歷史見證。</p>
    <p><br></p>
    <p>──這個世界會以兩千年為單位經歷<ruby>末日<rt>Big Lost</rt></ruby>。</p>
    <p><br></p>
    <p>西元前，人與神以此為契機訣別，只得以那些流傳後世的神話，窺探樣貌。</p>
    <p>時至今日，地球仍存在無法解釋的古代文明遺跡。</p>
    <p>我耗費多年心血，試圖尋找能佐證我論點的蛛絲馬跡。</p>
    <p>最後，我解出Les Propheties的線索......</p>
    <p><br></p>
    <p>《作者不詳，於舊日本東京出土的殘缺手稿》</p>
    <p><br></p>
    <p>＊＊＊</p>
    <p><br></p>
    <p>「這次的合作夥伴......是你啊。上回是園藝，這回又在看什麼？」</p>
    <p>來到集合地點後，我打量著穿著深褐色皮衣外套，有著亂糟糟鳥窩頭，坐在地板上讀書的男人。</p>
    <p>認識他以來，每回都可以看到他在閱讀不同種類的書籍。</p>
    <p>「接龍。小說接龍。由數名作者在幾乎無規則下的環境書寫故事，閱讀時可以從各種角度切入分析，挺有意思的。」</p>
    <p>說著說著他把書本刻意抬高，使我能看到上頭的書名。</p>
    <span id="novel-tail"><?= $novel_tail ?></span>
    <?php if ($root === 1) : ?>
        <p>結束小說接龍的話題後，他闔上書本，詫異地問：</p>
        <p>「話說回來，距離任務執行時間，還有<?= $hourText ?>小時。你提早出現是要提早動工嗎？」</p>
        <p>「是這麼打算，畢竟夜晚是他們的全盛期，風險太高。」</p>
        <p>「可是你的能力也是半夜才能使用不是嗎？」</p>
        <p>「我不是那麼喜歡那個充滿賭博性質的能力。你懂得，風險太高。而且我覺得有你就夠用。」</p>
        <p>「也對，仔細想想就跟小說接龍有異曲同工之妙。」</p>
        <p>「我記得你上次是用園藝做比喻......算了，我們還是快點去把目標解決吧。」</p>
        <p>我聳聳肩結束對話，接著從口袋中掏出瑞士刀，深呼吸做好心理準備。</p>
        <p>他也不再多言，從地板上站起來後，一手搭上我的肩，另一隻手在空中比呀比的，彷彿在觸碰什麼我所無法辨識之物。</p>
        <p>「──<ruby>流出<rt>Skip</rt></ruby>。」</p>
        <p>下一秒，時間與物理的法則被一併扭曲。</p>
        <p>這便是他的能力。</p>
        <p>將時間飛快流逝，直至下一個無法跨越的<ruby>命運分歧點<rt>Flag</rt></ruby>。作用期間，體感上一秒相當於現實時間一小時，且所有行動資訊會轉化為平面文字。</p>
        <p>數秒後，我們已經身處郊外山區，並與目標能力者互相對峙。</p>
        <p><br></p>
        <p>「你們這些......諾斯底的......走狗！」</p>
        <p>臉色蒼白憔悴的男子，用力往地上呸了一口。</p>
        <p>「呃、抱歉我還沒跟上展開，可以再讓我看一下對話紀錄嗎？大概從我們剛到高尾山那邊就可以了。」</p>
        <p>沒能速讀完成事情經過的我，往後退了一步，將接下來的事交給夥伴。</p>
        <p>「恐怕是沒這閒工夫。再說這等於你還沒讀到重點。」</p>
        <p>夥伴冷冷瞪我一眼後，拿出手槍對著男子就射。</p>
        <p>幾乎是同一時間──日光被漆黑吞噬，伸手不見五指。</p>
        <p>「陽光被......」</p>
        <p>「嗄──────！」</p>
        <p>猶如爬蟲類般冰冷刺耳的低鳴聲打斷我的發言。聲音由遠而近的速度快到嚇人，夥伴嘖了一聲後，似乎開始盲射。直至他急促的槍響聲被骨肉分離異音取代，血繡味沖淡煙硝味時，我不禁苦笑。</p>
        <p><br></p>
        <p>哎呀──失敗了呢。</p>
        <p><br></p>
        <p>面對即將到來的死，我坦然鬆開雙手，放棄掙扎。</p>
        <p><br></p>
        <p>「<ruby>流<rt>Auto</rt>......出<rt>Load</rt>.....</ruby>」</p>
        <p><br></p>
        <p>然而死神終究是慢了一步，當我不知被什麼冰冷之物給貫穿心臟時，耳邊傳來夥伴不肯向命運低頭的呢喃聲。</p>
        <p>那麼──不知名的男子，我們二周目見，下次我會盡量速讀完對話紀錄的。</p>
    <?php else : ?>
    <?php endif; ?>

</div>

<!--「 <label><input id="s1" type="text" title="serifu"></label> 」 <br>-->
</body>
</html>