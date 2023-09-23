<?php
namespace Views;
class PartoIndexView {
    public function render($data) {
       require_once 'templates/PartoIndex.php';
        
    }
    public function renderForm($madres) {
        require_once 'templates/Reg_parto.php';
         
     }
}