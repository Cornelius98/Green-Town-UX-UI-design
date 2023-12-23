// get unique values for the desired column

//{3 : ["M", "F", "OTHERS"], 6 : ["2022", "2023", "2024", "2025", "2026"], 7 : []}

function getUniqueValuesFromColumn() {

  var unique_col_values_dict = {}

  allFilters = document.querySelectorAll(".table-filter")
  allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute("col_index");
   // alert(col_index)
    const rows = document.querySelectorAll("#emp-table > tbody > tr")

      rows.forEach((row) => {
    console.log(row.querySelector("td:nth-child("+col_index+")"));
    //if thecell value is already present in the array
    if (unique_col_values_dict) {

      // if cell value is already present in the arry
      if (unique_col_values_dict[col_index].includes(cell_value)) {
      //alert(cell_value + " is already present in the array : " + unique_col_values_dict[col_index])
    

  }else { 
    unique_col_values_dict[col_index].push(cell_value)
   // alert("Array after adding the cell value : " + unique_col_values_dict[col_index])
  }

}else {
  unique_col_values_dict[col_index] = new Array(cell_value)
}

      });

 
  });

  for(i in unique_col_values_dict) {
    //alert("Column index : " + i + " has Unique values : \n" + unique_col_values_dict[i];
  }

  updateSelectOptions(unique_col_values_dict)


};

// add <option> tags to the desired columns based on the unique values

function updateSelectOptions(unique_col_values_dict) {
 allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col_index');

    unique_col_values_dict[col_index].forEach((i) => {
      filter_i.innerHTML = filter_i.innerHTML + '\n<option value="${i}">${i}</option>'

        }); 
    });
};

// Create filter_rows() function


