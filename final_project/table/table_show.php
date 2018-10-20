<?php  
 $connect = mysqli_connect("localhost", "root", "", "python_test1");  
 $output = '';  
 $sql = "SELECT * FROM email_data ORDER BY mail_id";  
 $result = mysqli_query($connect, $sql);

$output .= '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
				
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									
									<th class="cell100 column1">From</th>
									<th class="cell100 column2">TO</th>
									<th class="cell100 column3">Email</th>
									<th class="cell100 column4">ID</th>
									<th >Remove</th>
								</tr>
							</thead>
						</table>
					</div>'; 
					
					

					if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
       
		
		//end fetching
           $output .= '<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
								
					 
                     <td class="cell100 column1" data-id1="'.$row["mail_id"].'" >'.$row["From"].'</td>  
                     <td class="cell100 column2" data-id2="'.$row["mail_id"].'" >'.$row["To"].'</td>  
                     <td class="cell100 column3" data-id3="'.$row["mail_id"].'" contenteditable>'.$row["body"].'</td>   
					  <td class="cell100 column4">'.$row["mail_id"].'</td> 
                     <td><button type="button" name="delete_btn" data-id5="'.$row["mail_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button>
                     </td>
								</tr>';
								
		  }  
     
 }		 
$output .= '

								
							</tbody>
						</table>
					</div>
					
				</div>		
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$(".js-pscroll").each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on("resize", function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
';  
      
 echo $output;  
 ?>