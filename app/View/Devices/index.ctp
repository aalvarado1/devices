<!-- File: /app/View/Devices/index.ctp -->
<?php echo $this->Html->script('prototype.js', array('inline' => false)); ?>
<?php echo $this->Html->script('scriptaculous.js', array('inline' => false)); ?>
<?php echo $this->Html->script('helper.js', array('inline' => false)); ?>

<h3>Select Devices</h3>
<?php echo $this->Form->create('Device', array('url' => 'genFile'));
foreach ($devices as $device):
    $deviceDivId = $device['Device']['name'] . "-squish";
    $deviceDivIdWithQ = "'" . $deviceDivId . "'";
    $deviceDivName = "data[Device][" . $device['Device']['name'] . "]";


    echo '<input type="hidden" name="' . $deviceDivName . '" id="' . $device['Device']['name'] . '_" value="0">';
    echo '<input type="checkbox" onclick="toggleDiv(' . $deviceDivIdWithQ . ', this)" name="' . $deviceDivName .'" value="' . $device['Device']['id'] . '">' . $device['Device']['name'] . '<br>';

    echo '<div id=' . $deviceDivId . ' style="display: none";>';
    foreach ($devicesQuestions as $deviceQuestion):
        if($deviceQuestion['DeviceQuestion']['device_id'] ==$device['Device']['id']) {
            echo $this->Form->input($deviceQuestion['DeviceQuestion']['id'], array(
                'label' => $deviceQuestion['DeviceQuestion']['question']
            ));
        }
    endforeach;
    echo '</div>';
endforeach;

echo $this->Form->end('Generate File');
?>
<a href="/devices/finisheddocuments/">View Saved Documents</a>