function tableFilter(table_class, input) {
    var filter, table, tr, td, i, txtValue;
    filter = input.value.toUpperCase();
    table = document.getElementsByClassName(table_class)[0];
    tr = table.getElementsByTagName("tr");
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