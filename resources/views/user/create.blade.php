<form id="myForm" action="{{ route('user-store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="userName" name="name" placeholder="Name...">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" id="" name="phone" placeholder="Phone...">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="" name="email" placeholder="Email...">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Password...">
    </div>

    <button type="button" class="btn btn-primary">Back</button>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif