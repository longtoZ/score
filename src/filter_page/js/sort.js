var clicked = false;
function sortTable(col_num) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.querySelector(".search-table");
    switching = true;

    while (switching) {

        switching = false;
        rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++) {

            shouldSwitch = false;

            x = rows[i].getElementsByTagName("TD")[col_num];
            y = rows[i + 1].getElementsByTagName("TD")[col_num];

            if (!clicked) {
                if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
                    (rows[0].getElementsByTagName("th")[col_num]).innerHTML = "ĐIỂM NV" + (col_num-2).toString() + "  ⇩"
                    shouldSwitch = true;
                    break;
                }
            } else {
                if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
                    rows[0].getElementsByTagName("th")[col_num].innerHTML = "ĐIỂM NV" + (col_num-2).toString() + "  ⇧"
                    shouldSwitch = true;
                    break;
                }
            }
            
        }
        if (shouldSwitch) {

            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }


    if (!clicked) {
        clicked = true;
    } else {
        clicked = false
    }

    for (i = 1; i < rows.length; i++) {
        rows[i].getElementsByTagName("TD")[0].innerHTML = i;
    }
}