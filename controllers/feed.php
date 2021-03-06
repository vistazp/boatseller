<?php

class feed extends controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        require "libs/rss.php";           // это собственно класс
        //require "libs/feed.php";           // это собственно класс
        require "config/conn.inc";          // переменные для открытия базы

        $Rss = new CRss;

        $Rss->Title = "Web Job Board";
        $Rss->Link = "http://www.dotnetnow.com";
        $Rss->Copyright = "© Pozitive Group LLC";
        $Rss->Description = "Best Vacancy on Web Jobs Board";
        $Rss->Category = "Jobs";
        $Rss->Language = "en-us";

        $Rss->ManagingEditor = "admin@dotnetnow.com (Jassy Fishman)";
        $Rss->WebMaster = "admin@dotnetnow.com (Jassy Fishman)";
        $Rss->Query = "SELECT
               post.postid,
                post.title,
                post.jobdescription,
                post.date_pablish
               FROM post
     ORDER by date_pablish desc Limit 0,20";

        $Rss->Open($Server, $DataBase, $Login, $Password);

        $Rss->LastBuildDate = date("r");
// получаем последнюю дату публикации
        $query = "select post.date_pablish
                        FROM post
          ORDER by post.date_pablish desc Limit 0,1";

        $result1 = mysql_query($query)
                or die("FROM blog failed");

        $line = mysql_fetch_array($result1);

        $Date = date("r", strtotime($line[0]));
        mysql_free_result($result1);

        $Rss->LastBuildDate = $Date;
        $Rss->PubDate = $Rss->LastBuildDate;

        $Rss->PrintHeader();
        $Rss->Query();






        while ($line = mysql_fetch_array($Rss->Result)) {   // для каждой записи выведем
           
            $trimmed = trim(substr($line[2], 0, 200), " \t.");
            $strOutput = preg_replace("/\s+\r\n/", "", $trimmed);
            $name = str_replace(array("'", "\""), "", $strOutput);
            $remove = array("#", "*");
            $sendDescription = str_replace($remove, "", $name);

            $Title = $line[1];
            $Description = $sendDescription.'...';
            $Link = "http://www.dotnetnow.com/jobs/view/" . $line[0];
            $PubDate = date("r", strtotime($line[3]));
            $Category = "Job";
            $Rss->PrintBody($Title, $Link, $Description, $Category, $PubDate);
        }
        $Rss->PrintFooter();
        $Rss->Close();
    }

}
