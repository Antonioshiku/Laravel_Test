<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    @if (Session('SuccessUpdate'))
        <div class="alert alert-success alert-dismissible show fade">
            <p>{{ Session('SuccessUpdate') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
    @endif

    @if (Session('successDelete'))
        <script>
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Delete',
                denyButtonText: `Don't Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('.DeleteBu').click(function(event) {
                        var form = $(this).closest("form");
                        event.preventDefault();
                        form.submit();
                    });
                } else if (result.isDenied) {
                    window.reload();
                }
            })
        </script>
    @endif

    <table class="table table-striped">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <th scope="row">{{ $user->name }}</th>

                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                <a href="{{ url('user/delete/' . $user->id) }}"> <button
                                        style="font-size: 8px;width:50px;height:30px;" type="button"
                                        class="btn btn-danger DeleteBu">Delete</button></a>
                            </form>
                        </td>
                        <td> <a href="{{ url('user/edit/' . $user->id) }}"> <button id="Deletebu"
                                    style="font-size: 8px;width:50px;height:30px;" type="button"
                                    class="btn btn-secondary">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>


</html>
