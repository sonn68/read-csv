<!DOCTYPE html>
<html>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <div>
        <label>Name file</label>
        <input type="text" name="nameFile"/>
      </div>
      <div>
        <label>Time Start</label>
        <input type="date" name="timeStart"/>
      </div>
      <div>
        <label>Time Finish</label>
        <input type="date" name="timeFinish"/>
      </div>
      <input type="submit" value="Upload" name="submit" />
    </form>
  </body>
</html>