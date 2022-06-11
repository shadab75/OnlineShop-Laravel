@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد گروه مشخصات</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('propertyGroups.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" name="title" id="title" class="form-control">

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
