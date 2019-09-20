const country = [
  { file1 : "a1" , file2 : "b1", file3 : "c1"},
  { file1 : "a2" , file2 : "b2", file3 : "c2"},
  { file1 : "a3" , file2 : "b3", file3 : "c3"},
  { file1 : "a4" , file2 : "b4", file3 : "c4"}
]
const file1 = document.getElementById("dom-target1");
const contentFile1 = file1.textContent;
const file2 = document.getElementById("dom-target2");
const contentFile2 = file2.textContent;
const file3 = document.getElementById("dom-target3");
const contentFile3 = file3.textContent;
function setContentFile1 (contentFile) {
  $.get(contentFile, function(data, status){
    const json = CSVJSON.csv2json(data, {parseNumbers: true});
    console.log(country)
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
}
setContentFile1(contentFile1)
