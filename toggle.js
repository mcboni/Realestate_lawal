function myFunction() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("test");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.innerHTML = "VIEW DETAILS";
    y.style.color = "#943333";
   
  } else {
    x.style.display = "block";
     y.innerHTML = "HIDE DETAILS";
      y.style.color = "white";
  }
}


function myFunction2() {
  var x = document.getElementById("myDIV2");
  var y = document.getElementById("test1");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.innerHTML = "VIEW DETAILS";
    y.style.color = "#943333";
  } else {
    x.style.display = "block";
    y.innerHTML = "HIDE DETAILS";
    y.style.color = "white";
  }
}

function myFunction3() {
  var x = document.getElementById("myDIV3");
  var y = document.getElementById("test2");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.innerHTML = "VIEW DETAILS";
    y.style.color = "#943333";
  } else {
    x.style.display = "block";
    y.innerHTML = "HIDE DETAILS";
    y.style.color = "white";
  }
}