<!doctype html>
<html>
<head>
<link href="css/app.css" rel="stylesheet">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">

<form action="dashboard" method="post" enctype="multipart/form-data">

<table class="table">

<tr>
<th>name</th>
<td><input type="text" name="name" class="form-control"></td>
</tr>
<tr>
<th>age</th>
<td><input type="number" name="age" class="form-control"></td>
</tr>
<tr>
<th>address</th>
<td><textarea name="address"></textarea class="form-control"></td>
</tr>
<tr>
<th>mobile</th>
<td><input type="tel" name="mobile" class="form-control"></td>
</tr>
<tr>
<th>gender</th>
<td><input type="radio"  value="male" name="gen" class="form-control">male <input type="radio"  value="female" name="gen" class="form-control">female</td>
</tr>
<tr>
<th>language</th>
<td><input type="checkbox" name="language" value="malayalam" class="form-control">malayalam <input type="checkbox" name="language" value="english" class="form-control">english <input type="checkbox" name="language" value="hindi" class="form-control">hindi </td>
</tr>
<tr>
<th>email</th>
<td><input type="email" name="email" class="form-control"></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="password" class="form-control"></td>
</tr>
<tr>
<th>PHOTO</th>
<td><input type="file" name="img" class="form-control"></td>
</tr>
<td><input type="submit" name="sub" onClick="return get()" class="btn-success">
</td>
</td>
<td><a href="display">display</td>
<td><a href="login">login</a>
</table>

</form>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</body>
</html>
