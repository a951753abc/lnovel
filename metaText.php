<?php
header('Content-Type: application/json; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == "POST" || empty($_POST['id'])) {
    $id = $_POST['id'];
    $htmlText = '';
    switch ($id) {
        case 'text-1':
            $htmlText .= '<p>他露出訝異的神情站在原地，似乎無法理解發生什麼事。</p>';
            $htmlText .= '<p>「是嗎......命運女神看來還站在我這邊呢。雖然我不知道你是男是女，總之謝了。」</p>';
            $htmlText .= '<p>我由衷對你道謝，也許我們默契還算不錯？</p>';
            $htmlText .= '<p style="cursor: not-allowed;" onclick="del(\'text-2\')" id="text-2">可男子卻未放棄攻擊的念頭，他一咬牙，厚重的鱗片覆上全身。</p>';
            break;
        case 'text-2':
            $htmlText .= '<p>彷彿方才什麼也沒發生過似地，我們雙方僅是站在原地動也不動。</p>';
            break;
    }





    echo json_encode(['text' => $htmlText]);
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
