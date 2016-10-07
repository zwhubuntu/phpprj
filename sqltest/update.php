<form id="form1" name="form1" method="post" action="update_ok.php">
<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/5
 * Time: 12:29
 */
include('conn.php');
$arr=mysql_query("select * from users where id=".$_GET['id'],$conn);
$select=mysql_fetch_array($arr);
?>
<input name="name" type="text" size="40" value="<?php echo $select['username'];?>"/>
    <textarea name="news" cols="40" rows="10"><?php echo $select['username'];?></textarea>
    <input type="submit" name="submit" value="save"/>
    <input type="hidden" name="id" value="<?php echo $select['id'];?>"/>
</form>
