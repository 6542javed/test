<!-- ebook upload form -->

<div class="modal fade" id="ebookUpload" tabindex="-1" role="dialog" aria-labelledby="ebookUpload" aria-hidden="true">

  <div class=" modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          ×
        </button>
        <h4 style="text-align: center;" class="modal-title" id="ebookUpload">
          Upload Form
        </h4>
      </div>
      <div class="modal-body">
        <form class="form" method="POST" action="uploading.php" enctype="multipart/form-data">
          <div class="form-group">
            <label class="form-label" for="name">Book Name:</label>
            <input class="form-control" type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="author">Author Name:</label>
            <input class="form-control" type="text" id="author" name="author" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="file">Upload File Here:</label>
            <input class="form-control-file" type="file" id="file" name="file" required>
          </div>
        </div>
        <div class="modal-footer">
            <center>
            <button type="submit" class="btn btn-primary" name="button">Upload</button>
            </center>
          </form>
          </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->

</div><!-- /.modal -->




<style media="screen">
#ebookslink:active #ebooks{
  padding:0px;
}  
</style>
