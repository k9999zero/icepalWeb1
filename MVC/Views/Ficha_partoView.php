<?php
namespace Views;
class Ficha_partoView {
    public function render () {
       require_once 'templates/Index_parto.php';   
    }
    public function renderForm() {
      require_once 'templates/Reg_parto.php';
       
   }
    
}