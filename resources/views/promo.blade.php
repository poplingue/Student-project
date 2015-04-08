<html>
	<head>
		<title>promo</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
                            <ul>
                                @foreach($students as $student)
                                <li>
                                  {{$student['name']}}
                                </li>
                                @endforeach
                            </ul>
			</div>
		</div>
	</body> 
</html>