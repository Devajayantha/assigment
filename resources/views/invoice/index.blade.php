<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Invoice Project</title>
</head>

<body>

    <div>
        <h1>Invoice</h1>

        <ul>
            @foreach ($invoices as $item)
            <li>
                <div class="btn btn-primary"> {{$item->id}}
                </div><br>
            </li>
            @endforeach

        </ul>
    </div>
    <a href="/invoice/create" class="btn btn-primary"> Create Invoice</a>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
</body>
</html>
