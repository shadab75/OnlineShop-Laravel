@extends('admin.layout.master')







@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ویژگی های محصول {{$product->name}} </h3>
                </div>

                @php

                    $propertyGroups = $product->category->propertyGroups

                @endphp

                <div class="box-body">
                    <form action="{{route('products.properties.store',$product)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @foreach($propertyGroups as $group)
                            <h3>{{$group->title}}</h3>
                            <div class="row">
                                @foreach($group->properties as $property)

                                    <div class="form-group col-6">

                                        <div class="row">
                                            <div class="col-2">
                                                <label for="name">{{$property->title}}</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="properties[{{$property->id}}][value]" value="{{$property->getValueForProduct($product)}}" id="name">
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        @endforeach


                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary " value="ثبت">
                        </div>
                    </form>
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


    @include('admin.layout.errors')
@endsection


