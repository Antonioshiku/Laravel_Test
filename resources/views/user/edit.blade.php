<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col mt-5  text-start">
                <div class="text-start w-100 ms-5">
                    <h1 class="fs-5 ps-5">Edit Form</h1>
                </div>
                <form id="myForm" action="{{ route('user-update', ['id' => $Post->id]) }}" method="GET"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3 w-50 text-start ">
                        <label class="form-label ">Name</label>
                        <input type="text" class="form-control " id="userName" name="name"
                            value="{{ $Post->name }}" placeholder="Name...">
                    </div>
                    <div class="mb-3 w-50 text-start">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="" value="{{ $Post->email }}"
                            name="email" placeholder="Email...">
                    </div>
                    <div class="mb-3 w-50 text-start">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="" name="password"
                            placeholder="Password...">
                    </div>

                    <button type="button" class="btn btn-primary">Back</button>
                    <button type="submit" class="btn btn-secondary">Edit</button>
                </form>
            </div>

        </div>
    </div>





    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>


</html>
