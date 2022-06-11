@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد اسلایدر</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="link" >لینک</label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">تصویر </label>
                            <input type="file" name="image" id="image" class="form-control">
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
