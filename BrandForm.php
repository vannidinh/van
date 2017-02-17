<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> </title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
          <link rel="stylesheet" type="text/css" href="css/style.css">
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">SportDrinkApp</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <li><a href="BrandForm.php">Add Brand</a></li>
        <li><a href="DrinkForm.php">Add Drink</a></li>
        <li><a href="DeleteBrandForm.php">Delete Brand</a></li>
        <li><a href="DeleteDrinkForm.php">Delete Drink</a></li>
       </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>    <br><br>    <div class="container">      <form action="addBrand.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Brand</h1>
             <label for="brand_id">Brand:</label>
                
 <?php
include "dbConnection.php";

  $sql = "SELECT ID,Brand FROM brand";

  $result = $conn->query($sql);

    if ($result->num_rows > 0) {  
      
$select= '<select name="Brand">';
while($rs = $result->fetch_assoc()){
     $select.='<option value="'.$rs['ID'].'">'.$rs['Brand'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>                    
                
                
                
                <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand" class="form-control"/>

        <label for="city">City:</label>
        <input type="text" name="city" class="form-control"/>

        <label for="state">State:</label>
        <input type="text" name="state" class="form-control"/>

        <label for="manufacturer">Manufacturer:</label>
        <input type="text" name="manufacturer" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
  </body>
</html>