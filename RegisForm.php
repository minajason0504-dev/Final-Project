<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Registration</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="RegisForm.css">
</head>

<body>

<div class="container">

<h2>Student Registration</h2>

<form method="POST" action="Output_RegisForm.php">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Age</label>
<input type="number" name="age" min="1" max="100" required>

<label>Gender</label><br>
<input class="inline" type="radio" name="gender" value="Male" required> Male
<input class="inline" type="radio" name="gender" value="Female"> Female

<br><br>

<label>Course</label>
<select name="course" required>
    <option value="">Select Course</option>
    <option value="BSIT">BSIT</option>
    <option value="BSBA">BSBA</option>
    <option value="BSED">BSED</option>
</select>

<label>Hobbies</label><br>
<input class="inline" type="checkbox" name="hobbies[]" value="Reading"> Reading
<input class="inline" type="checkbox" name="hobbies[]" value="Sports"> Sports
<input class="inline" type="checkbox" name="hobbies[]" value="Music"> Music

<div class="btn-group">
    <button type="submit">Submit</button>
    <input type="reset" value="Reset">
</div>

</form>

</div>

</body>
</html>