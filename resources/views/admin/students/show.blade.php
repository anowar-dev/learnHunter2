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
        <div class="row">
            <div class="card mx-auto col-lg-10">
                <h5 class="bg-light py-3 fw-bold"> Students Details</h5>
                <table class="table table-responsive table-bordered">
                    <a href="{{ route('students.index') }}" class="btn btn-primary ms-auto">Back to Home</a>

                    <thead class="bg-light">
                        <th>Student Id</th>
                        <th>Class Name</th>
                        <th>Studet Name</th>
                        <th>Rool No.</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->class_id }}</td>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->roll }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->email }}</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>
