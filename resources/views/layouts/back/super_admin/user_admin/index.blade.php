@extends('template.back.index')

@section('title')
    Admin
@endsection

@section('content')
    <div class="containter mx-3">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <div class="">
                        <h5 class="m-0 font-weight-bold">Admin Table</h5>
                    </div>
                    <div class="d-flex flex-row">
                        <a href="" class="btn btn-primary mb-2"><i class="fa fa-pencil-alt"></i> Create</a>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
<script>
    $(document).ready(function () {
        getUser();
    });

    function getUser()
    {
        $.ajax({
            url: "/get-user-admin",
            type: "GET",
            success: function(response){
                const user = response.user;
                const row_table = rowTableUser(user);
                const id_table = $('#dataTable');
                dataTable(id_table, row_table);
            },
            error: function(error){
                console.log(error);
            }
        })
    }

    function rowTableUser(user)
    {
        const row = [];
        for(var i = 0; i < user.length; i++) {
            row.push([
                user[i].full_name,
                user[i].username,
                user[i].email,
                user[i].role,
                `<div class="d-flex flex-row">
                    <a href="" class="btn btn-info mr-2"><i class="fa fa-edit"></i></a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="" data-product-id=""><i class="fa fa-trash"></i></button>
                </div>`
            ]);
        }

        return row;
    }

    function dataTable(id_table, row_table) {
        id_table.DataTable().destroy();

        var table = id_table.DataTable({
            dom: '<"d-flex"<"col-sm-6"l><"col-sm-6"f>>' + 
                 '<"d-flex"<"col-sm-12"tr>>' + 
                 '<"d-flex"<"col-sm-6"i><"col-sm-6"p>>',
            buttons: [
                { extend: 'excel', className: 'btn btn-primary btn-sm' },
                { extend: 'print', className: 'btn btn-primary btn-sm' }
            ],
            language: {
                paginate: {
                    previous: '<i class="fas fa-arrow-left"></i>',
                    next: '<i class="fas fa-arrow-right"></i>',
                },
                info: "Showing page _PAGE_ of _PAGES_",
                search: '<i class="fas fa-search"></i>',
                searchPlaceholder: "Search...",
                lengthMenu: "Show _MENU_ entries",
            },
            lengthMenu: [10, 20, 50, 100],
            pageLength: 10,
            order: [],
            stripeClasses: [],
        });

        table.clear().draw();
        table.rows.add(row_table).draw();
    }
</script>
@endpush