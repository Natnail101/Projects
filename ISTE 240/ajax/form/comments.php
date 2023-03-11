<!doctype html>
<html lang="en">
<head>
  	<title>Comment Form</title>
  	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Sweetalert 2 CSS -->
	<link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
  	
  	<!-- Page CSS -->
  	<link rel="stylesheet" href="../asset/css/styles.css">
	<link rel = "stylesheet" href = "../asset/css/nav.css">
</head>	
  
<body>
<nav class="topnav" id="myTopnav">
    <ul>
        <a href="../index.php">Home</a>
        <a href="../thomas.php">Thomas Gallaudet</a>
        <a href="../alice.php">Alice Cogswell</a>
        <a href="../dimarco.php">Nyle Di Marco</a>
        <a href="../laurent.php">Laurent Clerc</a>
        <a href="../keller.php">Helen Keller</a>
        <a href="#">Feedback</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i> </a>
    </ul>
</nav>
	<div class="container">
		<br><br>
	    <h1>Comments Form</h1>
	    <br><br>
	    
	    <div class="row">
	    	<div class="col-md-4">
	    		<h3>Add New Record</h3>
			    <form action="save.php" id="form">
			    	<div class="form-group">
					    <label for="email">Email</label>
					    <input class="form-control" type="text" name="email">
				  	</div>
				  	<div class="form-group">
					    <label for="first_name">First Name</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>
				  	<div class="form-group">
					    <label for="last_name">Last Name</label>
					    <input class="form-control" type="text" name="last_name">
				  	</div>
				  	<div class="form-group">
					    <label for="address">Comments</label>
					    <textarea class="form-control" type="text" name="address" rows="3"></textarea>
				  	</div>
				  	<button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>
				</form>
	    	</div>
	    	<div class="col-md-8">
	    		<h3>List of Records</h3>
	    		<div id="employees-list"></div>
	    	</div>
	    </div>
	</div>
	<!-- The Modal -->
	<div class="modal" id="edit-employee-modal">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Edit Employee</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>
		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="update.php" id="edit-form">
		        		<input class="form-control" type="hidden" name="id">
				    	<div class="form-group">
						    <label for="email">Email</label>
						    <input class="form-control" type="text" name="email">
					  	</div>
					  	<div class="form-group">
						    <label for="first_name">First Name</label>
						    <input class="form-control" type="text" name="first_name">
					  	</div>
					  	<div class="form-group">
						    <label for="last_name">Last Name</label>
						    <input class="form-control" type="text" name="last_name">
					  	</div>
					  	<div class="form-group">
						    <label for="address">Comments</label>
						    <textarea class="form-control" type="text" name="address" rows="3"></textarea>
					  	</div>
					  	<button type="button" class="btn btn-primary" id="btnUpdateSubmit">Update</button>
					  	<button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
					</form>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!-- Must put our javascript files here to fast the page loading -->
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Sweetalert2 JS -->
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- Page Script -->
	<script src="assets/js/scripts.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="../assets/js/menu-highlighter.js"></script>
</body>
  
</html>