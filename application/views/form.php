
<form id="myForm" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" name="email" value="">
        <div id="emailvld" class="text-danger" style="display:none;">Email Is Enter</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Textarea</label>
        <input type="text" id="textarea" class="form-control" name="textarea" value="">
        <div id="textareavld" class="text-danger" style="display:none;">Textarea Is Enter</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">File</label>
        <input type="file" class="form-control" name="file">
    </div>
    <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
</form>

   

