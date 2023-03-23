@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card  mb-3">
            <h5 class="card-header text-center">AGREGAR PRODUCTO</h5>
            <div class="card-body">
                <p>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title"
                            placeholder="Nombre del Producto">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" name="price"
                            placeholder="Precio del Producto">
                    </div>

                    <div class="container row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" >Send</button>
                        </div>
                        <div class="col">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            Return</a>
                        </div>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
@endsection
