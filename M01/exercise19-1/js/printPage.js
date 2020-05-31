window.onload = function(){
    var today = new Date();
    var year = today.getFullYear();
    document.getElementById("year").innerHTML = year;
}

function printPage(){
    alert("print page");
    window.print();
}
