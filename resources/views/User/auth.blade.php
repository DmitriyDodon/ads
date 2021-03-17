<div class="d-flex justify-content-start">
<form method="POST" action="/">
    @csrf
    @if($errors->has('name'))
        @foreach($errors->get('name') as $error)
            <div class="alert alert-danger py-3" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="form-group">
        <label for="name">Username</label>
        <input type="text" name="name" value="{{ old('name') ?? '' }}" class="form-control" id="name" placeholder="Username">
    </div>
    @if($errors->has('password'))
        @foreach($errors->get('password') as $error)
            <div class="alert alert-danger py-3" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary my-2">Submit</button>
</form>
</div>
