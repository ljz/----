<?

 function issalesonduty()
 {
     $hournow = date("H");
     if (9 < $hournow and $hournow < 18) {
         return true;
     } else {
         return false;
     }
 }





























?>
