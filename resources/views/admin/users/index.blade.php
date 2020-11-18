<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    center {
        text-align: center
    }

</style>

<body>
    <div class="container">
        <h2>User Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Name</th>
                    <th>PHONENUMBER</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                @empty
                    <p> 何もない</p>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>
