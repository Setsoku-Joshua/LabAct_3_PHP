<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LabAct4 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container rounded-3 w-75 p-3 my-5" style="background:#ff6240">
  <div class="row">
    <div class="col-4 d-flex justify-content-center align-items-center">
        <div class="text-white fw-bold display-4 text-center">
            Meralco Billing Form
        </div>
    </div>

    <div class="col-8">
        <div class="container bg-light w-100 rounded-3 p-3">

        <?php 

$jrFname = $_POST['jrFname'];
$jrLname = $_POST['jrLname'];
$jrMI = $_POST['jrMI'];
$jrAdd1 = $_POST['jrAdd1'];
$jrAdd2 = $_POST['jrAdd2'];
$jrAdd3 = $_POST['jrAdd3'];
$jrAdd4 = $_POST['jrAdd4'];
$jrAdd5 = $_POST['jrAdd5'];
    $jrkilowatts = $_POST['jrkilowatts'];
    $jrSubT = $_POST['sub'];


if (isset($_POST['btn'])){
    $JRTotal = 0;
    $JRTotal1 = 0;
    $JRTotal2 = 0;

    $jrkilowatts = $_POST['jrkilowatts'];
    $jrSubT = $_POST['sub'];

    switch ($jrSubT) {
        case 'Residential':
            $jrPr = 2.75;
            $JRTotal1 = $jrPr * $jrkilowatts;
            break;
        
            case 'Industrial':
                $jrPr = 3.75;
                $JRTotal1 = $jrPr * $jrkilowatts;
                break;

                
            case 'Commercial':
                $jrPr = 4.75;
                $JRTotal1 = $jrPr * $jrkilowatts;
                break;
            }

            if(isset($_POST['Disconnection'])){
              $JRCharge = 500;
              $JRDisc = "<br> Disconnection: PHP ".$JRCharge;
              $JRTotal = $JRTotal1 + $JRCharge;
            } else{
              $JRDisc = NULL;
            }   
            
            

            if(isset($_POST['Reconnection '])){
              $JRCharge = 600;
              $JRRec = "<br> Reconnection: PHP ".$JRCharge;
              $JRTotal = $JRTotal1 + $JRCharge;
            } else{
              $JRRec = NULL;
            }   

            if(isset($_POST['Late Payment'])){
              $JRCharge = $JRTotal * 0.3;
              $JRLP = "<br> Late Payment: PHP ".$JRCharge;
              $JRTotal = $JRTotal1 + $JRCharge;
            } else{
              $JRLP = NULL;
            }

            if(isset($_POST['Additional'])){
              $JRCharge = 750;
              $JRAdd = "<br> Additional Electricity: PHP ".$JRCharge;
              $JRTotal = $JRTotal1 + $JRCharge;
            } else{
              $JRAdd = NULL;
            }   

            if(isset($_POST['EMT'])){
              $JRCharge = 1500;
              $JREMT = "<br> Electricity Meter Transfer : PHP ".$JRCharge;
              $JRTotal = $JRTotal1 + $JRCharge;
            } else{
              $JREMT = NULL;
            }   
            
            $JRTotal2 = $JRTotal1 + $JRTotal;
            
    }
            
?>

<span class="display-7 fw-bold"><?php echo "<br> Customer Name: <b>".$jrFname." ".$jrLname." ".$jrMI."</b>";
echo "<br>  Address: <b>". $jrAdd1." ".$jrAdd2." ".$jrAdd3." ".$jrAdd4." ".$jrAdd5."</b>";
echo "<br> No. of Kilowatts: <b>".$jrkilowatts."</b>";

switch ($ ) {
  case 'Residential':
    echo "<br> Subscription Type: Residential </b>";
    echo "<br> Rate of Subscription: 2.75 </b>"; 
    break;

    case 'Industrial':
      echo "<br> Subscription Type: Industrial </b>";
      echo "<br> Rate of Subscription: 3.75 </b>";
      break;
  
      case 'Commercial':
        echo "<br> Subscription Type: Commercial </b>";
        echo "<br> Rate of Subscription: 4.75 </b>";
        break;
}

echo "<br> Energy Charge: <b> Php".$JRTotal."<br>";
echo "<br> Other Charge/s:<b>".$JRDisc." ".$JRRec." ".$JRLP." ".$JRAdd." ".$JREMT."<br>";
echo "<br> Other Charges Total: <b> Php ".$JRTotal."</b>";
echo "<br> <em>  <b> TOTAL ELECTRIC BILL: ".$JRTotal2; 
            ?>
            </span>
    </div>
  </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
