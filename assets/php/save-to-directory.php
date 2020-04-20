<!DOCTYPE html>
<html>
  <head>
    <title>PHP File Upload</title>
  </head>
  <body>
    
    <?php
      if(isset($_FILES['userfile'])){
      
        $phpFileUploadErrors = array(
          0 => 'There is no error, the file uploaded with success',
          1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
          2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
          3 => The uploaded file was only partially uploaded,
          4 => 'No file was uploaded',
          6 => 'Missing a temporary folder',
          7 => 'Failed to write file to disk',
          8 => 'A PHP extension stopped the file upload'
        );
        
        $ext_error = false;
        $extensions = array('jpg', 'jpeg', 'gif', 'png'); // Extensions allowed for upload
        $file_ext = explode('.', $_FILES['userfile']['name']);
        $file_ext = end($file_ext);
        if(!in_array($file_ext, $extensions)){
          $ext_error = true;
        }
        
        // If the error of the upload is not equal to zero
        if($_FILES['userfile']['error']){
          echo $phpFileUploadErrors[$_FILES['userfile']['error']];
        }
        elseif($ext_error){
          echo "Invalid file extension";
        }
        else {
          echo "Success. Image has been uploaded.";
        }
        move_uploaded_files($_FILES['uderfile']['tmp_name'], 'C:/Users/marie/Documents/studious/uploads/'.$_FILES['userfile']['name']);
      }
      function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }
    ?>
    
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" name="userfile">
      <input type="submit" value="Upload">
    </form>
  </body>
</html>