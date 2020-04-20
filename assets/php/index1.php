

<?php
  if(isset($_POST['Upload-Img']))
  {
    $img = $_FILES['images']['name'];
    $img_loc = $_FILES['images']['tmp_name'];
    $img_folder= $_SERVER['DOCUMENT_ROOT'];
    if(move_uploaded_file($img_loc, $img_folder.$img)) {
      ?>
      <script>
        alert('File successfully saved to ', $_SERVER['DOCUMENT_ROOT'])
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
        <h1>How To Store Files Into Remote Hosting Folder</h1>
        <h2>PHP</h2>
        <br/>
        <input type="file" name="images"/>
        <br/>
        <button type="submit" name="Upload-Img">Click To Upload</button>
        <br/>
      </form>
    </center>
  </body>
</html>