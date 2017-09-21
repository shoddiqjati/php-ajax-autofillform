
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP AJAX AUTOFILL FORM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <form action="post.php" method="post">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" required>
      </div>
      <div class="form-group">
        <label for="desc">Description:</label>
        <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc" required>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <script>
  $( document ).ready(function() {
    $.getJSON("http://localhost/test/get.php", function(data) {
      $.each( data , function(key, val) {
        if (key == "data" && val != "no data") {
          $("#title").val(data.data.title);
          $("#author").val(data.data.author);
        }
      });
    });
  });
  </script>
</body>
</html>
