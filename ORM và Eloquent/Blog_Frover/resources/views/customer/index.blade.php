@extends('layouts.master')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1 style="color:chartreuse" align="center">Danh sách Khách hàng</h1>
            </div>
            <div class="col-md-12">

                <form class="navbar-form navbar-right" action="{{ route('customers.search') }}">
                    @csrf
                    <div class="row">
                        <div>
                            <div>
                                <input type="text" class="form-control" name="keyword" placeholder="Search" size="50">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-" style="color:red"> Tìm Kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="color:orangered">Tên khách hàng</th>
                    <th scope="col" style="color:blue">Ngày Sinh</th>
                    <th scope="col" style="color:red">Email</th>
                    <th scope="col"style="color:green">Thành phố</th>
                    <th scope="col"style="color:purple">Thao tác</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($listcustomer) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($listcustomer as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td style="color:red">{{ $customer->name }}</td>
                            <td>{{ $customer->NgaySinh }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{  $customer->city->name }}</td>
                            <td><a href="{{route('customer.edit',$customer->id)}}">sửa</a> |
                                &nbsp <a href="{{  route('customer.delete',$customer->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
            <a class="btn btn-primary" href="{{  route('customer.create') }}">Thêm mới</a>

        </div>
    <div class="col-md-12">
        <div class="pagination float-right">
            {{ $listcustomer->appends(request()->query()) }}
        </div>
    </div>

    </div>

@endsection.
