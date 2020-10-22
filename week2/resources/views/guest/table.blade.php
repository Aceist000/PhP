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
<div class="container">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Adress</th>
        <th>Born</th>
        <th>Description</th>
      </tr>
    </thead>
		@foreach ($newdata as $var)
			<tr>
				<td>
					{{ $var['name']}}
				</td>
				<td>
					{{ $var['lastname']}}
				</td>
				<td>
					{{ $var['adress']}}
				</td>
				<td>
					{{ $var['dateofbirth']}}
				</td>
				<td>
					{{ $var['description']}}
				</td>
			</tr>

		@endforeach
	</table>
</div>
</body>
</html>