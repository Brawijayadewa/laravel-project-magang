@extends('template.back.index')

@section('title')
    User Create
@endsection

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
                <div class="">
                    <h5 class="m-0 font-weight-bold">User Create</h5>
                </div>
            </div>
        </div>
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" id="full_name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="retype_password">Retype Password</label>
                            <input type="password" class="form-control" id="retype_password">
                        </div>
                        <div class="form-group">
                            <label for="role">Select Role</label><br>
                            <select class="form-control" aria-label="Default select example" id="role">
                                <option selected>Admin</option>
                                <option value="1">Sales</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <h1>coba</h1>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
