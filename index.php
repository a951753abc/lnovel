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
            $.getJSON('backend.php', function(data) {
                $.each(data, function(name, values) {
                    if (name === 'name') {
                        $.each(values, function (key, value) {
                            $('.n'+(key+1)).text(value);
                        })
                    } else {
                        $.each(values, function (key, value) {
                            $('.s'+(key+1)).text(value);
                        })
                    }
                });
            });
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