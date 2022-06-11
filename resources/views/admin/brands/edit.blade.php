@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ویرایش برند {{$brand->name}} </h3>
                </div>
                <div class="box-body">
                    <form action="{{route('brands.update',$brand)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name" >نام</label>
                            <input type="text" name="name" id="title" class="form-control" value="{{$brand->name}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="image">تصویر برند</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{str_replace('public','/storage',$brand->image)}}" width="70" alt="">

                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary " value="ثبت">
                        </div>
                    </form>
                </div>
            </div>




        </div>
    </div>


    @include('admin.layout.errors')
@endsection
