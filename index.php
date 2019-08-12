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
$chtAry = [
    '零', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '十一', '十二', '十三', '十四', '十五', '十六'
];
if ($hour >= 8) {
    $hourText = 24 - $hour;
    $root = 1;
    $hourText = $chtAry[$hourText];
} else {
    $root = 2;
}
if ($_SERVER['REMOTE_ADDR'] == '111.251.159.104') {
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

        function metaBreak() {
            $('html,body').animate({scrollTop:0}, 333);
            window.location.href = 'https://yumehiru.link/ln/metabreak.php';
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
        <?php if ($root == 1):?>
        <p><span id="show-box"></span></p>
        <?php else:?>
        <p>好不容易終於到了凌晨十二點。</p>
        <?php endif;?>
    <?php elseif ($loopCount == 0): ?>
        <?php if ($root == 1) :?>
        <p>AD 1999.5.10.</p>
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
        <p>命運的喪鐘已被敲響，孤獨的勇者走向深淵</p>
        <p><br></p>
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
        <?php if ($root == 1):?>
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
        <?php else :?>
            <p>結束小說接龍的話題後，他闔上書本，開口道：</p>
            <p>「在你過來之前，我做了些調查。報告上說的吸血鬼能力不太正確。」</p>
            <p>「喔？願聞其詳。」</p>
            <p>「接近不死身的超治癒力、範圍限定的光源吸收、獸化、以及報告上提及的血液轉化──」</p>
            <p>「你應該不是在跟我討論小說角色設定吧？」</p>
            <p>「不是，我很認真。而且我已經把今天所能使用的能力次數用完了。」</p>
            <p>我皺了皺眉，說道：「你在我來之前就一個人去處理目標？」</p>
            <p>「不太算，白天跟你去過。」</p>
            <p>我陷入沉思。</p>
            <p>諾斯底內，我跟他都是極為特殊的能力者。他具有橫渡命運之輪〈時間〉的能力，也就是俗稱的Loop系能力者。但如果對手是像他口中所述的強大能力者，他也束手無策。</p>
        <?php endif;?>
    <?php endif; ?>
    <?php if (($loopCount > 1 && $root == 2) || ($loopCount == 0 && $root == 2)):?>
        <script>
            function ShowTime(){
                var NowDate=new Date();
                var s=NowDate.getSeconds();
                document.getElementById('display-time-left').innerHTML = '00:'+s+'';
                if (s%59 === 0) {
                    $('html,body').animate({scrollTop:0}, 333);
                    $('#display-time-left').remove();
                    $('#break').empty();
                    $.ajax({
                        type: "POST",
                        url: "metaText.php",
                        dataType: "json",
                        data: {
                            id: 'break',
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

            function getDocumentTop() {
                var scrollTop, bodyScrollTop = 0, documentScrollTop = 0;
                if (document.body) {
                    bodyScrollTop = document.body.scrollTop;
                }
                if (document.documentElement) {
                    documentScrollTop = document.documentElement.scrollTop;
                }
                scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
                return scrollTop;
            }

            function getWindowHeight() {
                var windowHeight = 0;
                if (document.compatMode == "CSS1Compat") {
                    windowHeight = document.documentElement.clientHeight;
                } else {
                    windowHeight = document.body.clientHeight;
                }
                return windowHeight;
            }

            function getScrollHeight() {
                var scrollHeight, bodyScrollHeight = 0, documentScrollHeight = 0;
                if (document.body) {
                    bodyScrollHeight = document.body.scrollHeight;
                }

                if (document.documentElement) {
                    documentScrollHeight = document.documentElement.scrollHeight;
                }
                scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
                return scrollHeight;
            }
            window.onscroll = function () {
                if ((getScrollHeight() == getWindowHeight() + getDocumentTop()) &&
                    document.getElementById("display-time-left")) {
                    ShowTime();
                }
            };
        </script>
        <p>「時間差不多，走吧。他就在高尾山上。處理四處作亂的能力者〈惡〉，是我們〈諾斯底〉的使命。」</p>
        <p>「雖然我不太算教眾，比較像餬口飯吃的社畜啦......畢竟這裡的待遇最好。」</p>
        <p>我抓了抓頭，跟上夥伴的腳步。</p>
        <p>我跟他皆隸屬諾斯底教團，嚴格上來說就只是個區域自治保安。末日後，受損最少的日本湧入大量難民，其中自然也包含能力者。為了維護殘存的文明與秩序，大大小小的組織成立起管理機構，試圖讓人們維持住舊時代的生活。至於結果，想也知道不太可能成功。</p>
        <p>現在日本就是個群雄割據戰國時代。各個組織都心懷鬼胎，就算我隸屬的教團，也難保不會有頭殼壞掉的激進派站上台，用善惡二元論作為大義去戰爭。</p>
        <p>嘛，真有那個時候，我會乾脆地離職。希望別被滅口就好。</p>
        <p>我就這樣一面東想西想，一面聽著夥伴嘮嘮叨叨地講些他最新領悟的小說接龍人生觀。</p>
        <p>進入高尾山時，時間已經是<?=$hour?>時。</p>
        <p>「你覺得那個人，呃我又忘記他名字──算了不太重要，他的目的是什麼？陶醉在全能錯覺自以為是神？」</p>
        <p>「沒機會問呢。也許你待會可以試試和平一點的談判。吶，往前再走三百公尺左右，有一條獸徑，穿過去就是了。」</p>
        <p>說完夥伴停下腳步，伸出食指指著前方。</p>
        <p>「你不一起去？」</p>
        <p>「我說過我能力次數告罄。放心吧你死翹翹的話我會幫你風光大葬。記住，至今為止採取攻擊行動的結果都是死路一條。」</p>
        <p>「這麼說也是。」</p>
        <p>我欣然同意他的說詞，隨即邁開步伐向前走去。</p>
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
        <p>他卻不理會我的話語，一個箭步朝我衝來，手電筒的光源也同時消失。</p>
        <div id="break">
        <p><br></p>
        <p>＊＊＊</p>
            <p><br></p>
            <p>那麼，以上就是至今為止的前情提要。</p>
            <p>我既不知你是何人，也不知你會如何看待我的經歷，更不知這樣的資訊能讓你了解多少。</p>
            <p>不過你如果袖手旁觀的話，我鐵定會死吧。</p>
            <p>我無法假設你的想法，也無法與你對話。我所能做的，只有把自己的經歷資訊轉化為第一人稱平面資訊，以及把修改一切的能力轉交於你。每當秒針指到五十九之前，你有權修改一切。</p>
            <p>如果你有意願的話，就請跟我這麼做吧──</p>
            <p><br></p>
            <p style="cursor: pointer;" onclick="metaBreak()">「──
                <ruby>流出
                    <rt>Meta Break</rt>
                </ruby>
                。」
            </p>
            <p id="display-time-left"></p>
        </div>
    <?php endif;?>
</div>
</body>
</html>