<div class="marcas form">
    <?php echo $this->Form->create('Marca'); ?>
    <fieldset>
        <legend>Nueva Marca</legend>
        <?php echo $this->Form->input('nombre'); ?>
    </fieldset>
    <?php echo $this->Form->end("Crear"); ?>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link("Listado Marcas", array('action' => 'index')); ?></li>
        <!--li><?php echo $this->Html->link(__('Lista de Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li-->
    </ul>
</div>