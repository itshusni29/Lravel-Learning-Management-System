@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Course</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Course</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Add New Course</h6>

                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf

                    <div class="row">
                        <!-- Bagian Kiri -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Course Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Enter course title" required>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Course Category</label>
                                <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" placeholder="Enter course category" required>
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Course Level</label>
                                <input type="text" class="form-control" name="level" id="level" value="{{ old('level') }}" placeholder="Enter course level (e.g., Beginner, Intermediate, Advanced)" required>
                            </div>

                            <div class="mb-3">
                                <label for="duration" class="form-label">Course Duration (in minutes)</label>
                                <input type="number" class="form-control" name="duration" id="duration" value="{{ old('duration') }}" placeholder="Enter course duration" required>
                            </div>
                        </div>

                        <!-- Bagian Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="total_lessons" class="form-label">Total Lessons</label>
                                <input type="number" class="form-control" name="total_lessons" id="total_lessons" value="{{ old('total_lessons') }}" placeholder="Enter total lessons" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Course Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter course description">{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="trainer" class="form-label">Trainer</label>
                                <input type="text" class="form-control" name="trainer" id="trainer" value="{{ old('trainer') }}" placeholder="Enter trainer name" required>
                            </div>

                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Course Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>						 
</div>
@endsection
