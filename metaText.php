<?php
header('Content-Type: application/json; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == "POST" || empty($_POST['id'])) {
    $id = $_POST['id'];
    $htmlText = '';
    switch ($id) {
        case 'break':
            $htmlText .= '<p>下一秒，我的胸口即被冰冷之物刺穿。</p>';
            $htmlText .= '<p>──哎呀，賭輸了呢。</p>';
            $htmlText .= '<p>所以說這個能力根本一點也不靠譜嘛......</p>';
            $htmlText .= '<p>我掛著苦笑，就此倒落塵埃。</p>';
            break;
        case 'text-1':
            $htmlText .= '<p>他露出訝異的神情站在原地，似乎無法理解發生什麼事。</p>';
            $htmlText .= '<p>「是嗎......命運女神看來還站在我這邊呢。雖然我不知道你是男是女，總之謝了。」</p>';
            $htmlText .= '<p>我由衷對你道謝，也許我們默契還算不錯？</p>';
            $htmlText .= '<p style="cursor: not-allowed;" onclick="del(\'text-2\')" id="text-2">可男子卻未放棄攻擊的念頭，他一咬牙，厚重的鱗片覆上全身。</p>';
            break;
        case 'text-2':
            $htmlText .= '<p>彷彿方才什麼也沒發生過似地，我們雙方僅是站在原地動也不動。</p>';
            $htmlText .= '<p>「你、你到底做了什麼！！」</p>';
            $htmlText .= '<p>他憤怒地大叫。</p>';
            $htmlText .= '<p>話說回來這人自始自終只會大吼大叫，弄得我耳膜都有點痛，你讀起來也不是很舒服吧？我那夥伴說過太多的驚嘆號會妨礙閱讀。</p>';
            $htmlText .= '<p>所以──改寫吧。麻煩你跟我一併覆誦：</p>';
            $htmlText .= '<p style="cursor: pointer;" onclick="point(\'text-3\')" id="text-3">眼前的男子轉眼間冷卻下來，不被仇恨與憤怒衝昏頭。</p>';
            break;
        case 'text-3':
            $htmlText .= '<p>「你是......精神控制系能力者......？」</p>';
            $htmlText .= '<p>「不是。」我搖搖頭，接著說：</p>';
            $htmlText .= '<p>「如果非得要一個名詞，大概是他力本願世界法則改變系能力者吧？這不是重點，我想我們應該可以好好談話了？還是你希望我先希望把你的所有能力給抹消？話先說在前頭，就算你自殺，也是有可能把這個結果給抹消的。」</p>';
            $htmlText .= '<p>良久，他嘆了口氣道：</p>';
            $htmlText .= '<p>「問吧，你想知道什麼？」</p>';
            break;
    }
    echo json_encode(['text' => $htmlText]);
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
