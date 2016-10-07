<form name="form1" method="post" action="" enctype="multipart/form-data">
    upload your image:<input type="file" name="file" id="file"/>
    <input type="submit" name="upload" id="button" value="submit"/>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/2
 * Time: 12:29
 */
if (isset($_POST["upload"]))
{
    if(($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")
        ||($_FILES["file"]["type"]=="image/pjpeg"))
    {
        if ($_FILES["file"]["error"])
        {
            echo "Return code:" . $_FILES["file"]["error"] . "<br/>";
        }
        else
        {
            echo "<table width=100%><tr><td>";
            echo "filename:" . $_FILES["file"]["name"] . "<br/>";
            echo "filetype:" . $_FILES["file"]["type"] . "<br/>";
            echo "filesize:" . ($_FILES["file"]["size"] / 1024) . "<br/>";
            echo "filetmpname:" . $_FILES["file"]["tmp_name"] . "<br/>";
            if (file_exists("uploadfile/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . "already exists.";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploadfile/" . $_FILES["file"]["name"]);
                echo "file uploaded" . "uploadfile/" . $_FILES["file"]["name"];
            }
        }
        echo "</td><td></td>";
        echo "<tr><td colspan\"2\"><img src=" . "uploadfile/" .
            $_FILES["file"]["name"] . "width=150>";
        echo "</td></tr></table>";
    }
}
?>