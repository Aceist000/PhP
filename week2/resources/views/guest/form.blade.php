<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style = "margin-left: 10px; margin-right:10px">
	<form action="{{ route('testpostroute') }}" method="POST">
	@csrf
    <div class="form-row">
    <div class="form-group col-md-6" style = "padding-left:0px;">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" name = "name">
    </div>
    <div class="form-group col-md-6" style = "padding-right:0px;">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name = "lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "adress">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name = "dateofbirth">
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "description">
  </div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>