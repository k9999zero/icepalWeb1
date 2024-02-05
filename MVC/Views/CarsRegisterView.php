<?php
namespace Views;
class CarsRegisterView {
    public function render() {
       require_once 'templates/CarsRegister.php';
        
    }
    public function renderMaterialize() {
        require_once 'templates/UserRegisterMaterialize.php';
         
     }
    public function renderMaterialDesign() {
    require_once 'templates/UserRegisterMaterialDesign.php';
        
    }
     public function renderBootstrap() {
        require_once 'templates/UserRegisterBootstrap.php';
         
    }
}