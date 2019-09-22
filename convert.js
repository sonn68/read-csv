const country = [
  { file1 : "Quốc gia/Vùng lãnh thổ (Địa lý)" , file2 : "Quốc gia", file3 : "Tên quốc gia"},
  { file1 : "Chi phí / ch.đổi" , file2 : "Số lần hiển thị", file3 : "Doanh thu"},
  { file1 : "Hoa Kỳ" , file2 : "Hoa Kỳ", file3 : "United States"},
  { file1 : "Việt Nam" , file2 : "Việt Nam", file3 : "Vietnam"}
]
const file1 = document.getElementById("dom-target1");
const contentFile1 = file1.textContent;
const file2 = document.getElementById("dom-target2");
const contentFile2 = file2.textContent;
const file3 = document.getElementById("dom-target3");
const contentFile3 = file3.textContent;
async function setContent () {
  await setContentFile1(contentFile1, country[0].file1, country[2].file1, country[1].file1,null,appendCountry)
  await setContentFile1(contentFile2, country[0].file2, country[2].file2, country[1].file2)
  await setContentFile1(contentFile3, country[0].file3, country[2].file3, country[1].file3, appendTr)
  
  await setContentFile1(contentFile1, country[0].file1, country[3].file1, country[1].file1,null,appendCountry)
  await setContentFile1(contentFile2, country[0].file2, country[3].file2, country[1].file2)
  await setContentFile1(contentFile3, country[0].file3, country[3].file3, country[1].file3)
}
setContent()

async function setContentFile1 (contentFile, fieldCountry, country, field, appendTr, appendCountry) {
  await $.get(contentFile, function(data, status){
    if( contentFile == contentFile1){
       var dataResult = data.split('\r\n').slice(2).join('\r\n')
    } else {
      var dataResult = data
    }
    if(appendCountry) {
      console.log(country)
      appendCountry(country)
    }
    const json = CSVJSON.csv2json(dataResult, {parseNumbers: true});
    const obj = json.filter(obj => obj[fieldCountry] == country)
    const string = `<td>${obj[0][field]}</td>\n`
    $( "#column" ).append(string)
    if(appendTr) {
      appendTr()
    }
  }); 
}
function appendCountry (country) {
  $( "#column" ).append( `
  <td>${country}</td>\n
`)
}
function appendTr () {
  $( "#column" ).append( `
  <tr></tr>
  `)
}