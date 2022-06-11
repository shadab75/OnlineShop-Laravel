@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h3>ایجاد تخفیف</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('products.discount.store',$product)}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="value" >مقدار</label>
                            <input type="number" name="value" max="100" min="1" id="value" class="form-control">
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
