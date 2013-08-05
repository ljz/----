<?
class SupportAction extends Action {
 public function support(){

import("@.Util.Tools");
         if (issalesonduty()) {
             $this->assign('salesonduty', true);
         }
         $this->display();



}

}
?>
