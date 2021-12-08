<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h2>Ini dashboard</h2>

    <h3>ini adalah user dengan role: <span class="badge bg-success">{{ auth()->user()->roles }}</span></h3>
    <h3>name user : <span class="badge bg-success">{{ auth()->user()->name }}</span></h3>
    <h3>email user : <span class="badge bg-success">{{ auth()->user()->email }}</span></h3>
    <a href="{{ route('logout') }}" class="btn btn-outline-primary" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">user</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->title }}</td>
                            <td>role : {{ $book->users->roles }} || name: {{ $book->users->name }}</td>
                            <td><button class="btn btn-primary">Edit</button></td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="4" scope="row">Data kosong</th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
