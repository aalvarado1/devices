<!-- File: /app/View/Devices/index.ctp -->

<h1>Select Devices</h1>
<?php echo $this->Form->create('Device', array('url' => 'genFile'));
foreach ($devices as $device):
    echo $this->Form->checkbox($device['Device']['name'], array(
        'value' => $device['Device']['id'])
    );
    echo $this->Form->label($device['Device']['name']);
    //echo $this->Form->input('DeviceQuestion', array('question' => true));
    //echo $device['Device']['name'];
    foreach ($devicesQuestions as $deviceQuestion):
        if($deviceQuestion['DeviceQuestion']['device_id'] ==$device['Device']['id']) {
            //echo $deviceQuestion['DeviceQuestion']['question'];
            echo $this->Form->input($deviceQuestion['DeviceQuestion']['question']);
        }
    endforeach;
endforeach;

echo $this->Form->input('fileName');
echo $this->Form->end('Save Device');
//echo $this->Html->link('Gen File', array('controller' => 'devices', 'action' => 'genFile'));


unset($device); ?>