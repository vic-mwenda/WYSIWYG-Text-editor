<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WYSIWYG Editor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">


</head>

<body>

  <main id="main" class="main">

    <section class="section">

         <form id="editor-form">
           <div class="row">
             <div class="col-lg-12">
               <div class="card">
                <div class="card-body">
                  <input type="hidden" name="editor-content">
                   <div class="quill-editor-full">
                    <p>Hello World!</p>
                    <p>This is Quill <strong>full</strong> editor</p>
                   </div>

                </div>
               </div>
                     <div class="row-cols-3 d-flex justify-content-center">
                       <button class="btn btn-primary" type="submit">Submit</button>
                     </div>
             </div>
           </div>
         </form>
    </section>

  </main>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
	  $("#editor-form").on('submit', function (e) {
		  e.preventDefault();

		  // Populate hidden form on submit
		  var editor_content = document.querySelector('input[name=editor-content]');
		  editor_content.value = JSON.stringify(quill.getContents());

		  var url ="editor-action.php";
		  var form = new FormData(this);

		  $.ajax({
			  type: "POST",
			  url : url,
			  data : form,
			  contentType:false,
			  processData:false,

			  success: function (response) //Response which is come from "editor-action.php" if Query run successfully.
			  {
				  alert("Successfully sent to database");
			  },
			  error: function(response)
			  {
				  alert("Could not send to database");
			  }
		  });
		  return false;
	  });
  </script>


</body>

</html>
