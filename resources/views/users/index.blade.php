@extends('layouts.admin-master')

@section('content')
<<<<<<< HEAD
=======
    <div class="section__content section__content--p30">
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>photo</th>
                        <th>name</th>
<<<<<<< HEAD
                        <th class="text-right">price</th>
                        <th class="text-right">created_by</th>
=======
                        <th class="text-right">email</th>
                        <th class="text-right">Delete</th>
                        <th class="text-right">Update</th>
                        <th class="text-right">Indir</th>
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
<<<<<<< HEAD
                            <td><img src="{{asset('/uploads/products/').'/'.$product->photo}}" width="200px" height="200px"/></td>
                            <td>{{$product->name}}</td>
                            <td class="text-right">{{$product->price}}</td>
                            <td class="text-right">{{$product->user[0]->name}}</td>
=======
                            <td>{{$user->updated_at}}</td>
                            <td>{{$user->name}}</td>
                            <td class="text-right">{{$user->email}}</td>
                            <td class="text-right"><a href="">SİL</a> </td>
                            <td class="text-right"><a href="/guncelle/{{$user->id}}">GÜNCELLE</a> </td>
                            <td class="text-right"><a href="/indir">İNDİR</a></td>
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </div>
    </div>
<<<<<<< HEAD
=======
    </div>
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32

@endsection
