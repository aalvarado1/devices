<!-- File: /app/View/Devices/index.ctp -->
<h1>Devices List</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <div>
        $options = $devices
        echo $form->input('Device.name', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
    </div>
    <?php foreach ($devices as $device): ?>
    <tr>
            <div>
                <input name=($device['Device']['name']) id=($device['Device']['id']) required="" type="checkbox">
            </div>
        <td>
            <?php echo $this->Html->link($device['Device']['name'],
            array('controller' => 'devices', 'action' => 'view', $device['Device']['id'])); ?>
        </td>
        <td><?php echo $device['Device']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($device); ?>
</table>

<?php echo $this->Html->link(
    'Add New Device',
    array('controller' => 'devices', 'action' => 'add')
); ?>