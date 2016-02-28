<?php

function CreateConnection(){
    return mysqli_connect("localhost" , "root" , "","web");
}
//mysql_select_db("web");
?>