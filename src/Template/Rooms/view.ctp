<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
         <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>  
   </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
    </table>
    </table>
        <div class="related">
            <h4><?= __('Related Showtimes this week') ?></h4>
            <ul>
            <table>            
                <tr>
                    <?php foreach($days as $day): ?>
                        <td> <?= h($day) ?> </td> 
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <?php for($i=1;$i<=7;$i++): ?>
                        <td>
                            <?php if(isset($week[$i])): ?>
                                <?php foreach($week[$i] as $value): ?>
                                        <ul>
                                             <?= h($value->movie->name)?><br>
                                             debut : <?= h($value->start->format('H:i')) ?><br>
                                             fin : <?= h($value->end->format('H:i')) ?> 
                                        </ul> 
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>              
            </table>
            </ul>
        </div>
</div>