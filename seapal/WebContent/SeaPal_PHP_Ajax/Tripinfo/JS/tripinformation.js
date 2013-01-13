function show_trip(title, von, nach, skipper, crew, start, ende, dauer, motor, tankgefuellt, notes, key) {

    if (tankgefuellt == 1) {
        $('#tankgefuellt').checked = true;
    } else {
        $('#tankgefuellt').checked = false;
    }

    $('#triptitle').value = title;
    $('#von').value = von;
    $('#nach').value = nach;
    $('#skipper').value = skipper;
    $('#crew').value = crew;
    $('#start').value = start;
    $('#ende').value = ende;
    $('#dauer').value = dauer;
    $('#motor').value = motor;
    $('#notes').value = notes;
    $('#registernr').value = key;
}

function set_foreign_key(key) {
    $('#registernr').value = key;
}

function Change_Background(tableRow) {
    var nodes = tableRow.getElementsByTagName("td");
    selected_row_key = nodes[0].innerHTML;
    selected_row_fk = nodes[5].innerHTML;
}

function delete_entry() {
    $.ajax({
        type : 'POST',
        url : 'process.php',
        data : {
            'action' : 'delete',
            'key' : selected_row_key,
        },
        dataType : 'json',
        success : function(data) {
            alert(data['msg']);
            $('#dynamic_view').empty();
            $('#dynamic_view').load('entry_table.php?val=' + selected_row_fk);
        }
    });
}

function trip_send(trip) {
    $.ajax({
        type : 'POST',
        url : 'process.php',
        data : {
            'action' : 'insert',
            'registernr' : trip[0],
            'triptitle' : trip[1],
            'von' : trip[2],
            'nach' : trip[3],
            'skipper' : trip[4],
            'crew' : trip[5],
            'start' : trip[6],
            'ende' : trip[7],
            'dauer' : trip[8],
            'motor' : trip[9],
            'tankgefuellt' : trip[10],
            'notes' : trip[11]
        },
        dataType : 'json',
        success : function(data) {
            alert(data['msg']);
            window.location.href = "../triplist_php_ajax/triplist.php?val=" + trip[0];
        }
    });
}