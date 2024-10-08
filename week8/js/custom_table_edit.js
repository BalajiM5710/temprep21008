$(document).ready(function() {
    $('#example-table').Tabledit({
        url: 'live_edit.php',
        columns: {
            identifier: [0, 'id'], // Assuming 'id' is the primary key column
            editable: [[1, 'name'], [2, 'age'], [3, 'gender']]
        },
        onSuccess: function(data, textStatus, jqXHR) {
            console.log('Edit successful');
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('Edit failed');
        }
    });
});
