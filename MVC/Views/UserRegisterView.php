<?php
namespace Views;
class UserRegisterView {
    public function render() {
       require_once 'templates/UserRegister.php';
        
    }
    public function renderMaterialize() {
        require_once 'templates/UserRegisterMaterialize.php';
         
     }
}