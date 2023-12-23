 //<script src="script.js"></script>
window.addEventListener("load",()=>{
 const form =document.getElementById("multi-step-form");
  const formContainerBox = document.getElementById("form-container-box");
  const step2 =document.getElementById("step2");
  const step3 =document.getElementById("step3");
  const stepGroup1 = document.getElementById("step-group-1");
  const stepGroup2 = document.getElementById("step-group-2");
  const stepGroup3 = document.getElementById("step-group-3");
  const stepNext1 = document.getElementById("step-next-1");
  const stepNext2 = document.getElementById("step-next-2");
  const stepNext3 = document.getElementById("step-next-3");
  const stepPrev1 = document.getElementById("step-prev-1");
  const stepPrev2 = document.getElementById("step-prev-2");
  const sucessBox =document.getElementById("sucess-box");
  const ResetBtn =document.getElementById("reset-btn")

  form.addEventListener("submit", (e)=>{
    e.preventDefault();
  });
  stepNext1.addEventListener("click",()=>{
    stepGroup1.style.display ="none";
    stepGroup2.style.display ="block";
    step2.classList.add("active");
  });

  stepNext2.addEventListener("click",()=>{
    stepGroup2.style.display ="none";
    stepGroup3.style.display ="block";
    step3.classList.add("active");
  });
   stepPrev1.addEventListener("click",()=>{
    stepGroup1.style.display ="block";
    stepGroup2.style.display ="none";
    step2.classList.remove("active");
  });

   stepPrev2.addEventListener("click",()=>{
    stepGroup3.style.display ="none";
    stepGroup2.style.display ="block";
    step3.classList.remove("active");
  });
   
  stepNext3.addEventListener("click",()=>{
    formContainerBox.style.display="none";
    sucessBox.style.display="flex";
  
    });
  ResetBtn.addEventListener("click",()=>{
    sucessBox.style.display="none";
    formContainerBox.style.display="none";
    window.location.reload();
  })

  
});




// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}



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
