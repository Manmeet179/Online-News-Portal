<?php


$localhost="localhost";
$user="root";
$password="";
$db="news-site";


$conn=mysqli_connect($localhost,$user,$password,$db);
if(!$conn)
{
    ?>
    <script>
        alert("Unsuccess");
    </script>
    <?php
}
?>