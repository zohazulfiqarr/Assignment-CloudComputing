<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 900px; /* only for demonstration, should be removed */
  background: #808080;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #A9A9A9;
  height: 900px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
   float: right;
  padding: 30px;
  width: 70%;
  background-color: #A9A9A9;
  height: 900px; 
}

/* Style the footer */
footer {
  background-color: black;
  padding: 20%;
  text-align: center;
  color: white;
}


@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height:50%;
  }
}
</style>
</head>
<body>
<header>
  <?php include 'nav.php';?>
</header>

<section>
  <nav>
    <center>   <form method="post" action="db.php">
      <h2>
     <label>Current</label>
     <input type="text" name="current">
     <br>
     <label>Due Bill </label>
     <input type="text" name="Due">
     <br>
     <label>Total</label>
     <input type="text" name="tot"><br>
     
     <input type="button" name="Total" value="Total" onclick="add()">
   </h2>
   </form> </center>

  </nav>
  
  <article>
    <?php include 'slide.php';?>
  </article>

</section>

<footer>
    
  
  <?php include 'footer.php'; ?>

  </footer>
  
</body>
</html>
