@extends('layouts.admin-master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Ürün Ekleme </strong> Formu
                        </div>
                        <div class="card-body card-block">
<<<<<<< HEAD
                            <form action="{{route('Product.create')}}" method="post" enctype="multipart/form-data">
=======
                            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
                                <div class="form-group">
                                    <label for="exampleName">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                @csrf
                                <input type="file" name="photo" class="form-control">
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" value="Yükle"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
