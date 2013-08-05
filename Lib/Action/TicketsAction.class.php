<?
class TicketsAction extends Action {


public  function Test(){

$test =1;

$this->display();

}




 function array_sort($arr, $keys, $type = 'desc') {
  4       $keysvalue = $new_array = array();
  5       foreach ($arr as $k => $v) {
  6           $keysvalue[$k] = $v[$keys];
  7       }
  8       if ($type == 'asc') {
  9           asort($keysvalue);
 10       } else {
 11           arsort($keysvalue);
 12       }
 13       reset($keysvalue);
 14       foreach ($keysvalue as $k => $v) {
 15           $new_array[$k] = $arr[$k];
 16       }
 17       return $new_array;
 18     }





}


?>
