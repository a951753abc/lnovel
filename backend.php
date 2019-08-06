<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author ying-huei
 * @date 2019/7/16
 * @since 2019/7/16 description
 */
if (isset($_COOKIE['loopCount'])) {
    $loopCount = $_COOKIE['loopCount'];
} else {
    setcookie('loopCount', 0, time() + 60 * 60 * 24);
    $loopCount = $_COOKIE['loopCount'];
}
$loopCount++;
setcookie('loopCount', $loopCount, time() + 60 * 60 * 24);
header("Location: https://yumehiru.link/ln/");
exit;