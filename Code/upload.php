<html>
    <head>
        <title>Image Upload</title>
        <meta charset = "UTF-8">
        <link rel = "stylesheet" href = "aniframe.css">
        <script src = "upload_dialogue.js"></script>
    </head>
    <body>
        <div class = "dialogue">
                <?php
                    $target_dir = "uploads/";
                    $target_file = $target_dir . "yourimage" . ".JPG";
                    $uploadOk = 1;
                    $renamed = 0;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Existing files are overwritten   

                    // Check file size
                    if ($_FILES["customFile"]["size"] > 500000) {
                        echo "<p>Sorry, your file is too large.</p>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg") {
                        echo "<p>Sorry, only JPG files are allowed.</p>";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "<p>Sorry, your file was not uploaded.</p>";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["customFile"]["tmp_name"], $target_file)) {
                            echo "<p>Your file has been successfully uploaded.</p>";

                        } else {
                            echo "<p>Sorry, there was an error uploading your file.</p>";
                        }
                    }
                 ?>
        </div>
        <div class = "buttondiv">            
            <a id = "uploadButton" href = "frame_page.html">
                <p>View Your Framed Image</p>
            </a>
        </div>
        <script src = "anime-master/anime.js"></script>
        
       
    </body>
</html>   