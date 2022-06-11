@extends('admin.layout.master')



@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h3>ایجاد برند</h3>
            </div>
            <div class="box-body">
                <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" >نام</label>
                        <input type="text" name="name" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر برند</label>
                        <input type="file" name="image" id="image" class="form-control">
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
