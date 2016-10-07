<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/5
 * Time: 12:15
 */
include("conn.php");
$arr=mysql_query("select * from users",$conn);
while($result=mysql_fetch_array($arr)){
    ?>
     <tr>
         <td height="25"><?php echo $result['username'];?></td>
         <td><?php echo $result['password'];?></td>
         <td><label>
                 <input type="hidden"  name="id" value="<?php echo $result['id'];?>"/>
                 <div align="center"><a href="update.php?id=<?php echo $result['id'];?>">编辑</a></div>
             </label></td>
         </tr>
<?php
}
?>