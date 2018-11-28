function CountRows() {
    var rowCount = 0;
    var table = document.getElementById("myTable");
    var rows = table.getElementsByTagName("tr")
    for (var i = 0; i < rows.length; i++) {
        if (rows[i].getElementsByTagName("td").length > 0) {
            rowCount++;
        }
    }
    // alert("You have" + " " + rowCount + " " + "customers");
    document.getElementById("display").innerHTML = rowCount ;
}

window.onload = CountRows;