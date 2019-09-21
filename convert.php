<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div id="dom-target1" style="display: none;">
    <?php
      echo htmlspecialchars($target_file1); 
    ?>
  </div>
  <div id="dom-target2" style="display: none;">
    <?php
      echo htmlspecialchars($target_file2); 
    ?>
  </div>
  <div id="dom-target3" style="display: none;">
    <?php
      echo htmlspecialchars($target_file3); 
    ?>
  </div>
    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr id="row">
              <th>Quốc gia</th>
              <th>Chi phí / ch.đổi</th>
              <th>Số lần hiển thị</th>
              <th>Doanh thu</th>
            </tr>
          </thead>
          <tbody id="column"></tbody>
        </table>
      </div>
    </div>
    <script type="text/javascript" src="csv2json.js"></script>
    <script type="text/javascript" src="convert.js"></script>
  </body>
</html>