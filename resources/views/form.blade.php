<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <center>
        <h1>Blog Form</h1>
    </center>
    <div class="container">
        <form action="store_data" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label for="profilePicture" class="form-label">Porfile Picture</label>
                <input name="profilePicture" type="file" class="form-control" id="profilePicture">
            </div>
            {{-- Checkbox --}}
            <br>
            <legend>Skills</legend>
            <div class="form-check">
                <input name="skill[]" class="form-check-input" type="checkbox" value="PHP" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    PHP
                </label>
            </div>
            <div class="form-check">
                <input name="skill[]" class="form-check-input" type="checkbox" value="JavaScript" id="flexCheckChecked"
                    checked>
                <label class="form-check-label" for="flexCheckChecked">
                    JavaScript
                </label>
            </div>
            <div class="form-check">
                <input name="skill[]" class="form-check-input" type="checkbox" value="C++" id="flexCheckChecked"
                    checked>
                <label class="form-check-label" for="flexCheckChecked">
                    C++
                </label>
            </div>
            {{-- Radio Button --}}
            <legend>Gender</legend>
            <div class="form-check">
                <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault1" value="Male">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault2" value="Female">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            {{-- Select --}}
            <select name="country" class="form-select" aria-label="Default select example">
                <option selected>Country</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="BD">BD</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
