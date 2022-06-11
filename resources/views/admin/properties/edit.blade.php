@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد مشخصات</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('properties.update',$property)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$property->title}}">
                            <div class="form-group">
                                <label for="property_group_id">گروه ویژگی</label>
                                <select name="property_group_id" id="property_group_id" class="form-control">
                                    <option value="" disabled selected>گروه ویژگی را انتخاب کنید ....</option>
                                    @foreach($groups as $group)
                                        <option
                                            @if($group->id==$property->property_group_id)
                                                selected
                                            @endif
                                            value="{{$group->id}}">{{$group->title}}</option>
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
