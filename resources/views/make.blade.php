
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="" src="assets/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
</head>
<body>
    <div class="jumbotron" style="background: url(img/brex.jpg);"></div>
		<div class="container-fluid">

			<div class="row">
		
					<div class="col-md-3">

					<div class="list-group">
						<a href="" class="list-group-item active" style="background-color: #1e4356;;">Categories</a>
						<a href="/home" target="_blank" rel="noopener noreferrer">HOME</a>
						<a href="#" class="list-group-item">search Delivery</a>
						
						
						
					</div>
					<hr>
					
					
				</div>
				<div class="col-md-8"> 
					<div class="card">
						
						<div class="card-body" style="background-color: #1e4356;; color: #fff;" > <h3>Book Delivery</h3></div>
							<div class="card-body">
								<form action="" method="post">
									<label>First Name:</label>
									<input type="text" name="fname" class="form-control"><br>
									<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
									<label>Last Name:</label>
									<input type="text" name="lname" class="form-control" required=""><br>
									<label>Email</label>
									<input type="text" name="email" class="form-control" required=""><br>
									
									<label>phone</label>
									<input type="tel" name="phone" class="form-control" required=""><br>
									
                                    <label>Delivery Id</label>
									<input type="text" name="delivery_id" class="form-control" required=""><br>
									<label>Delivery Item</label>
									<input type="text" name="delivery_item" class="form-control" required=""><br>
									<label>Quantity</label>
									<input type="number" min='0' name="quantity" class="form-control" required=""><br>
									<label>Current Location:</label>
									<input type="text" name=current_loc" class="form-control" required="">
									<label>Destination:</label>
									<input type="text" name="destination" class="form-control" required=""><br>
                                    <label>Date of delivery</label>
									<input type="date" name="date_delivery" class="form-control" required=""><br>
									
									<input  type="submit" class="btn btn-primary" name="pat_submit" value="Submit" class="form-control" style="margin-top: 7px;">
								</form>
								



							</div>
							
						
						
					</div>
					
				</div>
				
				
			</div> 
			
		</div>
    
</body>
</html>