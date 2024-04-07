<a href="<?php echo base_url('welcome/form')?>" class="btn btn-primary float-end m-2">Add</a>
<table class="table table-bordered border-primary">
   <thead>
        <tr>
            <th>Email</th>
            <th>Textarea</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php foreach($get as $row){?>
            <tr>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['textarea']?></td>
                <td><img src="<?php echo base_url()?>/uploads/<?php echo $row['file']?>" style="width:100px;height:100px;"></td>
                <td><a href="<?php echo base_url('welcome/update/'.$row['id']);?>" class="btn btn-success m-2">Edit</a><a href="<?php echo base_url('welcome/delete/'.$row['id']);?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>   
    </thead>
</table>