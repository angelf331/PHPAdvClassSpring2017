<!--gets data from addressCRUD and displays it in a table here-->
<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<h1>Address List</h1>
<table class="table table-striped table-hover">
<?php foreach( $addresses as $row ) : ?>
    <tr>
        <td><?php echo $row['fullname']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['addressline1']; ?> </td>
        <td><?php echo $row['city']; ?> </td>
        <td><?php echo $row['state']; ?> </td>
        <td><?php echo $row['zip']; ?> </td>
        <td><?php echo date("F j, Y",  strtotime($row['birthday'])); ?> </td>
    </tr>
<?php endforeach; ?>
</table>
<a href="add-address.php">Add Address</a>
<?php endif; ?>
