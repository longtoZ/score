var clicked = false;
function sortTable(col_num, id) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById(id);
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

}

function sortTableChar(col_num, id) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(id);
    switching = true;

    dir = "asc";

    while (switching) {

        switching = false;
        rows = table.rows;

        for (i = 1; i < (rows.length - 1); i++) {

            shouldSwitch = false;

            x = rows[i].getElementsByTagName("TD")[col_num];
            y = rows[i + 1].getElementsByTagName("TD")[col_num];

 
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }

            
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

            switchcount++;
        } else {
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }

}