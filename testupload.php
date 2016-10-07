<form name="form1" method="post" action="" enctype="multipart/form-data">
    upload your image:<input type="file" name="file" id="file"/>
    <input type="submit" name="upload" id="button" value="submit"/>
</form>

<html><head><meta charset="utf-8" /></head><body>
<?php
$key = 'flag{xxxxxxxxxxxxxxx}';
if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}

$allowed_types = array('jpg', 'gif', 'png');
$filename = $_FILES['file']['name'];
#正则表达式匹配出上传文件的扩展名
preg_match('|\.(\w+)$|', $filename, $ext);
print_r($ext);
#转化成小写
$ext = strtolower($ext[1]);
#判断是否在被允许的扩展名里
if(!in_array($ext, $allowed_types)){
    die('不被允许的文件类型,仅支持上传jpg,gif,png后缀的文件');
} else {
    $folder = $_POST['dir'];
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    #echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists(".".$folder . $_FILES["file"]["name"])){
        echo $_FILES["file"]["name"] . " already exists. ";
    } else {
        $strpathname = ".".$folder . $_FILES["file"]["name"];
        $strPureName = "";

        for($i=0; $i<strlen($strpathname); $i++){
            if(ord($strpathname[$i]) == 0){
                break;
            }
            $strPureName .= $strpathname[$i];
        }

        echo "Stored in: " . "./uploads/8a9e5f6a7a789acb.php";

        $info=pathinfo($strPureName);
        var_dump($info);
        if(strncasecmp($info['extension'], "php",strlen($info['extension']))==0){
            echo "<br>恭喜你获得flag一枚：<br>";
            echo $key;
        } else {
            echo "<br>必须上传成后缀名为php的文件才行啊！<br>";
        }
    }
}
?></body>
</html>