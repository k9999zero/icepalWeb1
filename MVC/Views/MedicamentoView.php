<?php
namespace Views;
class MedicamentoView {
    public function render() {
       require_once 'templates/Index_medicamento.php';
        
    }
    public function renderForm($diagnosticos) {
      require_once 'templates/Reg_med.php';
       
   }
}