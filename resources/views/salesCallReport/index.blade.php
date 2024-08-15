@extends('layouts.layout')

@section('title')
    Sales Call Report
@endsection

@section('content')
    <div class="shadow-lg container border rounded-3 p-3 mt-5" style="max-width: 500px; width: 100%">
        <div class="text-center mb-3">
            <span class="text-white fw-bold fs-3">Sales Call</span>
            <h3>Sales Call</h3>
            </div>
                <div class="mb-2">
                <label for="name" class="form-label">Name</label><br>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-2">
                <label for="school_name" class="form-label">School Name</label><br>
                <input type="text" class="form-control" id="school_name" name="school_name">
            </div>
            <div class="mb-2">
                <label for="regency" class="form-label">Regency</label><br>
                <input type="text" class="form-control" id="regency" name="regency">
            </div>
            <div class="mb-2">
                <label for="teacher_name" class="form-label">Teacher Name</label><br>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name">
            </div>
            <div class="mb-2">
                <label for="phone" class="form-label">Phone</label><br>
                <input type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-2">
                <label for="audience" class="form-label">Audience</label><br>
                <input type="number" class="form-control" id="audience" name="audience">
            </div>
            <div class="mb-2">
                <label for="requirement" class="form-label">Requirement</label><br>
                <textarea type="text" class="form-control" id="requirement" name="requirement" rows="5"></textarea>
            </div>
            <div class="mb-2">
                <label for="image" class="form-label">Upload Image</label><br>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            </div>
            <div class="mb-2">
                <img id="image-preview" src="{{ asset('assets/images/empty-image.png') }}" alt="Image Preview" style="max-width: 150px; max-height: 150px; border: 1px solid #ddd; padding: 5px;">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Submit</button>   
        </div>
    </div>
@endsection

@push('page_js')
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('image-preview');
                output.src = reader.result;
                // output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush