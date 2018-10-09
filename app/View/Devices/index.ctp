<!-- File: /app/View/Devices/index.ctp -->
<h1>Select Devices</h1>
<div>
    <!-- Here is where we loop through our devices array -->
    <?php foreach ($devices as $device): ?>
        <input name=($device['Device']['name']) id=($device['Device']['id']) required="" type="checkbox">
    <?php endforearch; ?>
    <?php unset($device); ?>
</div>

<?php echo $this->Html->link(
    'Save',
    array('controller' => 'devices', 'action' => 'add')
); ?>