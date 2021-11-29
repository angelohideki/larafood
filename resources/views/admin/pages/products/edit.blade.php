@extends('adminlte::page')

@section('title', "Editar a categoria {$product->title}")

@section('content_header')
    <h1>Editar o produto {{ $product->title }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.pages.product._partials.form')
            </form>
        </div>
    </div>
@endsection
