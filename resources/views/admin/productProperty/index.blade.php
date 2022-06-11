@extends('admin.layout.master')







@section('content')

    <div class="row">
        <div class="col-6">
            <div class="box">
                <div class="box-header">
                    <h3>ویژگی های محصول {{$product->name}} </h3>
                    <a href="{{route('products.properties.create',$product)}}" class="btn btn-success btn-sm" >تغییر مقادیر ویژگی ها </a>
                </div>


                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>مقدار</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product->properties as $property)
                                <tr>
                                    <td>{{$property->id}}</td>
                                    <td>{{$property->title}}</td>
                                    <td>{{$property->pivot->Value}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            @if(count($errors->all())>0)

                <ul class="bg-danger">
                    @foreach($errors->all() as $error)

                        <li class="text-white">{{$error}}</li>

                    @endforeach

                </ul>

            @endif


        </div>
    </div>



@endsection


