import { fieldCountry, fieldData, nameCountry } from './config.js'

//get url file
const urlFile1 = $('#dom-target1')[0].textContent
const urlFile2 = $('#dom-target2')[0].textContent
const urlFile3 = $('#dom-target3')[0].textContent

async function main(){
  const file1 = await dataFile(urlFile1)
  const file2 = await dataFile(urlFile2)
  const file3 = await dataFile(urlFile3)
  pushDataToTable(file1,file2,file3)
}
main()

async function dataFile (urlFile) {
  let data = await $.get(urlFile)
  // cat 2 line dau
  if(urlFile === urlFile1){
    data = data.split('\r\n').slice(2).join('\r\n')
  }
  //convert JSON
  data = CSVJSON.csv2json(data, {parseNumbers: true})
  return data
}

function pushDataToTable (file1,file2,file3) {
  nameCountry.map(nameCountry => {
    //Loc truong theo ten Country
    const filterFile1 = file1.filter(value => value[fieldCountry.file1] === nameCountry.file1)
    const filterFile2 = file2.filter(value => value[fieldCountry.file2] === nameCountry.file2)
    const filterFile3 = file3.filter(value => value[fieldCountry.file3] === nameCountry.file3)

    //Ten Quoc Gia theo file 2
    appendColumn(nameCountry.file2)
    fieldData.file1.map(field => {
      //Lay ra data cac truong o file 1
      appendColumn(filterFile1[0][field])
    })

     //Lay ra data truong o file 2
    appendColumn(filterFile2[0][fieldData.file2])

     //Lay ra data truong o file 2
    appendColumn(filterFile3[0][fieldData.file3])

    //ngat row table
    $( "#column" ).append( `
      <tr></tr>
    `)
  })
}
function appendColumn(data){
  $( "#column" ).append( `
    <td>${data}</td>\n
  `)
}