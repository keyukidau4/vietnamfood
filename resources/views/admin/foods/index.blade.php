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

<body>

    <div class="container">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>NameVN</th>
                    <th>NameJP</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($foods as $food)
                    <th scope="row">{{ $foods->firstItem() + $loop->index }}</th>
                    <td>{{ $food->namevn }}</td>
                    <td>{{ $food->namejp }}</td>
                    <td>{{ $food->price }}</td>
                    <td>
                        <img src="{{ Storage::url($food->image) }}" class="img-fluid" alt="{{ $food->namejp }}">
                    </td>
                    <td>{{ $food->status }}</td>
                @empty
                    <p> 何もない</p>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>
