<h3>Document File</h3>
<h2><?php echo $finishedDoc['FinishedDocument']['document_name']; ?></h2>
<pre>
    <?php echo $finishedDoc['FinishedDocument']['document']; ?>
</pre>
<br>
<a href="/devices/">Generate New Document</a> <br><br>
<?php echo $this->Html->css(['mycss'],['media' => 'print']); ?>
<!--
<a href="/devices/devices/">Print Document</a>-->
