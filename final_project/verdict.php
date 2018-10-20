<?php
	$connect = mysqli_connect("localhost", "root", "", "python_test1"); 
?>
<html>  
      <head>  
	  
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <title>Verdict </title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

      </head>  
      <body style="background-color: #fefbd8;">
        <nav id="nav" class="nav" style="background-color: #fefbd8;">
    <button class="menu">
        <em class="hamburger"></em>
    </button>
    <div class="brand">
        <img src="logo.png" width="50px">
        <a href="#">CUET Mail</a>
    </div>
    <ul class="navbar">
        <li>
           <a align="left" href="#contact" data-toggle="modal" >Compose Mail</a>
        </li>
		<li class="active">
            <a href="#">Inbox</a>
        </li>
		<li class="active">
            <a href="#">Send Box</a>
        </li>
        <li>
            <a href="logout.php">Log Out</a>
        </li>
        
    </ul>
</nav>
	  <div >
           <div class="container" >  
                <br />  
                <br />  
                <br />
				<br> </br>
               <h3 align="center">Verdict Box</h3><br />
               <!--button type="button" name="delete_btn" data-id5="'.$row["mail_id"].'" class="btn btn-xs btn-danger btn_delete">Compose Mail</button-->
               <div>
               
                   
               </div>
                <div class="table-responsive">

                     <div id="live_data"></div>                 
                </div>  
           </div>  
	   </div>
     
      </body>  
 </html>





 
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"verdict_select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
	   
	  
      fetch_data();
     setInterval(function(){
         fetch_data() // this will run after every 5 seconds
     }, 1000);
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id5");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"verdict_delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });


 });  
 
 
 
 </script>
 
 
 <?php
 /*
 
if(isset($_POST['submit']))
			{
				//$connect = mysqli_connect("localhost", "root", "", "python_test1");
				@$to=$_POST['to']; 
                @$body=$_POST['body'];
                $query = "INSERT  INTO `email_data`(`From`,`To`,`body`,`check`) VALUES('Sagor','".$to."','".$body."','0')";
                //mysqli_query($connect,$query);
				
				
                if(mysqli_query($connect,$query)){
					echo '<script type="text/javascript">alert("Your Mail has been sent")</script>';
					$query='';
					$to='';
					$body='';
				}
				
				else {
					
				       echo '<script type="text/javascript">alert("Data is not inserted")</script>';
				
			         }
			}
else 
{
					
		echo '<script type="text/javascript">alert("item is not token")</script>';
				
}
	//session_destroy();		
*/
?>
<script>

    /*http://callmenick.com/post/expanding-search-bar-using-css-transitions*/
    (function($) {
        "use strict";

        var $navbar = $(".nav"),
            y_pos = $navbar.offset().top,
            height = $navbar.height();
        $navbar.addClass("sticky");
        //scroll top 0 sticky
        /*$(document).scroll(function() {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > 0) {
                $navbar.addClass("sticky");
            } else {
                $navbar.removeClass("sticky");
            }
        });*/

        //section sticky
        /*$(document).scroll(function() {
            var scrollTop = $(this).scrollTop();
            if ($(window).height() > scrollTop) {
              $navbar.removeClass("sticky");
            } else {
              $navbar.addClass("sticky");
            }
        });*/

    })(jQuery, undefined);

    $(".menu").click(function(){
        $("#nav").toggleClass("open");
    });
</script>