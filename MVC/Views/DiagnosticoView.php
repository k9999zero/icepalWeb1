<?php
namespace Views;
class DiagnosticoView {
    public function render() {
       require_once 'templates/Index_diagnostico.php';
        
    }
    public function renderForm($cerdos,$madres,$lechones) {
        require_once 'templates/Reg_diagnostico.php';
         
     }
     public function renderFormM($madres) {
      require_once 'templates/Reg_diagnostico.php';
       
   }
}