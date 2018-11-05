<h3>Saved Documents</h3>
<table style="width:100%">
    <tr>
        <th>Document Name</th>
        <th>Created On</th>
    </tr>
    <!-- loop through the finished documents info -->
    <?php foreach($finishedDocs as $finishedDoc): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($finishedDoc['FinishedDocument']['document_name'],
            array('controller' => 'FinishedDocuments', 'action' => 'view', $finishedDoc['FinishedDocument']['id'])); ?>
        </td>
        <!--<td><?php echo $finishedDoc['FinishedDocument']['document_name']; ?></td>-->
        <td><?php echo $finishedDoc['FinishedDocument']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($finishedDocs); ?>
</table>
<a href="/devices/">Generate New Document</a>