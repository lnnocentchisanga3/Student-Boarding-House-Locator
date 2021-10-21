function getStreet(value) {
  /*alert(value);*/
}



function getDetails() {
  var price = document.getElementById("amount").innerHTML;
  var bhname = document.getElementById("bhName").innerHTML;

 document.getElementById("priceDetails").value = price;
 document.getElementById("bh").value = bhname;
  /*alert(price);*/
}

$(window).on("load", function () {
  $("#circle").fadeOut("slow");
});


// setInterval(function() {
//    document.onreadystatechange = function() {
//     if (document.readyState !== "complete") {
//         document.querySelector("body").style.visibility = "hidden";
//         document.querySelector("body").style.backgroundcolor = "white";
//         document.querySelector("#circle").style.visibility = "visible";
//     } else {
//         document.querySelector("#circle").style.display = "none";
//         document.querySelector("body").style.visibility = "visible";
//     }
// };
//  },10000);

function getDisplay() {
   var para = document.getElementById("paraTest").innerHTML;
  document.getElementById('finishPayDisplay').innerHTML = para;
  /*window.alert(para);*/
}


/*Search by Filtering tables*/

function myFilters() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
/*The search ends here*/