const div = document.getElementById("dom-target");
const myData = div.textContent;
$.get(myData, function(data, status){
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