$(document).ready(function() {
 $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        scrollY: "75vh",
        scrollX: true,
        scrollCollapse: true,
        "ajax": {
            "url": "/users",
            "data": function (d) {
            }
        },
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }]

    });
});
