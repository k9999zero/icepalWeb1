<?php
namespace Views;
class DiagnosticoView {
    public function render() {
       require_once 'templates/Index_diagnostico.php';
        
    }
    public function renderForm($cerdos) {
        require_once 'templates/Reg_diagnostico.php';
         
     }
}