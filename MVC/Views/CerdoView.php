<?php
namespace Views;
class CerdoView {
    public function render() {
       require_once 'templates/Index_cerdo.php';
        
    }
    public function renderForm() {
        require_once 'templates/Reg_cerdo.php';
         
     }
}