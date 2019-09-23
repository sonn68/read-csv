<!DOCTYPE html>
<html>
  <head>
  <title>Report Tool</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  </head>
  <body>
  <div class="container form">
    <div class="textReport">REPORT TOOL</div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="fileToUpload">Select File 1</label>
          <input type="file" name="uploadFile1" id="fileToUpload" class="form-control-file"  required/>
        </div>
        <div class="form-group col-md-4">
          <label for="fileToUpload">Select File 2</label>
          <input type="file" name="uploadFile2" id="fileToUpload" class="form-control-file"  required/>
        </div>
        <div class="form-group col-md-4">
          <label for="fileToUpload">Select File 3</label>
          <input type="file" name="uploadFile3" id="fileToUpload" class="form-control-file"  required/>
        </div>
      </div>
      <div class="form-group">
        <label for="nameFile">Tên File:</label>
        <input type="text" name="nameFile" id="nameFile" class="form-control" required/>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="timeStart">Time Start:</label>
          <input type="date" name="timeStart" id="timeStart" class="form-control" required/>
        </div>
        <div class="form-group col-md-6">
          <label for="timeFinish">Time Finish:</label>
          <input type="date" name="timeFinish" id="timeFinish" class="form-control" required />
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Xác nhận</button>
    </form>
  </div>
  </body>
</html>