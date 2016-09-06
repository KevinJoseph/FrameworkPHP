<?php
App::uses('AppModel', 'Model');

class Producto extends AppModel {

    public $displayField = 'nombre';

    public $belongsTo = array(
        'Marca' => array(
            'className' => 'Marca',
            'foreignKey' => 'marca_id',
        )
    );
}
