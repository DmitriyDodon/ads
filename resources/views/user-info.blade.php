<div class="card" style="width: 15rem;">
    <div class="card-body">
        <h5 class="card-title">Hello, {{ \Illuminate\Support\Facades\Auth::user()->name }}</h5>
        <a class="btn btn-sm btn-outline-secondary mx-3" href="/logout">Logout</a>
        <a class="btn btn-sm btn-outline-secondary" href="/edit">Create Ad</a>
    </div>
</div>


