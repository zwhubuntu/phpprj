
username:
<input name="text_loginname" type="text" id="txt_loginname" value="root" class="login"><br/>
password:
<input name="text_loginpass" type="password" id="txt_loginpass" value="xiaohui" class="login" ><br/>
<input type="submit" name="ib_teacher" value="login" id="ib_teacher" class="login">
<input type="submit" name="ib_student" value="reset" id="ib_student" class="login">
<?php
session_start();
$user=$_POST['txt_loginname'];
$pass=$_POST['txt_loginpass'];
if($user=="root"&&$pass=="xiaohui"){
    echo "login success!";
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass;
    $_SESSION['product_list']="";
    $_SESSION['quatity']="";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=\goods.php\">3 seconds into the main page....";
}else{
    echo "<script>alert('login failed!');history.back();</script>";
}
?>