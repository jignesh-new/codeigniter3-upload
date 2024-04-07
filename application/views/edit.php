<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
<?php echo validation_errors("<div class='text-danger'>","</div>");?>
    <form  action="<?php echo base_url('welcome/update/' . $edit->id); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="hidden" class="form-control" value="<?php echo $edit->id?>" name="id">
            <input type="email" class="form-control" value="<?php echo $edit->email?>" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">textarea</label>
            <input type="text" class="form-control" value="<?php echo $edit->textarea?>" name="textarea">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">file</label>
            <input type="file" class="form-control"  name="file">
            <img src="<?php echo base_url()?>/uploads/<?php echo $edit->file?>" style="width:100px;height:100px;">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>