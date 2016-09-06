<?php
App::uses('AppModel','Model');
class Marca extends AppModel {
    public $displayField='nombre';
    public $hasMany = array(
        'Producto'=>array(
        'className'=>'Producto',
        'foreignKey'=>'marca_id',
        'dependent'=>false
    ));
}
?>