<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload page</title>
  </head>
  <body>
    <form method="post" action="upload.php">
        <label>Add a title:</label>
        <input type="text" name="a_title" class="form-control-file" placeholder="title here...">
        <br>
        <textarea class="text" name="a_text" rows="10" placeholder="Input text here..."></textarea>
        <br> <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-primary" id="button"><a href="index.php" id="button">Go back</a></button>
    </form>
  </body>
</html>
