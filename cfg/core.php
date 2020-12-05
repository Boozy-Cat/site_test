<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

// MYSQL
class MyDB
{
    var $dbLogin = "root"; // Login to database
    var $dbPass = "Gingertail0z_1"; // Password to database
    var $db = "experimentalsite"; // Name database for site
    var $dbHost = "localhost";

    var $link;
    var $query;
    var $err;
    var $result;
    var $data;
    var $fetch;

    function connect()
    {
        $this->link = mysql_connect($this->dbHost, $this->dbLogin, $this->dbPass);
        mysql_select_db($this->db);
        mysql_query('SET NAMES utf8');
    }
    function close()
    {
        mysql_close($this->link);
    }
    function run($query)
    {
        $this->query = $query;
        $this->result = mysql_query($this->query, $this->link);
        $this->err = mysql_err();
    }
    function row()
    {
        while($this->data = mysql_fetch_assoc($this->result))
        {
        $this->fetch = $this->data;
        return $this->fetch;
        }
    }
    function stop()
    {
        unset($this->data);
        unset($this->result);
        unset($this->fetch);
        unset($this->err);
        unset($this->query);
    }
    
}