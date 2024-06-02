<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($this->module); ?> List</title>
</head>
<body>
<h1><?php echo ucfirst($this->module); ?> List</h1>
<a href="index.php?module=<?php echo $this->module; ?>&action=create">Add New</a>
<table border="1">
    <thead>
    <tr>
        <?php foreach (array_keys($data[0]) as $key) { ?>
            <th><?php echo ucfirst($key); ?></th>
        <?php } ?>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $row) { ?>
        <tr>
            <?php foreach ($row as $cell) { ?>
                <td><?php echo $cell; ?></td>
            <?php } ?>
            <td>
                <a href="index.php?module=<?php echo $this->module; ?>&action=show&id=<?php echo $row['id']; ?>">View</a>
                <a href="index.php?module=<?php echo $this->module; ?>&action=edit&id=<?php echo $row['id']; ?>">Edit</a>
                <a href="index.php?module=<?php echo $this->module; ?>&action=delete&id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
