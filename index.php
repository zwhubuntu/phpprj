<?php
$auth = false;
$role = "guest";
$salt =
if (isset($_COOKIE["role"])) {
    $role = unserialize($_COOKIE["role"]);
    $hsh = $_COOKIE["hsh"];
    if ($role==="admin" && $hsh === md5($salt.strrev($_COOKIE["role"]))) {
        $auth = true;
    } else {
        $auth = false;
    }
} else {
    $s = serialize($role);
    setcookie('role',$s);
    $hsh = md5($salt.strrev($s));
    setcookie('hsh',$hsh);
}
if ($auth) {
    echo "<h3>Welcome Admin. Your flag is";
	} else {
    echo "<h3>Only Admin can see the flag!!</h3>";
}
?>