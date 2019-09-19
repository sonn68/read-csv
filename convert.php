<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">           
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr id="row"></tr>
      </thead>
      <tbody id="column">
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript" src="csv2json.js"></script>
<script>
  $.get("content.php", function(data, status){
    const json = CSVJSON.csv2json(data, {parseNumbers: true});
    const arrKey = Object.keys(json[0])
    arrKey.map(key => document.getElementById("row").innerHTML += `
        <th>${key}</th>\n
    `)
    let column = document.getElementById("column")
    json.map(obj => {
      column.innerHTML += `
        <tr>\n
      `
      let stringTd = ''
      arrKey.map(key => {
        stringTd += `
          <td>${obj[key]}</td>\n
        `
      })
      column.innerHTML += stringTd
      column.innerHTML += `
        </tr>\n
      `
    })

  });   
</script>
</body>
</html>
