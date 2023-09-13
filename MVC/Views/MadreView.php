<?php
namespace Views;
class MadreView {
    public function render() {
       require_once 'templates/Index_madre.php';
        
    }
    public function renderForm($corrales) {
        require_once 'templates/Reg_madre.php';
         
     }
}