<!DOCTYPE html>
<html lang="en">
<head>
	<title>UBT Calculator</title>



	<link rel="shortcut icon" href="img/calc-logo-removebg-preview.png" style="height: px; width:30px; " >

<!--=============== BOXICONS ===============-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<!--=============== CSS ===============--> 
<link rel="stylesheet" href="css/style.css">



<title>Responsive Portfolio Website</title>

</head>
<body class="text-center" >
<header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="img/calc-logo-removebg-preview.png" style="height: 50px; width:50px;" alt="" class="nav__logo-img">
                   UBT Calculator
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="derivative.php" class="nav__link">    Derivatet</a>
                        </li>

                        <li class="nav__item">
                            <a href="sort.php" class="nav__link">+/-</a>
                        </li>


                        <li class="nav__item">
                        <a class="nav-link" style="color:white;" href="login.php">Matricat</a>
                        </li>
                        
                        <li class="nav__item">
                        <a class="nav-link" style="color:white;" href="fall.php"></a>
                        </li>


                       
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>



<link rel="stylesheet" href="css/derivate.css">
	
<div class="signup">


  <h1>Derivimi i fuksionit dhe paraqitja grafike e tij</h1>
  <div id="top"><h1>Shkruani funksionin e derivatit:</h1>
  	<div id="function">
      <label>y = </label><input type="text" value="d/dx (x+4)^2*(x-6)+60sinx" id="input" />
  	</div>
  	<div id="range">
  		<div class="rangeSection">Nga <input type="text" value="" placeholder="-10" id="x1" /> &lt; x &lt; <input type="text" value="" placeholder="10" id="x2" /></div>
      <div class="rangeSection">dhe <input type="text" placeholder="auto" value="" id="y1" /> &lt; y &lt; <input type="text" placeholder="auto" value="" id="y2" /></div>
  	</div>
  	<input type="button" value="Grafiku" id="graph" />
  </div>
  <div id="wrapper">
    <div id="result"></div>
  </div>
  <a id="github" href="https://github.com/pahgawk/XCalc">Find this on Github!</a>
 


                


<script src="js/derivative.js"></script>




