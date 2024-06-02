<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($this->module); ?> Detail</title>
</head>
<body>
<h1><?php echo ucfirst($this->module); ?> Detail</h1>
<table border="1">
    <?php foreach ($data as $key => $value) { ?>
        <tr>
            <th><?php echo ucfirst($key); ?></th>
            <td><?php echo $value; ?></td>
        </tr>
    <?php } ?>
</table>
<a href="index.php?module=<?php echo $this->module; ?>&action=edit&id=<?php echo $data['id']; ?>">Edit</a>
<a href="index.php?module=<?php echo $this->module; ?>&action=delete&id=<?php echo $data['id']; ?>">Delete</a>
<a href="index.php?module=<?php echo $this->module; ?>">Back</a>
</body>
</html>
