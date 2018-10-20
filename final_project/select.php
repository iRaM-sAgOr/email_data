<?php 

    session_start();
	$email=$_SESSION['email']; 
 $connect = mysqli_connect("localhost", "root", "", "python_test1");  
 $output = '';  
 //$query1 = "select * from user where email='$email' and password='$password' ";
 $sql = "SELECT * FROM email_data where Tto='$email'";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" table-layout: auto;
    width: 100% border-collapse: collapse; >  
                <tr>  
                     <th width="70" >Id</th>  
                     <th width="230" >FROM</th>  
                     <th width="230" >TO</th>  
                     <th width="930" >Email</th>  
                      
                      
					 
					 
                     <th width="130" >Remove</th> 
                </tr>';  
 if($result && mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
       
		
		//end fetching
           $output .= '  
                <tr>  
                     <td>'.$row["mail_id"].'</td>  
                     <td class="first_name" data-id1="'.$row["mail_id"].'" contenteditable>'.$row["Ffrom"].'</td>  
                     <td class="last_name" data-id2="'.$row["mail_id"].'" contenteditable>'.$row["Tto"].'</td>  
                     <td class="first_name" data-id3="'.$row["mail_id"].'" contenteditable>'.$row["body"].'</td>  
                     
                    
					 
					 
                     <td><button type="button" name="delete_btn" data-id5="'.$row["mail_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button>
                     </td> 
                </tr>  
           ';  
      }  
     
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="16">No Email</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>