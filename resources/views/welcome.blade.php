<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
    <script src="./js/app.js" defer></script>
    <title>Import CSV-Excel</title>
    
</head>
<body>
    
    <h4 class="text-center mt-2">Import Excel and CSV into your Database</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('message')
                <div class="card shadow-lg">
                    <div class="card-header">Upload File</div>
                    <div class="card-body">
                        <div class="row">
                            <div>
                                <form action="/csv" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class ="form-group mb-2">
                                        <label for="">Import Exam CSV Data</label>
                                        <input type="file"name="csv" class="form-control">
                                     </div>    
                                    <button class="btn btn-success btn-sm">Upload CSV</button>
                                </form>
                                
                                <form action="/excel" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-3 mb-2">
                                        <label for="">Import Student Excel Data</label>
                                        <input type="file" name ="excel" class="form-control">
                                    </div>
                                    <button class="btn btn-secondary btn-sm">Upload Excel</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>