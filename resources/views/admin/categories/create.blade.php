@extends('admin.layout.master')



@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h3>ایجاد دسته بندی</h3>
            </div>
            <div class="box-body">
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">دسته والد</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="" disabled selected>دسته والد را انتخاب کنید ....</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" id="title" class="form-control">

                    </div>

                    <div class="form-group">
                        <label>انتخاب گروه ویژگی ها</label>
                        <div class="row">
                            @foreach($properties as $property)
                                <label  class="col-sm-1">
                                    <input type="checkbox"
                                           style="opacity: 1!important;position: static!important;left: 0;right: 0"
                                           name="properties[]" value="{{$property->id}}">{{$property->title}}
                                </label>

                            @endforeach()
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
