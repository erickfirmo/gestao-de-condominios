function tableFilter(table_class, input) {
    var filter, table, tr, tds, has_data, i, txtValue;
    filter = input.value.toUpperCase();
    table = document.getElementsByClassName(table_class)[0];
    tr = table.getElementsByTagName("tr");
    for (i = 1; i < tr.length; i++) {
        tds = tr[i].getElementsByTagName("td");
        for (j = 0; j < tds.length; j++) {
            if (tds[j]) {
                txtValue = tds[j].textContent || tds[j].innerText;
                if(has_data != 'y')
                {
                    has_data = txtValue.toUpperCase().indexOf(filter) > -1 ? 'y' : 'n';
                }
            }
        }
            tr[i].style.display = (has_data == 'y') ? "" : "none";
            has_data = false;
    }
}