<?php
header('Content-Type: application/json; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == "POST" || empty($_POST['id'])) {
    $id = $_POST['id'];
    $htmlText = '';
    switch ($id) {
        case 'text-1':
            $htmlText .= '<p>他露出訝異的神情，似乎無法理解發生什麼事。</p>';
            $htmlText .= '<p>「是嗎......命運女神看來還站在我這邊呢。雖然我不知道你是男是女，總之謝了。」</p>';
            break;
    }





    echo json_encode(['text' => $htmlText]);
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}