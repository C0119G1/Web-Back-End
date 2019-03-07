@extends('layouts.master')
@section('content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1 style="color:#2a801a" align="center">Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post" action="#">
                @csrf
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <input type="date" class="form-control" name="NgaySinh" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Thành Phố</label>
                    <input type="text" class="form-control" name="city_id" required>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection