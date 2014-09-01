<?php
require ('data.php');
// //for local
// define("DB_HOST", "localhost"); // set database host
// define("DB_USER", "root"); // set database user
// define("DB_PASS", "root"); // set database password
// define("DB_NAME", "db_hdwiki"); // set database name




declare (encoding = 'UTF-8');

// error_reporting(E_ALL);


define('SITE_DOC_URL', "http://wiki.gdepc.cn/index.php?doc-view-");


$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
mysql_query("SET NAMES 'UTF8'");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");


function getDocs()
{
    global $articles;
    global $db;
    $sql = "SELECT did,title,summary FROM w_doc order by lastedit DESC LIMIT 0 , 3";
    $result = mysql_query($sql) or die("查询词条失败");
    $rows = array();

    while ($row = mysql_fetch_array($result)) {
        $article = $articles[rand(0, 29)];
        $rows[] = array(
            "title" => $row['title'],
            "article_url" => SITE_DOC_URL . $row['did'],
            "summary" => $row['summary'],
            "pic_url" => $article->pic_url,
            );

    }
    return $rows;
}


?>