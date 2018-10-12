<!-- File: /app/View/Posts/add.ctp -->

<h1>Add New Device</h1>
<?php
        echo $this->Form->create('Post');
        echo $this->Form->input('name');
        echo $this->Form->input('created');
        echo $this->Form->end('Save Device');
?>

