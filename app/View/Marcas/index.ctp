<div class="marcas index">
   <h2>Marcas</h2>
   <table cellpadding="0" cellspacing="0">
       <tr>
           <th><?php echo $this->Paginator->sort('id'); ?></th>
           <th><?php echo $this->Paginator->sort('nombre'); ?></th>
           <th class="actions">Acciones</th>
       </tr>
       <?php foreach ($marcas as $marca): ?>
       <tr>
           <td><?php echo $marca['Marca']['id'];?></td>
           <td><?php echo $marca['Marca']['nombre'];?></td>
               <td class="actions">
                  <?php echo $this->Html->link('Editar',array('action'=>'edit',$marca['Marca']['id']));?>
                  <?php echo $this->Form->postLink('Eliminar',array('action'=> 'delete',$marca['Marca']['id']),null,'¿Quiere eliminar '.$marca['Marca']['nombre'].'?');?>
               </td>
       </tr>
       <?php endforeach;?>
   </table>
   <p>
       <?php
        echo $this->Paginator->counter(array('format' => 'Pág. {:page} de {:pages},{:current} registros de {:count}, del {:start} al {:end}'));
       ?>
   </p>
   <div class="paging">
       <?php
       echo $this->Paginator->prev('< anterior',array(),null,array('class' =>'prev disabled'));
       echo $this->Paginator->numbers(array('separator'=>''));
       echo $this->Paginator->next('siguiente >',array(),null,array('class' => 'next disabled'));
       ?>
   </div>
</div>
<div class="actions">
    <h3>Menu</h3>
    <ul>
        <li><?php echo $this->Html->link('Nueva Marca',array('action'=>'add')); ?></li>
    </ul>
</div>