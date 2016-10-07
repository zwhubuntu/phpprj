<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/11
 * Time: 16:34
 */
session_start();
if (isset ($_GET['password'])) {
    if ($_GET['password'] == $_SESSION['password'])
        die ('Flag: '.$flag);
    else
        print '<p>Wrong guess.</p>';
}

$time1=mt_srand((microtime() ^ rand(1, 10000)) % rand(1, 10000) + rand(1, 10000));
echo $time1;
?>