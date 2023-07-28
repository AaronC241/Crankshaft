<?php include("Navbar.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>cart</title>
</head>
<body class="flex flex-col min-h-screen ">

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-gray my-5 font-mono text-xl">
            <h1>MY CART</h1>
        </div>

    <div class="col-lg-9">
 <table class="table text-black bg-gray text-center font-mono text-xl">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">No of Days</th>
      <th scope="col">total</th>

      <th scope="col"></th>
    </tr>
  </thead>
 <tbody class="text-center">
 
 <?php
 if(isset($_SESSION['cart']))
 {
    foreach($_SESSION['cart'] as $key => $value)
    {
      $sr=$key+1;
        echo"
        <tr>
        <td>$sr</td>
        <td>$value[Item_name]</td>
        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
        
        <td>
         <form action='Cart Manage.php' method='POST'>
           <input class='iquantity text-center text-black' name='Mod_Quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='30'>
           <input type='hidden' name='Item_name' value='$value[Item_name]'>
         </form>
        </td>
        <td class='itotal'></td>
        <td>
        <form action='Cart Manage.php' method='POST'>
        <button name='Remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='Item_name' value='$value[Item_name]'>
        </form>
        </td>
        </tr>";
    }
  }
 ?>
   
   </tbody>
   </table>
</div>
<div class="col-lg-3">
    <div class="border bg-gray text-black rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-right" id="gtotal"></h5>
        <br>
        <?php 
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        {
        ?>
       <form method="POST" action="purchase.php">
        <div class="form-check">
           <label>Name</label>
           <input type="text" name="full_name" class="form-control"required>
        </div>
        <div class="form-check">
           <label>Phone no</label>
           <input type="number"name="phone_no" class="form-control"required>
        </div>
        <div class="form-check">
           <label>Address</label>
           <input type="text"name="address" class="form-control"required>
        </div>
        <div class="form-check">
           <label>Email</label>
           <input type="text"name="Email" class="form-control"required>
        </div>
                            <div class="form-check">
                                <label for="">Start Date</label>
                                <input type="datetime-local" name="start" class="form-control">
                            </div>
                            <div class="form-check">
                                <label for="">End Date</label>
                                <input type="datetime-local" name="end" class="form-control">
                            </div>
        <button type="submit"class="h-10 px-5 my-3 mx-3 text-white bg-green-500 rounded-lg focus:shadow-outline hover:bg-white " name="purchase">Purchase</button>
       <div class="form-check">
         <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
         <label class="form-check-label" for="flexRadioDefault2">
           COD
         </label>
       </div>
    </form>
        <?php 
       }
       ?>
    </div>
</div>

</div>

<script>
  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {

      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }

  subTotal();

</script>

<script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

<script type="text/javascript">
        $(function() {
            $('#datepicker1').datepicker();
        });
    </script>
<?php include("Footer.php"); ?> 
</body>
</html>

