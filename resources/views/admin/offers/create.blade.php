@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد کد تخفیف</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('offers.store')}}" method="post">
                        @csrf


                        <div class="form-group">
                            <label for="code">کد</label>
                            <input type="text" name="code" id="code" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="starts_at">تاریخ آغاز</label>
                            <input type="date" name="starts_at" id="starts_at" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="expires_at">تاریخ پایان</label>
                            <input type="date" name="expires_at" id="expires_at" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-sm btn-primary " value="ثبت">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(count($errors->all())>0)

        <ul class="bg-danger">
            @foreach($errors->all() as $error)

                <li class="text-white">{{$error}}</li>

            @endforeach

        </ul>

    @endif
    @include('admin.layout.errors')
@endsection
