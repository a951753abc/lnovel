<?php
session_start();
date_default_timezone_set("Asia/Taipei");
$novel = ['霞之謎', 'Gold/Apocrypha -秋雨新霽-', '雯'];
$num = array_rand($novel, 1);
if (isset($_COOKIE['loopCount'])) {
    $loopCount = $_COOKIE['loopCount'];
} else {
    setcookie('loopCount', 0, time() + 60 * 60 * 24);
    $loopCount = $_COOKIE['loopCount'];
}
switch ($num) {
    case 0:
        $novel_tail = file_get_contents('novel_tail_1.html');
        break;
    case 1:
        $novel_tail = file_get_contents('novel_tail_2.html');
        break;
    case 2:
        $novel_tail = file_get_contents('novel_tail_3.html');
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
        .myButton {
            -moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
            -webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
            box-shadow:inset 0px 39px 0px -24px #e67a73;
            background-color:#e4685d;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            border-radius:4px;
            border:1px solid #ffffff;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:"Source Sans Pro", sans-serif;
            font-size:15px;
            padding:6px 15px;
            text-decoration:none;
            text-shadow:0px 1px 0px #734e4b;
        }
        .myButton:hover {
            background-color:#eb675e;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function () {
            ShowTime();
        });

        function ShowTime() {
            var NowDate = new Date();
            var h = NowDate.getHours();
            var m = NowDate.getMinutes();
            var s = NowDate.getSeconds();
            document.getElementById('show-box').innerHTML = h + '時' + m + '分' + s + '秒';
            setTimeout('ShowTime()', 1000);
        }

        function changeFate() {
            $('html,body').animate({scrollTop:0}, 333);
            window.location.href = 'https://yumehiru.link/ln/backend.php';
        }
    </script>
</head>
<body>
<div class="mGzaTb">
    <?php if ($loopCount == 1): ?>
        <p>「我記得你上次是用園藝做比喻......算了，我們還是快點去把目標解決吧。」</p>
        <p>我聳聳肩結束對話，接著從口袋中掏出瑞士刀，深呼吸做好心理準備。</p>
        <p>「不行。」</p>
        <p>他搖搖頭，說道：</p>
        <p>「我們死過一次了。」</p>
        <p>「對方這麼厲害？」我有些訝異。</p>
        <p>「他的能力比想像中麻煩──」</p>
        <p>聽完夥伴的解釋後，我忍不住抱怨：</p>
        <p>「我覺得不行，這有點犯規。任務指示明明寫說對方在夜晚才能發揮全力，但沒說他可以直接把白天變晚上。」</p>
        <p>「外加你什麼也沒做，明明已經晚上了。」</p>
        <p>「不不不，我要為上一次的我做辯護。也許對方的條件比我寬鬆，例如只要照不到陽光之類的。我如果真的能做些什麼，一定不會眼睜睜放你去死的啦。」</p>
        <p>對於我的辯解，他顯得不置可否。</p>
        <p>「你這就跟小說接龍自以為有做事的首家一樣不負責任。總之，我的能力有次數限制。也不是每次都那麼好運，有機會讓我發動。」</p>
        <p>「不然這次我打頭陣，你在後面看情況不妙就撤退？我們對目標的了解仍然太少。」</p>
        <p>他皺起眉，思索一陣後點頭同意。</p>
        <p><br></p>
        <p>＊＊＊</p>
        <p><br></p>
        <p>「你們這些......諾......」</p>
        <p>「先手必勝！！！！」</p>
        <p>Skip一結束，我便舉起跟夥伴借來的手槍瘋狂擊發。子彈貫穿男子後，週圍光源消逝，接著便是他痛苦的咆嘯聲。</p>
        <p>我很確定方才至少有一發命中要害，然而野獸般地吼聲仍不絕於耳。</p>
        <p>超治癒能力嗎──正當我這麼想著時，「死」已來到我面前。</p>
        <p>一陣異樣感掃過頸部，下一秒，我的嘴唇便吻上草地。</p>
        <p><br></p>
        <p>「──
            <ruby>流
                <rt>Auto</rt>
                出
                <rt>Load</rt>
            </ruby>
            。」
        </p>
        <p><br></p>
        <p>失去意識前，我心想這次任務一定要給個死亡加給。</p>
        <p><span onclick="changeFate()" class="myButton">Load SaveFile.</span></p>
    <?php elseif ($loopCount > 1): ?>
        <p>「我記得你上次是用園藝做比喻......算了，我們還是快點去把目標解決吧。」</p>
        <p>我聳聳肩結束對話，接著從口袋中掏出瑞士刀，深呼吸做好心理準備。</p>
        <p>「嘿Boy，你想知道我聽這句話是第幾次嗎？」</p>
        <p>「我想不會是第五次。你的能力一天最多重複三次，所以這次對手多逆天？」</p>
        <p>「仔細聽好──」</p>
        <p>聽完夥伴的解說後，我揉著太陽穴問：</p>
        <p>「所以他只需要三秒不到的時間就把我的頭砍下來當球踢？」</p>
        <p>「對。」</p>
        <p>「而且在那之前我已經打爆他的心臟或頭或其他要害？」</p>
        <p>「沒錯。附帶一提，你上次的表現就像是以為爆字數就可以救龍的尾家。殊不知一條龍需要爆字數時也跟死了一樣。」</p>
        <p>「雖然我聽不太懂這個比喻，我們接下來該怎麼做？跟上層回報對方實力遠超乎想像？」</p>
        <p>他愣了一下，隨即說道：</p>
        <p>「諾斯底內部，你覺得什麼樣能力者能打贏他？」</p>
        <p>「武鬥派的？啊不過我跟你也是有相當程度的體術鍛鍊......如果連我們都被輕而易舉殺掉，也許就需要一些特殊能力者。」</p>
        <p>「沒錯。例如能在命運之輪中移動的我，或是例如你。」</p>
        <p>「......」</p>
        <p>我沉默了一下，接著兩手一攤。</p>
        <p>「好吧。就等到晚上。」</p>
        <p>無事可做的我，索性躺在地板上，看著天空發呆。</p>
        <p><span id="show-box"></span></p>
    <?php elseif ($loopCount == 0): ?>
        <?php if ($root == 1) :?>
        <p>AC 1999.5.10.</p>
        <p><br></p>
        <p>從學界被放逐後，這是我第一次，也許也是最後一次提起筆。</p>
        <p>我認為我有必須寫下什麼，將之留給後人，留給歷史見證。</p>
        <p><br></p>
        <p>──這個世界會以兩千年為單位經歷
            <ruby>末日
                <rt>Big Lost</rt>
            </ruby>
            。
        </p>
        <p><br></p>
        <p>西元前，人與神以此為契機訣別，只得以那些流傳後世的神話，窺探樣貌。</p>
        <p>時至今日，地球仍存在無法解釋的古代文明遺跡。</p>
        <p>我耗費多年心血，試圖尋找能佐證我論點的蛛絲馬跡。</p>
        <p>最後，我解出Les Propheties的線索......</p>
        <p><br></p>
        <p>《作者不詳，於舊日本東京出土的殘缺手稿》</p>
        <?php elseif ($root == 2): ?>
        <p>這個世界，經歷過兩次<ruby>末日<rt>Big Lost</rt></ruby>。</p>
        <p><br></p>
        <p>突如其來的白光，伴隨天搖地動的異變，使地球的總人口減少八成。</p>
        <p>末日後，倖存者中開始出現能重現神話、傳說，或是其他不知是什麼的異能者。</p>
        <p>有人主張這是人類的進化之路，也有人說這是墮落為惡魔的前兆，更有異能者自詡為神。</p>
        <p>唯一能確信的，只有人類仍為爭奪有限資源而互相傷害。</p>
        <p><br></p>
        <p><br></p>
        <p>《給未曾蒙面的你》</p>
        <?php endif;?>
        <p><br></p>
        <p>＊＊＊</p>
        <p><br></p>
        <p>「這次的合作夥伴......是你啊。上回是園藝，這回又在看什麼？」</p>
        <p>來到集合地點後，我打量著穿著深褐色皮衣外套，有著亂糟糟鳥窩頭，坐在地板上讀書的男人。</p>
        <p>認識他以來，每回都可以看到他在閱讀不同種類的書籍。</p>
        <p>「接龍。小說接龍。由數名作者在幾乎無規則下的環境書寫故事，閱讀時可以從各種角度切入分析，挺有意思的。」</p>
        <p>說著說著他把書本刻意抬高，使我能看到上頭的書名。</p>
        <span id="novel-tail"><?= $novel_tail ?></span>
        <p>結束小說接龍的話題後，他闔上書本，詫異地問：</p>
        <p>「話說回來，距離任務執行時間，還有<?= $hourText ?>小時。你提早出現是要提早動工嗎？」</p>
        <p>「是這麼打算，畢竟夜晚是他們的全盛期，風險太高。」</p>
        <p>「可是你的能力也是半夜才能使用不是嗎？」</p>
        <p>「我不是那麼喜歡那個充滿賭博性質的能力。你懂得，風險太高。而且我覺得有你就夠用。」</p>
        <p>「也對，仔細想想就跟小說接龍有異曲同工之妙。」</p>
        <p>「我記得你上次是用園藝做比喻......算了，我們還是快點去把目標解決吧。」</p>
        <p>我聳聳肩結束對話，接著從口袋中掏出瑞士刀，深呼吸做好心理準備。</p>
        <p>他也不再多言，從地板上站起來後，一手搭上我的肩，另一隻手在空中比呀比的，彷彿在觸碰什麼我所無法辨識之物。</p>
        <p>「──
            <ruby>流出
                <rt>Skip</rt>
            </ruby>
            。」
        </p>
        <p>下一秒，時間與物理的法則被一併扭曲。</p>
        <p>這便是他的能力。</p>
        <p>將時間飛快流逝，直至下一個無法跨越的
            <ruby>命運分歧點
                <rt>Flag</rt>
            </ruby>
            。作用期間，體感上一秒相當於現實時間一小時，且所有行動資訊會轉化為平面文字。
        </p>
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
        <p>哎呀──失敗了呢。</p>
        <p>面對即將到來的死，我坦然鬆開雙手，放棄掙扎。</p>
        <p><br></p>
        <p>「
            <ruby>流
                <rt>Auto</rt>
            </ruby>
            ......
            <ruby>出
                <rt>Load</rt>
                .....
            </ruby>
            」
        </p>
        <p><br></p>
        <p>然而死神終究是慢了一步，當我不知被什麼冰冷之物給貫穿心臟時，耳邊傳來夥伴不肯向命運低頭的呢喃聲。</p>
        <p><br></p>
        <p>二周目見，不知名的男子，下次我會盡量讀完對話紀錄的。</p>
        <p><span onclick="changeFate()" class="myButton">Load SaveFile.</span></p>
    <?php endif; ?>
</div>
</body>
</html>