@extends('template.back.index')

@section('title')
    Edit User
@endsection

@push('page_css')
    <style>
        input::-ms-reveal,
        input::-ms-clear {
        display: none;
        }
    </style>
@endpush


@section('content')
    <div class="containter mx-3">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-start">
                    <h5 class="m-0 font-weight-bold">Edit User</h5>
                </div>
                <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data" class="mt-5">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name" value="{{ $user->full_name }}" class="form-control">
                                @error('full_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" value="{{ $user->username }}" class="form-control" autocomplete="username">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="{{ $user->email }}" class="form-control">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="" >Select Role</option>
                                    @foreach ($roles as $role)
                                        <option {{ $role === $user->role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" autocomplete="new-password" aria-describedby="password-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="password-group">
                                            <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="retype_password">Retype Password</label>
                                <div class="input-group">
                                    <input type="password" name="retype_password" id="retype_password" class="form-control" autocomplete="new-password" aria-describedby="retype_password-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="retype_password-group">
                                            <i class="fa fa-eye" id="toggleRetypePassword" style="cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('retype_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Profile Image</label>
                                <div class="pt-2" id="image_container" style="cursor: pointer;">
                                    <img id="preview_image" src="{{ asset($user->url ? 'storage/'.$user->url : 'assets/images/empty-image.png') }}" style="height: 150px; width: 150px"/>
                                    <input hidden type="file" id="image" name="image">
                                </div>
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <a href="{{ route('user.index') }}" class="btn btn-danger px-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection

@push('page_js')
    <script>
        document.getElementById('image_container').addEventListener('click', function() {
            document.getElementById('image').click();
        });

        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview_image').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        $('#togglePassword').on('click', function() {
            const passwordField = $('#password');
            const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });

        $('#toggleRetypePassword').on('click', function() {
            const retypePasswordField = $('#retype_password');
            const type = retypePasswordField.attr('type') === 'password' ? 'text' : 'password';
            retypePasswordField.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    </script>
@endpush