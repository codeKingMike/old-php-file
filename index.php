<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Demo</title>
  </head>
  <body>

<form method="GET" style="padding:10px;">
  <input type="text" name="firstName" placeholder="Enter first name">
  <input type="text" name="lastName" placeholder="Enter last name"><br>
  <button style="margin:5px;">SUBMIT</button>
</form>








    <?php
      echo "<h1 style='text-align:center;'>Hello, PHP!</h1><br>";

      $fName = $_GET['firstName'];
      $lName = $_GET['lastName'];
      $age = 28;
      $state = ["California", "New York", "Texas", "Washington"];

      echo $fName." ".$lName." is from ".$state['0']." and is ".$age." years old.<br>";

      echo $fName." loves to code and learn as well.<br>";


      foreach ($state as $result) {
        echo $result." ";
      }


     

    ?>



    <div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $fName;?></td>
      <td><?php echo $lName;?></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>



 
     <!-- Insert nr of subjects   
<input type="text" id="row"></input>
<button onclick="myFunction()" >Sub </button>
<div id="container"></div><!--hapesira qe i kemi lene tabeles ne faqe-->
<script> -->

// function myFunction(){


//     //Get the value the user gave
//     var nr = document.getElementById("row").value;
//     //e kthej ne int nga string qe esht
//     var c=parseInt(nr);
//     var div=document.getElementById("container");
//      div.innerHTML = " ";
//       div.innerHTML += "<table border='1' id='table'>";
//      document.getElementById('table').innerHTML += "<tr><td>SUBJECT</td><td>POINTS</td></tr>"; 

//       for (i = 0; i < c; i++) {

//         //Write the rows and cells
//         document.getElementById('table').innerHTML += "<tr><td>  one </td><td>  two </td></tr>";
// }
// }
</script>     












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>