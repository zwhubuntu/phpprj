<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/11
 * Time: 16:22
 */
if (isset($_GET['a'])) {
    if (strcmp($_GET['a'], $flag) == 0)
        die('Flag: '.$flag);
    else
        print '离成功更近一步了';
}
?>