<!-- File: /app/View/Devices/index.ctp -->
<h1>Select Devices</h1>
<div>
    <!-- Here is where we loop through our devices array -->
    <?php foreach ($devices as $device): ?>
    <div>
        <ul>
            <li>
                <?php echo $device['Device']['name']; ?>
            </li>
        </ul>
    </div>
    <?php endforeach; ?>
    <?php unset($device); ?>
</div>

<h1>Radio button test</h1>
<?php echo $form->input(
    $device['Device']['name'],
    array(
        'type' => 'radio',
        'id' => $device['Device']['id'],
        'name' => $device['Device']['name'],
        'options' => array(1,2,3),
    )
);?>


<h1>Devices List- Old table</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($devices as $device): ?>
    <tr>
        <td><?php echo $device['Device']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($device['Device']['name'],
            array('controller' => 'devices', 'action' => 'view', $device['Device']['id'])); ?>
        </td>
        <td><?php echo $device['Device']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($device); ?>
</table>

<?php echo $this->Html->link('Save', array('controller' => 'devices', 'action' => 'add')); ?>