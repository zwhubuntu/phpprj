<?php
$filename = 'x';
$combination = trim(file_get_contents($filename));
extract($_GET);

if (!empty($attempt))
{
    #$combination = trim(file_get_contents($filename));
    echo "combination:".$combination."<br>";
    echo "attempt:".$attempt."<br>";
    echo "filename:".$filename."<br>";
    if ($attempt === $combination)
    {
        echo "<p>Congratulation.Key is:KEY{xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx}</p>";
    }
    else
    {
        echo "<p>Incorrect!</p>";
    }
}
?>