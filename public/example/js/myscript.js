/**
 * Created by Lan Anh on 07/05/2016.
 */

$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});

$("div.alert").delay(3000).fadeOut();

function xacnhanxoa(msg) {
    if (window.confirm(msg)){
        return true;
    }
    return false;

}


