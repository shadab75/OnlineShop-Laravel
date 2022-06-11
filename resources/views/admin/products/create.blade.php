@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد محصول</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                         <div class="form-group">
                             <label for="category_id">دسته بندی</label>
                             <select name="category_id" id="category_id" class="form-control">
                                 <option value="" disabled selected>دسته بندی خود را انتخاب کنید </option>
                                  @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->title}}</option>
                                 @endforeach
                             </select>
                         </div>

                        <div class="form-group">
                            <label for="brand_id">برند</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" disabled selected>برند خود را انتخاب کنید </option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="name" >نام</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="slug" >slug</label>
                            <input type="text" name="slug" id="slug" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="cost" >قیمت</label>
                            <input type="number" name="cost" id="cost" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">تصویر محصول</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea name="description" id="description"  class="form-control"></textarea>

                        </div>
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
