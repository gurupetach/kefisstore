<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
      <h1>KEFIS STORE</h1>

  <h2>DO NOT ENTER SIM PIN - Just TEST TO SEE IF IT WORKS </h2>
    
    
  
      <form method="post" action="mpesa.php">
						
        <input type="text" name="amount" placeholder="Enter Amount" />
        <input type="hidden" name="reference" value="17" />
        <input type="text" name="phone" placeholder="Enter Phone Number" /><br>
        <button class="btn btn-primary" type="submit">Pay now</button>
      </form>
  
    </form>
  </div>


</body>
</html> 
