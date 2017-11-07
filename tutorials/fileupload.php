<?php 

    //step 1: get the file info
    $filename = basename($_FILES["fileupload"]["name"]);
    //step 3: get file info

    //new file in server e.g. profile/abc.gif   
    $getFileType = pathinfo($filename,PATHINFO_EXTENSION);
    $checkfilesize = $_FILES["fileupload"]["size"];
    $newfilename = "profile/".$_POST['user'].".".$getFileType;
    //step 3: check for file size so not too big

    if($checkfilesize > 1000000) //1mb
    {
        echo "<script>alert('Picture too big');";
        die("window.history.go(-1);</script>");
    }
    //step 4: check for the picture type correct or not 

    //step 5: if everything is ok then upload the profile picture to the server

?>