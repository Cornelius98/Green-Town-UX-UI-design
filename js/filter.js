function tablefilter(columnIndex) {
 var selectBox = document.getElementsByTagName("select")
  [columnIndex];
 var selectedValue = 
 selectBox.value.toLowerCase();
 var table=
  document.getElementById("emp-table");
 var rows=
  table.getElementsByTagName("tr");

 for(var i = 0; i<rows.length; i++) {
   var cells=
    rows[i].getElementsByTagName("td");
   var shouldDisplay = false;

   var cellValue = 
   cells[columnIndex].innerText.toLowerCase();
       if(cellValue===seletedValue,
        selectedValue==="all") {
         shouldDisplay = true;
       }

       rows[i].style.display=shouldDisplay?  "none"
 };


}