@extends('layouts.app')

@section('title')

@section('content')


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">id</th>
                <th scope="col" class="text-center">title</th>
                </th>
                <th scope="col" class="text-center">Price</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <th scope="row" class="text-center col-16">{{ $item->id }}</th>
                    <td class="text-center col-4">{{ $item->title }}</td>
                    <td class="text-center col-4">{{ $item->price }}</td>
                    <td class="align-items-center">
                        <div class="row">
                            <div class=" col col-ms-8">
                                <form action="{{ route('products.edit',$item->id) }}" >
                                    <button type="submit" class=" btn btn-ms btn-warning">
                                        <i class="bi bi-pen"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="col col-ms-8">
                                <form action="{{ route('products.destroy',$item->id) }}" method="POST">
                                    @csrf @method('delete')
                                    <button type="submit" class=" btn btn-ms btn-danger">
                                        <i class="bi bi-trash2"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
