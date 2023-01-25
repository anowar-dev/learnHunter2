<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Hey,{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mb-5">
            <div class="card mx-auto col-6">
                <h5 class="bg-light py-3 fw-bold">Add new Students</h5>
                    <a href="{{ route('students.index') }}" class="btn btn-danger ms-auto">All Students</a>
                    @if (session()->has('success'))
                      <strong class="text-success">{{ session()->get('success') }}</strong>  
                    @endif
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Class Name <span class="text-danger">*</span></label>
                          <select name="class_id" class="form-control"  required>
                            @foreach ($classes as $row)
                                <option value="{{ $row->id }}">{{ $row->class_name }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control $@error('name') is-invalid @enderror" name="name" placeholder="Student Name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Roll <span class="text-danger">*</span></label>
                            <input type="number" class="form-control $@error('roll') is-invalid @enderror" name="roll" placeholder="Student Roll" value="{{ old('roll') }}" required>
                            @error('roll')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Phone <span class="text-danger">*</span></label>
                            <input type="number" class="form-control $@error('phone') is-invalid @enderror" name="phone" placeholder="Student Phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control $@error('email') is-invalid @enderror" name="email" placeholder="Student Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>
