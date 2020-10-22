<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@csrf
<div class="container">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Recipt</th>
        <th>Picture</th>
      </tr>
    </thead>
    @foreach ($cooks as $var)
			<tr>
				<td>
					{{ $var['cook_name']}}
				</td>
				<td>
					{{ $var['category_id']}}
				</td>
				<td>
					{{ $var['recipt']}}
				</td>
				<td>
					PICTURE
				</td>
			</tr>

		@endforeach
	
	</table>
</div>
</body>
</html>