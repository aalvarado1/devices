<h1>Devices List</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($devices as $device): ?>
    <tr>
        <td><?php echo $device['name']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($device['name']['id'],
            array('controller' => 'posts', 'action' => 'view', $device['name']['id'])); ?>
        </td>
        <td><?php echo $device['name']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($device); ?>
</table>