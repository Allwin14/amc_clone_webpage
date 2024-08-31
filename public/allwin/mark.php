<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
<div class="container " >
    <form action="markvalidate.php" method="post" >
        
            <h1  style="text-align:center;">Enter your 12th Mark</h1>
    <select >
  <option selected>Select Higher Secondary Group</option>
  <option value="bio-maths">Bio -Maths</option>
  <option value="computer-maths">Computer-maths</option>
  <option value="commerce">Commerce</option>
</select>

<div class="mb-3 mt-3">
      <h5 for="text">Enter Tamil Mark:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="val1">
    </div>
    <div class="mb-3 mt-3">
      <h5 for="text">Enter English Mark:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="val2">
    </div>
    <div class="mb-3 mt-3">
      <h5 for="text">Enter Accounts/maths mark/physics:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="total">
    </div>
    <div class="mb-3 mt-3">
      <h5 for="text">Enter Commerce/Biology mark:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="text4">
    </div>
    <div class="mb-3 mt-3">
      <h5 for="text">Enter computer Application /computer science mark:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="text5">
    </div>
    <div class="mb-3 mt-3">
      <h5 for="text">Enter chemistry/Economcis/maths:</h5>
      <input type="text" class="form-control" id="text" placeholder="Enter Marks" name="text6">
    </div>
    <button type="button" class="btn btn-success" onclick="markvalidate.php">Submit</button>
</div>
    </form>


</body>
</html>
