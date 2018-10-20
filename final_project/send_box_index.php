<?php
    session_start();
	$connect = mysqli_connect("localhost", "root", "", "python_test1"); 
	$email=$_SESSION['email'];
?>
<html>  
      <head>  
	 
	  
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  
	  
           <title>Mail Inbox</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

      </head>  
      
      <script>
          $('form.ajax').on('submit', function() {
              var that = $(this),
                  url = that.attr('action'),
                  type = that.attr('method'),
                  data = {};

              that.find('[name]').each(function(send_box_index, value) {
                  var that = $(this),
                      name = that.attr('name'),
                      value = that.val();

                  data[name] = value;
              });
              $.ajax({

                  url: url,
                  type: type,
                  data: data,
                  success: function(response) {
                      $('#form-alert').show();
                      $('#modal-body-id').hide();
                      $('#submit').hide();
                      $('#new-message').show();

                  }

              });

              return false;
          });

          $(document).ready(function(){
              $('#form-alert').hide();
              $('#new-message').hide();

              $("#new-message").click(function(){
                  $("#contact-form")[0].reset();
                  $('#modal-body-id').show();
                  $('#new-message').hide();
                  $('#submit').show();
                  $('#form-alert').hide();
              });

          });
      </script>
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
            <a href="inbox.php">Inbox</a>
        </li>
		<li class="active">
            <a href="send_box_index.php">Send Box</a>
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
				<br></br>
               <h3 align="center">Send Box</h3><br />
               <!--button type="button" name="delete_btn" data-id5="'.$row["mail_id"].'" class="btn btn-xs btn-danger btn_delete">Compose Mail</button-->
               <div>
               
                   <hr>
               </div>
                <div class="table-responsive">

                     <div id="live_data"></div>                 
                </div>  
           </div>  
	   </div>
      <div class="modal fade" id="contact" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <form id="contact-form" class="form-horizontal ajax" role="form" action="send_box_index.php" method="post">

                      <div class="modal-header">
                          <h4>Compose Mail<a class="close" data-dismiss="modal">x</a></h4>

                      </div>
                      <div id="form-alert" class="alert alert-success">Thank You for your message.  I will reply as soon as possible.</div>
                      <div class="modal-body" id="modal-body-id">

                          <div class="form-group">

                              <label for="contact-email" class="col-sm-2 control-label">E-mail:</label>
                              <div class="col-sm-10">
                                  <input type="email" name="to" class="form-control" id="to" placeholder="you@example.com">
                              </div>
                          </div>
                          <div class="form-group">

                              <label for="contact-email" class="col-sm-2 control-label">Subject:</label>
                              <div class="col-sm-10">
                                  <input type="" name="email" class="form-control" id="contact-email" placeholder="Subject">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="contact-msg" class="col-sm-2 control-label">Message:</label>
                              <div class="col-sm-10">
                                  <textarea name="body" placeholder="Type your message..." id="body" class="form-control" rows="6"></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <a class="btn btn-primary" data-dismiss="modal">Close</a>
                          <button class="btn btn-primary" id="new-message">New Message</button>
						  
                          <button class="btn btn-primary" value="1" name="submit" type="submit" id="submit">Send Message</button>
                      </div>
                  </form>

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
                url:"send_box_select.php",  
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
                     url:"delete.php",  
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
 
 
 <?php
 
 
if(isset($_POST['submit']))
			{
				//$connect = mysqli_connect("localhost", "root", "", "python_test1");
				@$to=$_POST['to']; 
                @$body=$_POST['body'];
				
                $query = "INSERT  INTO `email_data`(`Ffrom`,`Tto`,`body`,`Ccheck`) VALUES('".$email."','".$to."','".$body."','0')";
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
					
		//echo '<script type="text/javascript">alert("item is not token")</script>';
				
}
	//session_destroy();		

?>