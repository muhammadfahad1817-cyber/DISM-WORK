<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRI4k0LK..." crossorigin="anonymous">
</head>
</head>

<body>
    <x-nav-bar/>
    <div class="container mt-4">

        <h1>Add Student</h1>

        <form method="POST" action="/edit">

            @csrf
            
    <input type="hidden"  name="uid" value="{{ $student['uid'] }}">

            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $student['username'] }}">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $student['age'] }}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $student['phone'] }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student['email'] }}">
            </div>

            <button type="submit" class="btn btn-dark">Add</button>

        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
