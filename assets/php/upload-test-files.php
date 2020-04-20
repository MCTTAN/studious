

<?php
  if(isset($_FILES['file'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $upload_folder = 'upload-test-files/';
      
    if(move_uploaded_file($file_tmp, $upload_folder.$file_name)) {
      ?>
      <script>
        alert('File successfully saved')
      </script>
      <?php
    }
    else {
      ?>
      <script>
        alert('Something went wrong')
      </script>
      <?php
    }
  }
?>

<!DOCTYPE html>
<html>
  <body>
    <center>
      <form method="post" enctype="multipart/form-data">
        <br>
        <br>
        <input type="file" name="file">
        <br>
        <br>
        <input type="submit" value="upload">
      </form>
    </center>
  </body>
</html>