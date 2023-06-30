<?php
// switch
$orderStatus = "declined";
$orderStatusArray = ["paid","declined","strange"];

//foreach(...){
//  switch()...{
//      case 1:
//      continue - break 2;
//  }
//}
switch($orderStatus){
    case "paid":
        echo "wait for your product, it is on management";
        break;
    //case "rejected" <- more cases with the same result
    case "declined":
        echo "sorry but there was an error with your order";
        break;
    default:
        echo "unknown order status";
}

// sleep
function x(){
    sleep(3);
    echo "sleeping...";
    echo "<br>";
    return 3;
}
$x = x();
/*  switch(x()){
        ...
        ...
    }
*/

// match expression <- can store a value, no need break ,
// but you have to specify all the causes (if not contemplated)
// strict comparison, '1' != 1

$match = match($x){
    // evaluation => function()
    1 => "Paid",
    2,3 => "Payment Declined",
    0 => "Pending",
    default => "Unknown Status"
};

echo $match;