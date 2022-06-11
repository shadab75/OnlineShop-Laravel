@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد مشخصات</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('properties.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" name="title" id="title" class="form-control">
                            <div class="form-group">
                                <label for="property_group_id">گروه مشخصات</label>
                                <select name="property_group_id" id="property_group_id" class="form-control">
                                    <option value="" disabled selected>گروه ویژگی را انتخاب کنید ....</option>
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->title}}</option>
                                    @endforeach

                                </select>
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
