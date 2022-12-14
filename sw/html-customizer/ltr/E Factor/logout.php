<?php
session_start();
include("include/config.php");

if(session_destroy()){
    header("location:login.php");
}else{
    header("location:index.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}
?>