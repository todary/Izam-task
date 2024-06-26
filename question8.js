var table = document.getElementById('tabel1')
var rows = table.rows
for (var i=0; i< rows.length; i++){
    var row = rows[i];
    if (row.cells.length < 3 ) {
        continue;
    }

    var temp = row.cells[1];
    row.cells[1] = row.cells[2];
    row.cells[2] = temp;
};
