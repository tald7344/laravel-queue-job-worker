<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Upload Million Records</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body, .container { height: 100vh; }
    </style>
    <div class="container">
        <div class="row h-100 align-content-center">
            <div class="col-12 col-sm-11 col-md-8 col-lg-6 mx-auto">
                <h3 class="text-center mb-4">Upload Million files Using Queue</h3>
                <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="file" class="form-control" name="mycsv" id="mycsv" aria-describedby="mycsvLabel" aria-label="Upload">
                        <button class="btn btn-outline-success" type="submit" id="mycsvLabel">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
