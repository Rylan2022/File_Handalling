<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    <?php echo form_open_multipart('uploadController2/index'); ?>
    <div class="mb-3 mt-5 mx-2">
        <label for="username" class="form-label">User Name</label>
        <input type="text" name="username" class="form-control">
        <?php echo form_error('username'); ?>
    </div>
    <div class="mb-3 mx-2">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control">
        <?php echo form_error('email'); ?>
    </div>
    <div class="mb-3 mx-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
        <?php echo form_error('password'); ?>
    </div>

    <div class="input-group mb-3 mx-2 mt-4 w-75">
        <input type="file" name="document" class="form-control">
        <label class="input-group-text" for="document">Upload</label>
        <?php echo form_error('document'); ?>
        <?php if (!empty($err)) {
            echo $err;
        }
        ?>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <?php echo form_close(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>