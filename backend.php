<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author ying-huei
 * @date 2019/7/16
 * @since 2019/7/16 description
 */
header('Content-Type: application/json; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    $name = ["綾香", "黑田", "優樹", "憂樹", "優數", ""];
    $serifu = [
        "為什麼他這麼溫柔，卻會被大家當作變態呢？",
        "是嗎？謝謝你的讚美。",
        "抱歉學姐，我有點事，得先告辭了！",
        "防守！",
        "你有為了完成目的而不擇手段的覺悟嗎。",
        ""
    ];
    for ($i=0;$i<=1;$i++) {
        $json_name[] = $name[array_rand($name, 1)];
        $json_serifu[] = $serifu[array_rand($serifu, 1)];
    }
    for ($i=0;$i<=4;$i++) {
        $json_serifu[] = $serifu[array_rand($serifu, 1)];
    }
    echo json_encode(['name' => $json_name, 'serifu' => $json_serifu]);
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}