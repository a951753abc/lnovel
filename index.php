<html lang="zh_TW">
<head>
    <title>時よ止まれ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
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
<body>
決定行動後，我決定觀察一下清水的戰鬥方式。 <br>
雖然經過兩個禮拜的修養，HP值已經恢復八成了，但是和其他玩家相比，我的HP還不是能進行戰鬥狀況。 <br>
將骰子召喚出來後握在手上，我等待著清水的攻擊，而清水也沒有辜負我的期待，他像變魔術一樣，憑空變出兩顆圓球狀的物體後，冷冷的從嘴裡說出了這場戰鬥的啟動語。 <br>
「使用投擲。」 <br>
「 <label><input type="text" title="serifu"></label> 」 <br>
</body>
</html>