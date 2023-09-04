<?php
namespace Views;
class CorralView {
    public function render() {
       require_once 'templates/Index_corral.php';
        
    }
    public function renderForm() {
        require_once 'templates/Reg_corral.php';
         
     }
}