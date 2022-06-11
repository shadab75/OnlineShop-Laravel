@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد نقش</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>انتخاب دسترسی ها</label>
                            <div class="row">
                                @foreach($permissions as $permission)
                                    <label  class="col-sm-1">
                                        <input type="checkbox"
                                               style="opacity: 1!important;position: static!important;left: 0;right: 0"
                                               name="permissions[]" value="{{$permission->id}}">{{$permission->label}}
                                    </label>

                                @endforeach()
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary " value="ثبت">
                        </div>

                    </form>
                    @if(count($errors->all())>0)

                        <ul class="bg-danger">
                            @foreach($errors->all() as $error)

                                <li class="text-white">{{$error}}</li>

                            @endforeach

                        </ul>

                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('admin.layout.errors')
@endsection
