<?php
namespace Views;
class LechonView {
    public function render() {
       require_once 'templates/Index_lechon.php';
        
    }
    public function renderForm($corrales) {
        require_once 'templates/Reg_lechon.php';
         
     }
     public function renderFormM($madres) {
      require_once 'templates/Reg_lechon.php';
       
   }
  
}