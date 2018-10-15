<!-- File: /app/View/Devices/index.ctp -->
<?php echo $this->Html->script('prototype.js', array('inline' => false)); ?>
<?php echo $this->Html->script('scriptaculous.js', array('inline' => false)); ?>

<h1>Select Devices</h1>
<?php echo $this->Form->create('Device', array('url' => 'genFile'));
foreach ($devices as $device):
    echo $this->Form->checkbox($device['Device']['name'], array(
        'value' => $device['Device']['id'])
    );
    echo $this->Form->label($device['Device']['name']);
    //echo $this->Form->input('DeviceQuestion', array('question' => true));
    //echo $device['Device']['name'];
    echo '<div id="squish_me">';
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


unset($device); ?>

<div id="squish_demo" style="width:80px; height:80px; background:#ccc;"></div>
<ul>
    <li><a href="#" onclick="Effect.Squish('squish_demo'); return false;">Click me for a demo!</a></li>
    <li><a href="#" onclick="$('squish_demo').show(); return false;">Reset</a></li>
</ul>