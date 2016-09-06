<div class="productos index">
    <h2>Productos</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('nombre');?></th>
            <th><?php echo $this->Paginator->sort('precio');?></th>
            <th><?php echo $this->Paginator->sort('marca_id');?></th>
            <th class="actions">Acciones</th>
        </tr>
    <?php foreach($productos as $producto): ?>
    <tr>
        <td><?php echo $producto['Producto']['id'];?></td>
        <td><?php echo $producto['Producto']['nombre'];?></td>
        <td><?php echo $producto['Producto']['precio'];?></td>
        <td>
            <?php echo $this->Html->link($producto['Marca']['nombre'],array('controller'=>'marcas','action'=>'edit',$producto['Marca']['id'])); ?>
        </td>
        <td class="actions">
            <?php echo $this->Html->link('Editar',array('action'=>'edit',$producto['Producto']['id'])); ?>
            <?php echo $this->Form->postLink('Eliminar',array('action' => 'delete',$producto['Producto']['id']),null,'¿Dese eliminar'.$producto['Producto']['nombre'].'?');?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array('format'=>'Pàg. {:page} de {:pages}, {:current} registros de {:count}, {:start} al {:end}'));
        ?>
    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< anterior',array(),null,array('class'=>'prev disabled'));
            echo $this->Paginator->numbers(array('separator'=>''));
            echo $this->Paginator->next('siguiente >',array(),null,array('class'=>'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3>Menu</h3>
    <ul>
        <li><?php echo $this->Html->link('Nuevo Producto',array('action'=>'add')); ?></li>
        <!--li><?php echo $this->Html->link('Marcas',array('controller'=>'marca','action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('Nuevo Marca',array('controller'=>'marcas','action'=>'add')); ?></li-->
    </ul>
</div>