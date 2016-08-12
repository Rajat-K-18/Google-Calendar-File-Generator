<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple claendar generator">
    <meta name="author" content="Rajat">
    <title>Simple Calendar Generator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.stepify.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
include "connection.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Generate your calendar for the next semester ...</h1>
                <p class="lead">... and never miss a class!<br>Or bunk classes like a pro!</p>
                <hr>
                <p class="lead">Follow the steps below to create your calendar.</p>
                <hr>
	            <div class="col-lg-6 text-center" style="float: none; margin: 0 auto;">
	            	<form class="form-horizontal" role="form" action="download.php" method="POST">
			            <div class="operation">
			            	<p class="lead">What should your calendar be called?</p>
							<div class="form-group">
								<input type="text" class="form-control" id="calname" placeholder="My Semester Calendar" name="cal_name">
							</div>
			            </div>
			            <div class="operation">
			            	<p class="lead">Which courses are you taking this semester?</p>
			            	<p>(It's a long list: you may need to scroll down...)</p>
							<table id="masterlist" class="display text-center">
								<thead>
									<tr>
										<th style="text-align: center;">Select?</th>
										<th style="text-align: center;">Code</th>
										<th style="text-align: center;">Name</th>
									</tr>
								</thead>
								<tbody>
								<?php $qry = "SELECT * FROM course_compact" or die("Error in the consult.." . mysqli_error($link));  
									$result = mysqli_query($link, $qry); 
								while($row = mysqli_fetch_row($result)){
									?>
									<tr>
										<td><input type="checkbox" value=<?php echo $row[2]; ?>  name="course[]"></td>
										<td><?php echo $row[0]; ?></td>
										<td><?php echo $row[1]; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							  </table>
			            </div>
			            <div class="operation">
			            	<p class="lead">Your calendar is ready!</p>
			            	<p>All you need to do now is:
			            		<ul class="list-unstyled">
			            			<li>Download your calendar file (i.e., a .ics file).</li>
			            			<li>Go to <a href="https://www.google.com/calendar/">Google Calendar</a> and import the calendar file.</li>
			            			<li>(Instructions <a href="https://support.google.com/calendar/answer/37118?hl=en">here</a>).</li>
			            		</ul>
			            	</p>
			            </div>
		        	</form>
	        	</div>
            </div>
            <div class="col-lg-12 text-center">
            	<hr>
	            <ul class="list-unstyled">
	            	<li>Works on your smartphone, too!</li>
	                <li>Rajat; Tushar Agarwal :)</li>
	            </ul>
        	</div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/underscore.js"></script>
    <script src="js/jquery.stepify.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
	    $(document).ready(function() {
	    	$('.operation').stepify({
	    		distribution:[1,1,1],
	    	});
	    	$('#masterlist').DataTable();
	    });
    </script>
</body>
</html>
