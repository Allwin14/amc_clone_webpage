<!-- resources/views/application_form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Application Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .form-header {
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }
        marquee {
            color: red;
            font-style: italic;
            font-weight: bold;
        }
        label {
            font-weight: 600;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .bg-img {
            background-image: url("allwin/Bunker.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="bg-img">
        <div class="container">
            <div class="form-header">
                <h2>American College Application Form</h2>
            </div>
            <marquee>"Kindly Fill Everything in The Application form (Last day For Admission is 27-05-2024)"</marquee>
            <form id="applicationForm" action="{{ url('/regsucess') }}" method="GET">

                @csrf
                <div class="mb-3">
                    <label for="fullName" class="form-label">Enter Full Name</label>
                    <input type="text" id="fullName" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Enter Password</label>
                    <input type="password" id="password" name="password" class="form-control" minlength="8" required>
                    <div class="form-text">Password must be at least 8 characters long.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Enter Phone Number</label>
                    <input type="tel" id="phone" name="phone" max="10"class="form-control" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
                    <div class="form-text">Phone number must be 10 digits long.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="male" name="gender" value="Male" class="form-check-input" required>
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="female" name="gender" value="Female" class="form-check-input" required>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Select Course</label>
                    <select id="course" name="course" class="form-select" required>
                        <option value="Information tech">Information Technology</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Arts">Arts</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Datascience">Data Science</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
