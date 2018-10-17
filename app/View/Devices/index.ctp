<!-- File: /app/View/Devices/index.ctp -->
<?php echo $this->Html->script('prototype.js', array('inline' => false)); ?>
<?php echo $this->Html->script('scriptaculous.js', array('inline' => false)); ?>
<?php echo $this->Html->script('helper.js', array('inline' => false)); ?>

<h1>Select Devices</h1>
<?php echo $this->Form->create('Device', array('url' => 'genFile'));
foreach ($devices as $device):
    $deviceDivId = $device['Device']['name'] . "-squish";
    $deviceDivIdWithQ = "'" . $deviceDivId . "'";

    /*echo $this->Form->checkbox($device['Device']['name'], array(
        'value' => $device['Device']['id'])
    );
    echo $this->Form->label($device['Device']['name']);*/

    echo '<input type="checkbox" onclick="toggleDiv(' . $deviceDivIdWithQ . ', this)" name="' . $device['Device']['name'] .'" value="' . $device['Device']['id'] . '">' . $device['Device']['name'] . '<br>';

    echo '<div id=' . $deviceDivId . ' style="display: none";>';
    foreach ($devicesQuestions as $deviceQuestion):
        if($deviceQuestion['DeviceQuestion']['device_id'] ==$device['Device']['id']) {
            //echo $deviceQuestion['DeviceQuestion']['question'];
            echo $this->Form->input($deviceQuestion['DeviceQuestion']['question']);
        }
    endforeach;
    echo '</div>';
endforeach;

echo $this->Form->end('Generate File');
//echo $this->Html->link('Gen File', array('controller' => 'devices', 'action' => 'genFile'));

?>