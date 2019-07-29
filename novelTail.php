<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author ying-huei
 * @date 2019/7/30
 * @since 2019/7/30 description
 */
header('Content-Type: application/json; charset=UTF-8');
$novel = ['霞之謎', 'Gold/Apocrypha -秋雨新霽-'];
$num = array_rand($novel, 1);
$text = '';
switch ($num) {
    case 0:
        $json_string = file_get_contents('novel_tail_1.html');
        break;
    case 1:
        $json_string = file_get_contents('novel_tail_2.html');
        break;
}
echo json_encode($json_string, JSON_UNESCAPED_SLASHES);
