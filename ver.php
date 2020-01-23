 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "cafe");  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>ID  </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
       <?php include 'nav.php';?>
      <body style="background-color: #6e7f80;">  
           <br />  
          
           <div class="container" style="width:700px; height: 200px">  
                <h3 align="center" background-color="blue">Student Id verification</h3><br />  
                <?php  
                $query = "SELECT * FROM students ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="wow.php">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">semester<?php echo $row["semester"]; ?></h4>  
                               <input type="submit" name="ORDER" style="margin-top:5px; color: black" class="btn btn-success" value="welcomeToMenu" />
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
  
      </body>  
 </html>