<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- @dd($teachers); --}}
    <!-- Container to center the table on the page -->
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <!-- Table -->
    <table class="table table-bordered table-striped" style="width: 80%; max-width: 600px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>TP</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop to display students -->
            @foreach ($teachers as $teacher)

            <tr>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->tp}}</td>

                <td>
                    <!-- Edit Button (routes to edit page) -->
                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <!-- Delete Button (opens confirmation modal or submits form) -->
                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
          

                
            @endforeach
            {{-- <tr>
                <td>John Doe</td>
                <td>123456789</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>987654321</td>
            </tr> --}}
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
    
</body>
</html>