<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/12
 * Time: 17:18
 */
session_start();
if ($_SESSION['user']==""&&$_SESSION['pass']==""){
    echo "you failed to login in !";
    echo "<meta http-equiv=\"refresh\" content=\"3;url=login.php\">3 seconds back to the login page....";
}else{
?>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="">
            <tr>
               <td width="120" rowspan="2" align="right">
                  <img src="images/good_01.jpg" width="115" height="100">
               </td>
               <td width="180" height="50" align="center" valign="middle",class="style2">
                  <span class="style2">id:0001</span>
               </td>
               <td colspan="2" align="center" valign="middle" class="style2">name:shoes</td>
               <td height="50" align="center" valign="middle" class="style2">price:122.5</td>
            </tr>
            <tr>
               <td height="22" colspan="4" align="center" class="style2">
                   <a href="shop_success.php?lmbs=1">add to cart</a>
               </td>
            </tr>
        </form>
    </table>
<?php
}
?>