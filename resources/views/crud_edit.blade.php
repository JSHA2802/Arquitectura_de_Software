@extends('layout')

@section('crud')

<div class="row m-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">ACTUALIZAR</h3>
            <div class="card-body">
                <form action="{{ route('crud_update', $user->id) }}" method="POST">
            
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="fnom" name="name" placeholder="Nombre" class="form-control" value="{{ $user->name}}" >
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="Lname" name="email" placeholder="Correo" class="form-control" value="{{ $user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="password" id="nom" name="password" placeholder="Password" class="form-control" value="{{ $user->password}}">
                    </div>
                    
                    
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success btn-block">GUARDAR</button>
                        <a class="btn btn-danger btn-block" href="{{ route('cancel')}}">CANCELAR</a>  
                              
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>

@endsection