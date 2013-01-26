<?php
include("connect.php");
/*if (isset($_POST['text']))
{
    $text = sanitizeString($_POST['text']);
    $text = preg_replace('/\s\s+/', ' ', $text);

    $query = "SELECT * FROM message WHERE user='$user'";
    if (mysql_num_rows(queryMysql($query)))
    {
        queryMysql("UPDATE message SET text='$text' where user='$user'");
    }
    else
    {
        $query = "INSERT INTO profiles VALUES('$user', '$text')";
        queryMysql($query);
    }

}
else
{
    $query  = "SELECT * FROM profiles WHERE user='$user'";
    $result = queryMysql($query);

    if (mysql_num_rows($result))
    {
        $row  = mysql_fetch_row($result);
        $text = stripslashes($row[1]);
    }
    else $text = "";
}

$text = stripslashes(preg_replace('/\s\s+/', ' ', $text));
*/
$text=$_POST['text'];
$id=$_SESSION['id'];
$query =    "INSERT INTO `message` (
                `id`,
                `text`,
                `from`,
                `time_enter` )
            VALUES (
                '',
                '$text',
                '$id',
                NOW() )";
echo $query;
mysql_query( $query ) or die(mysql_error()); 
?>
