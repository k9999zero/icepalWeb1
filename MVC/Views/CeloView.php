<?php
namespace Views;
class CeloView {
    public function render() {
       require_once 'templates/Index_celo.php';
        
    }
    public function renderForm($madres) {
        require_once 'templates/Reg_celo.php';
         
     }
}