<!DOCTYPE html>
<html lang="en">
<head>
  <title>Drag and Drop upload file using Dropzone JS with PHP & Mysqli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/dropzone@5.9.3/dist/min/dropzone.min.css">
    
</head>
<body>
<div class="card text-center" style="padding:20px;">
  <h3>Drag and Drop upload file using Dropzone JS with PHP & Mysqli</h3>
</div><br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <div id="message"></div>
        <form action="upload.php" class="dropzone"></form><br>
        <button class="btn btn-success" style="float: right;" id="uploadBtn">Upload</button>
      </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/dropzone@5.9.3/dist/min/dropzone.min.js"></script>


<script type="text/javascript">
//Disabling autoDiscover
Dropzone.autoDiscover = false;
$(function() {
  //Dropzone class
  var myDropzone = new Dropzone(".dropzone", {
      url: "upload.php",
      paramName: "file",
      parallelUploads:3,
      uploadMultiple:true,
      acceptedFiles: '.png,.jpeg,.jpg',
      autoProcessQueue: false,
      success:function(file, response){
        if (response == "true") {
            $("#message").append("<div class='alert alert-success'>Files Uploaded successfully</div>");
        } else {
            $("#message").append("<div class='alert alert-danger'>Files can not uploaded</div>");
        }
      }
  });
    
  $('#  uploadBtn').click(function(){    
    myDropzone.processQueue();
  });
});
</script>
</body>

</html>