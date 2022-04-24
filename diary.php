<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">

	<script src=
"https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity=
"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity=
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous">
	</script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style type="text/css">

	 	body{
	 		/*background-color: #d0e1f7;*/
	 		background-color:#dfe5f2 !important;
	 		margin: 0% 5% 5% 5%;

	 		/* border-style: solid black; */
	 	}
	 
	 	#stories {
	 		color: #627ea1;
	 	}
	 	#diary {
	 		color: #627ea1;
	 		font-weight: bold;
	 	}
	 	.card{
	 		
	 		box-shadow: 4px 4px 3px #c7c7c7;
	 	}
	
	 	.image{
	 		width: 20%;
	 		height: 20%;
	 	}

	 </style>
</head>

<body>
<?php require_once 'nav.php' ?>
	<div id="border">

	<div class="mx-5">
		
		<h1 id="diary" class="display-3 my-3 text-center"><i class="fa fa-book" aria-hidden="true"></i>   Diary</h1>
		
		<div class="card bg-light">
			<div class="card-body">
				<h4 class="card-title font-weight-bolder" style=" color: #314868">
					<i class="fa fa-pencil" aria-hidden="true"></i>  Express Yourself....
				
				</h5>
				<p style=" color: #314868"> <strong>Date and Time:</strong> <span id='date-time'></span>.</p>
				<div class="form-group">
					<textarea class="form-control"
						id="addTxt" rows="3" style="height:190px">
					</textarea>
				</div>
				<button class="btn btn-primary"
					id="addBtn" style=
					"background-color:green">
					Save your Page
				</button>
			</div>
		</div>
		<div class="row">
			
			<div class="col-lg-7">
		<h3 class=" font-weight-bolder my-4" id="stories" style="margin-top: 30px;"><i class="fa fa-commenting" aria-hidden="true"></i>  Your Stories </h3></div>

	</hr>
		
		
		
		<div id="notes" class=
			"row container-fluid " style=" color: #314868">

		</div>
	</div>
	</div>

	<script src="js/diary.js"></script>
	<script type="text/javascript">
		var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
	</script>

</body>

</html>
