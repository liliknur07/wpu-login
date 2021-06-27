<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <form action="<?= base_url('upload/add_upload'); ?>" enctype='multipart/form-data' method="post">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email_id" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email_id" name="email_id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filename" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="filename" name="filename">
                            <label class="custom-file-label" for="filename">Choose file</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->