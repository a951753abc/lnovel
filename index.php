<html lang="zh_TW">
<head>
    <title>時よ止まれ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function ShowTime(){
            var NowDate=new Date();
            var h=NowDate.getHours();
            var m=NowDate.getMinutes();
            var s=NowDate.getSeconds();
            document.getElementById('showbox').innerHTML = h+'時'+m+'分'+s+'秒';
            if (s%5 === 0) {
                nameChange();
            }
            setTimeout('ShowTime()',1000);
        }
        function nameChange() {
            <?php
                $name = ["綾香", "黑田", "優樹", "憂樹", "優數", ""];
                $serifu = [
                    "為什麼他這麼溫柔，卻會被大家當作變態呢？",
                    "是嗎？謝謝你的讚美。",
                    "抱歉學姐，我有點事，得先告辭了！",
                    "防守！",
                    "你有為了完成目的而不擇手段的覺悟嗎。",
                    ""
                ];
            ?>
            $.getJSON('backend.php', function(data) {
                $.each(data, function(index) {
                    alert(data);
                    alert(index);
                });
            });
            for (var i=1; i<3; i++) {
                $('.n'+i).text('<?=$name[array_rand($name, 1)]?>');
            }
            for (i=1; i<7; i++) {
                $('.s'+i).text('<?=$serifu[array_rand($serifu, 1)]?>');
            }
        }
    </script>
</head>
<body onload="ShowTime()">
<br>
<div id="showbox"></div>
「<span class="s1"></span>」<br>
「<span class="s2"></span>」<br>
碰！<br>
什麼都不說的<span class="n1">綾香</span>，用右手朝著<span class="n2">黑田</span>的臉狠狠的就是一拳。<br>
衝擊<br>
「<span class="s3"></span>」<br>
「<span class="s4"></span>」<br>
「<span class="s5"></span>」<br>
「<span class="s6"></span>」<br>
</body>
</html>