@extends("layout")

@section("title","Contacto") 

@section("content")
<h1>Contacto</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Crear contacto</h5>
    <form method="POST" action="{{ route('contacto')}}" >
        @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection