
<?php foreach ($devicesQuestions as $deviceQuestion): ?>
<h1>
    <?php echo $deviceQuestion['DeviceQuestion']['id']; ?>
    <?php echo $deviceQuestion['DeviceQuestion']['question']; ?>
    <?php echo $deviceQuestion['DeviceQuestion']['device_id']; ?>
    <?php echo $deviceQuestion['Device']['name']; ?>
</h1>
<?php endforeach; ?>
<?php unset($deviceQuestion); ?>

<br>
