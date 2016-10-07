<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/3
 * Time: 12:37
 */
$dirname="j:/mywork";
if(is_dir($dirname)){
    echo "dir already exists!";
}else{
    $result=mkdir($dirname);
    if($result){
        echo "create dir successfully!";
    }else{
        echo "fail to create dir!";
    }
}
echo "\n=================================================\n";
$filename="j:/mywork/test.txt";
$filedh=fopen($filename,"w+");
$somecontent=<<<INSERT
a test file for the file/directory operation
INSERT;
$write=fwrite($filedh,$somecontent);
if ($write===false) {
    echo "fail to write something";
}else{
    echo "you have written".$somecontent."\n congra! YOU have written successfully!";
}
fclose($filedh);

echo "\n==================================================\n";
$handle=opendir($dirname);
while(false!==($file=readdir($handle))){
    if($file!="."&& $file!=".."){
        $dirnew=$dirname."/".$filename;
        if (is_dir($dirnew)){
            $size_zip=countDirSize($dirnew);
            $size_zip=get_real_size($size_zip);
            echo "directory name:".$file."\t\t dir type: folder\t\t size:".$size_zip."\n\n";
        }else{
            echo "file name:".$file."\t file_type:".filesize($dirnew)."\t\t filecontent:".
                file_get_contents("j:/mywork/".$file)."\n\n";
        }
    }
}
?>