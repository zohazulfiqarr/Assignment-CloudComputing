<!DOCTYPE html>
<html>
<head>
<style>
.card {
  align-items: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: left;
  text-align: right;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: right;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.2;
}
{box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: right;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

</style>
</head>
<body>


<section>
  <DIV CLASS="tab">
<div class="card">
  <img src="samosa.jpg"  style="width:100%">
  <h1> Samosa </h1>
  <p class="price"> 10 Pkr </p>
  
  <p><button>Add to Cart</button></p>
</div>
<div class="card">
  <img src="roll.jpg" alt="Denim Jeans" style="width:100%">
  <h1> Chicken Roll </h1>
  <p class="price"> 20 Pkr </p>
  
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="a.jpg" alt="Denim Jeans" style="width:100%">
  <h1> Chicken Biryani </h1>
  <p class="price"> 120 Pkr </p>
  
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="b.jpg" alt="Denim Jeans" style="width:100%">
  <h1> Tea </h1>
  <p class="price"> 20 Pkr </p>
  
  <p><button>Add to Cart</button></p>
</div>
</DIV>
</section>

</body>
</html>
