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