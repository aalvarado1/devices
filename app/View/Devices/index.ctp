<!-- File: /app/View/Devices/index.ctp -->
<?php echo $this->Html->script('prototype.js', array('inline' => false)); ?>
<?php echo $this->Html->script('scriptaculous.js', array('inline' => false)); ?>
<?php echo $this->Html->script('helper.js', array('inline' => false)); ?>

<h1>Select Devices</h1>
<?php echo $this->Form->create('Device', array('url' => 'genFile'));
foreach ($devices as $device):
    $deviceDivId = $device['Device']['name'] . "-squish";
    $deviceDivIdWithQ = "'" . $deviceDivId . "'";
    //$deviceDivIdString= "$"."device['Device']['name']";
    //echo $deviceDivIdString;

    /*echo $this->Form->checkbox($device['Device']['name'], array(
        'value' => $device['Device']['id'])
    );
    echo $this->Form->label($device['Device']['name']);*/

    $deviceDivName = "data[Device][" . $device['Device']['name'] . "]";
    //echo $deviceDivName;
    echo '<input type="hidden" name="' . $deviceDivName . '" id="' . $device['Device']['name'] . '_" value="0">';
    echo '<input type="checkbox" onclick="toggleDiv(' . $deviceDivIdWithQ . ', this)" name="' . $deviceDivName .'" value="' . $device['Device']['id'] . '">' . $device['Device']['name'] . '<br>';

    echo '<div id=' . $deviceDivId . ' style="display: none";>';
    foreach ($devicesQuestions as $deviceQuestion):
        if($deviceQuestion['DeviceQuestion']['device_id'] ==$device['Device']['id']) {
            //echo $deviceQuestion['DeviceQuestion']['question'];
            echo $this->Form->input($deviceQuestion['DeviceQuestion']['id'], array(
                'label' => $deviceQuestion['DeviceQuestion']['question']
            ));
        }
    endforeach;
    echo '</div>';
endforeach;

echo $this->Form->end('Generate File');

?>