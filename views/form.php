<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($this->module); ?> Form</title>
</head>
<body>
<h1><?php echo ucfirst($this->module); ?> Form</h1>
<form method="post" action="">
    <?php foreach ($data as $key => $value) { ?>
        <label><?php echo ucfirst($key); ?></label>
        <input type="text" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
        <br>
    <?php } ?>
    <button type="submit">Save</button>
</form>
</body>
</html>
