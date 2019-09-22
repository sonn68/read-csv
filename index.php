<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="block-file1">
        Select File 1 Compass:
        <input type="file" name="uploadFile1" id="fileToUpload" />
        <div>
          <label>Time Start file 1</label>
          <input type="date" name="timeStart1"/>
        </div>
        <div>
          <label>Time Finish file 1</label>
          <input type="date" name="timeFinish1"/>
        </div>
      </div>
      <div class="block-file2">
        Select File 2 Excel2.csv:
        <input type="file" name="uploadFile2" id="fileToUpload" />
      </div>
      <div class="block-file3">
        Select File 3 fb.csv:
        <input type="file" name="uploadFile3" id="fileToUpload" />
      </div>
      <div class="submit">
        <input type="submit" value="Upload" name="submit" />
      </div>
    </form>
  </body>
</html>