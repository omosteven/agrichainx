<?php
session_start();
include('../agricdb.php');
include('../hashing.php');
if(isset($_POST['createPost'])){
    $val = 1;
    $date = gmdate('M d Y G:i:s');
    $content = mysqli_real_escape_string($db,$_POST['postContent']);
    $title = mysqli_real_escape_string($db,$_POST['postTitle']);
    
    $file = file_get_contents($_FILES['headerFile']['tmp_name']);
    $size = $_FILES['headerFile']['size'];
    $fileTypeExt = substr($_FILES['headerFile']['type'],6);
    //echo $_FILES['headerFile']['type'];
    //$plainText = $date.strval($_POST['postTitle']);
    $linkUrl = preg_replace("/[^a-zA-Z-0-9]/","_",$title);
    $linkUrl = substr($linkUrl,0,25);
    $newFile = $linkUrl.'_'.strval($date);
    $newFile = preg_replace("/[^a-zA-Z-0-9]/","_",$newFile);

    $timeDecode = linkUrlEncode($date);
    $linkUrl = $newFile.'&t='.$timeDecode;
    $linkUrl = preg_replace("/[^a-zA-Z-0-9]/","_",$linkUrl);

    $newFile = substr($newFile,0,35);
    $newFile = $newFile.'.'.$fileTypeExt;
    $newFile = mysqli_real_escape_string($db,$newFile);

    $createNewFile = fopen("blog-contents/$newFile",'w');
    $fileTypeExt = $_FILES['headerFile']['type'];
    fwrite($createNewFile,$file);
    $linkUrl = mysqli_real_escape_string($db,$linkUrl);
    if($_POST['type'] == "news"){
        $type = 'News';
    }else if($_POST['type'] == "article"){
        $type = 'Article';
    }else if($_POST['type'] == "event"){
        $type = 'Event';
    }else{
        $type = 0;
    }
    


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
            FROMWHO,
            URL,
            TYPE
        ) 
        VALUES (
            '$content',
            '$title',
            '$newFile',
            '$fileTypeExt',
            '$val',
            '$val',
            '$date',
            '$val',
            '$_SESSION[agrichainxmail]',
            '$linkUrl',
            '$type'
        )
            ");
        if($insertPost){
            echo "Done.....posting....redirecting";
            echo "<script>
            alert('Successful');
            location.replace('index.php');
            </script>";
        }else{
            echo "<script>
            alert('Sorry, an error occured');
            location.replace('publish.php');
            </script>";
    }
    }
?>