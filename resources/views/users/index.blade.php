@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped table-bordered" id="users-table" style="width:100%">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>address</th>
            <th>address</th>
            <th>address</th>
            <th>address</th>
            <th>address</th>
        </tr>
        </thead>
    </table>
</div>


    <script>
        $(document).ready(function() {
            sell_table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                scrollY: "75vh",
                scrollX:        true,
                scrollCollapse: true,
                "ajax": {
                    "url": "/users",
                    "data": function (d) {
                    }
                },
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }],
                columns: [
                    {data: '0', name: '0'},
                    {data: '1', name: 'name'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                    {data: '2', name: 'email'},
                ]
            });
        });
    </script>
@endsection
