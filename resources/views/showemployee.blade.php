<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD laravelv9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Edit Data Employee</h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $data->name }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender</label>
                    <select class="form-select" name="Gender" aria-label="Default select example">
                      <option selected>{{ $data->Gender }}</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">No Phone</label>
                    <input type="number" name="no_phone" class="form-control" id="" value="{{ $data->no_phone }}">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label"change photo</label>
                    <input type="file" name="foto" class="form-control" id="" value="{{ $data->foto }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             </div>
            </div>
          </div>    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
