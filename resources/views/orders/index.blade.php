@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered" id="order-table" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Order Id</th>
                <th>Customer Name</th>
                <th>Package Name</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>
                <th>id</th>


            </tr>
            </thead>
        </table>
    </div>


    <script>
        $(document).ready(function() {
           $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                scrollY: "75vh",
                scrollX:        true,
                scrollCollapse: true,
                "ajax": {
                    "url": "/orders",
                    "data": function (d) {
                    }
                },

                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'order_id', name: 'order_id'},
                    {data: 'user.name', name: 'name'},
                    {data: 'package.package_name', name: 'package_name'},
                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'}


                ]
            });
        });
    </script>
@endsection

