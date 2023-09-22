<pre>
    <?php
    var_dump($_FILES["file"]["type"]);
    var_dump(str_contains($_FILES["file"]["type"], "x-msdownload"));    

    
    if(!str_contains($_FILES["file"]["type"], "x-msdownload") || !str_contains($_FILES["file"]["type"], "javascript")){

        $tempPath = $_FILES["file"]["tmp_name"];
        $uploadPath = "../../uploads/".basename($_FILES["file"]["name"]);
    
        move_uploaded_file($tempPath, $uploadPath);

    }else{
        header("location: ../../index.html");
    }

    ?>
</pre>