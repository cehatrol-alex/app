<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cehatrol</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    </head>
    <body class="bg-light">

    <main class="container">

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Filter</h6>
            <form>
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon2" value="{{$search}}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
            </form>
            <br>
            <div>
                {{ $users->links() }}
            </div><br>
            <div class="card">
                <div class="card-header">
                    Users
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($users as $user)
                        <li class="list-group-item">
                            <img width="50" src="{{$user->avatar->image}}">
                            &nbsp; {{ $user->name }}</li>
                    @endforeach


                </ul>
            </div><br>
            <div>
                {{ $users->links() }}
            </div><br>


        </div>


    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
