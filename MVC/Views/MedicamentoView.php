<?php
namespace Views;
class MedicamentoView {
    public function render() {
       require_once 'templates/Index_medicamento.php';
        
    }
    public function renderForm() {
        require_once 'templates/Reg_med.php';
         
     }
}