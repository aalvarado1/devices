<!-- File: /app/View/Devices/index.ctp -->
<h1>Select Devices</h1>
<div>
    <!-- Here is where we loop through our devices array -->
    <?php foreach ($devices as $device): ?>
        <input name=($device['Device']['name']) id=($device['Device']['id']) required="" type="checkbox">
    <?php endforearch; ?>
    <?php unset($device); ?>
</div>
<table>




    <div>
        $options = $devices
        echo $form->input('Device.name', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
    </div>
    <?php foreach ($devices as $device): ?>
    <tr>

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
    'Save',
    array('controller' => 'devices', 'action' => 'add')
); ?>