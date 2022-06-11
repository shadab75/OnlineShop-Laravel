@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد محصول</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('products.update',$product)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="category_id">دسته بندی</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>دسته بندی خود را انتخاب کنید </option>
                                @foreach($categories as $category)
                                    <option
                                        @if($product->category_id==$category->id)
                                        selected
                                        @endif
                                        value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="brand_id">برند</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" disabled selected>برند خود را انتخاب کنید </option>
                                @foreach($brands as $brand)
                                    <option
                                        @if($product->brand_id==$brand->id) selected
                                        @endif
                                        value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="name" >نام</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label for="slug" >slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{$product->slug}}">
                        </div>

                        <div class="form-group">
                            <label for="cost" >قیمت</label>
                            <input type="number" name="cost" id="cost" class="form-control" value="{{$product->cost}}">
                        </div>

                        <div class="form-group">
                           <div class="row">
                               <div class="col-sm-6">
                                   <label for="image">تصویر محصول</label>
                                   <input type="file" name="image" id="image" class="form-control">
                               </div>
                               <div class="col-sm-6">
                                   <img src="{{str_replace('public','/storage',$product->image)}}" alt="" width="300">
                               </div>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea name="description" id="description"  class="form-control">{{$product->description}}</textarea>

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
