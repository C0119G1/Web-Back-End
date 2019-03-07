@extends('layouts.master')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1 style="color:chartreuse">Quản Lý Thành Phố</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                    <th scope="col">Thao tác</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($listcities) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($listcities as $key => $city)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $city->name }}</td>
                            <td>{{ count($city->customers) }}</td>
                            <td><a href="{{ route('City.edit', $city->id) }}">sửa</a>|
                                &nbsp <a href=" {{ route('City.destroy', $city->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('City.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection.
