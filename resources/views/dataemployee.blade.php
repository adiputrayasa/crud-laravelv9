<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD laravelv9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Data Employee</h1>
    <div class="container">
        <a href="/addemployee" class="btn btn-outline-success">ADD +</a>
        <div class="row">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
            @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Gender</th>
                    <th scope="col">No. Phone</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @php
                       $no =1;
                   @endphp
                    @foreach ($data as $row)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->name }}</td>
                    <td>
                        <img src="{{ asset('fotoemployee/'.$row->foto) }}" alt="" style="width: 50px;">
                    </td>
                    <td>{{ $row->Gender }}</td>
                    <td>{{ $row->no_phone }}</td>
                    <td>{{ $row->created_at ->format('Y-m-d')}}</td>
                    <td>
                        <a href="/deletedata/{{ $row->id }}"button type="button" class="btn btn-outline-danger">Delete</a>
                        <a href="/showemployee/{{$row->id}}" type="button" class="btn btn-outline-info">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
