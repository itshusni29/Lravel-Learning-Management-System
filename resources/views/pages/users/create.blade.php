@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add User</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Add User</h6>
        <p class="text-muted mb-3">Please fill out the form below to add a new user.</p>

        <!-- Display Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form to create/edit user -->
        <form id="userForm" method="POST" action="{{ route('users.store') }}" novalidate="novalidate">
            @csrf

            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input id="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" type="text" value="{{ old('nik') }}" required>
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input id="section" class="form-control @error('section') is-invalid @enderror" name="section" type="text" value="{{ old('section') }}" required>
                @error('section')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input id="department" class="form-control @error('department') is-invalid @enderror" name="department" type="text" value="{{ old('department') }}" required>
                @error('department')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input id="division" class="form-control @error('division') is-invalid @enderror" name="division" type="text" value="{{ old('division') }}" required>
                @error('division')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_of_join" class="form-label">Date of Join</label>
                <input id="date_of_join" class="form-control @error('date_of_join') is-invalid @enderror" name="date_of_join" type="date" value="{{ old('date_of_join') }}" required>
                @error('date_of_join')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation</label>
                <input id="occupation" class="form-control @error('occupation') is-invalid @enderror" name="occupation" type="text" value="{{ old('occupation') }}" required>
                @error('occupation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" type="date" value="{{ old('date_of_birth') }}" required>
                @error('date_of_birth')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sex" value="male" {{ old('sex') == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sex" value="female" {{ old('sex') == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label">Female</label>
                    </div>
                    
                </div>
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

