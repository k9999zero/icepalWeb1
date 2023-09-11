<?php
namespace Views;
class PartoView {
    public function render () {
       require_once 'templates/Index_parto.php';   
    }
    public function renderForm() {
      require_once 'templates/Reg_parto.php';
       
   }
    
}