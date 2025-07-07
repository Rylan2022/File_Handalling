<?php
defined('BASEPATH') or exit('No direct script allowed');
?>

<html>

<head>
    <title>My Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
</head>

<body>


    <?php echo form_open_multipart('NewController/index'); ?>

    <div class="mb-3 mt-5 mx-4 w-75">
        <label for="username" class="form-label">Name</label>
        <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="">
        <?php echo form_error('username'); ?>
    </div>

    <div class="mb-3 mx-4 w-75">
        <label for="email">Email Address</label>
        <input type="text" name="email" class="form-control" value="" size="50" />
    </div>

    <div class="mb-3 mx-4 w-75">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control mx-2" value="" size="50" />
    </div>

    <div class="input-group mb-3 mx-4 w-75">
        <input type="file" name="document" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>


    <div><input type="submit" class="btn btn-success px-3 mx-4 w-25" value="Submit" /></div>
    <?php echo form_close(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>