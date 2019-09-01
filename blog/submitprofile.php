<?php
session_start();
include('../agricdb.php');
echo 'hey';
if(isset($_POST['createPost'])){
    $val = 1;
    $date = gmdate('Y-m-d G:i:s');
    //$content = msyqli_real_escape_sequence($db,$_POST['postContent']);
    //$title = msyqli_real_escape_sequence($db,$_POST['postTitle']);
    $content = $_POST['postContent'];
    $title = $_POST['postTitle'];
    $insertPost = mysqli_query($db,"INSERT INTO blogpost
        (
            CONTENT,
            TITLE,
            HEADERFILE,
            HEADERTYPE,
            EXTRAFILE,
            EXTRATYPE, 
            POSTEDDATE,
            PERMISSION,
            FROMWHO
        ) 
        VALUES (
            '$content',
            '$title',
            '$val',
            '$val',
            '$val',
            '$val',
            '$date',
            '$val',
            '$_SESSION[agrichainxmail]'
        )
            ");
        if($insertPost){
            echo "Done.....";
        }else{
            echo "Sorry, errorgg";
    }
    }
?>