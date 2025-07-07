<?php 
defined('BASEPATH')or exit ('No direct script allowed');
?>

<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('NewController/index'); ?>

<label for="username">Name</label>
<input type="text" name="username" value="" size="50" />
<br><br>

<label for="email">Email Address</label>
<input type="text" name="email" value="" size="50" />
<br><br>

<label for="password">Password</label>
<input type="text" name="password" value="" size="50" />
<br><br>


<div><input type="submit" value="Submit" /></div>
<?php echo form_close(); ?>

</body>
</html>