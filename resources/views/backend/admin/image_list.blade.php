@extends('backend.layout.index', ['actor' => 'admin'])
@section('content')
    <div class="content-title">
        Danh sách ảnh hệ thống
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>label</th>
                <th>Ảnh</th>
                <th>Mô tả cho ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <tr>
                <td>
                    logo
                </td>
                <td>
                    <img width="400px" src="user/images/logo.png" style="margin: 20px 20px">
                </td>
                <td>
                    Logo trang web
                </td>
                <td>
                    <a href=""><span class="fa fa-edit"></span></a>
                </td>
                <td>
                    <a href=""><span class="fa fa-remove"></span></a>
                </td>
            </tr>
            <tr>
                <td>
                    slide
                </td>
                <td>
                    <img width="400px" src="user/images/giao-an-tap-gym-4-tuan-1.jpg" style="margin: 20px 20px">
                </td>
                <td>
                    Slide 1
                </td>
                <td>
                    <a href=""><span class="fa fa-edit"></span></a>
                </td>
                <td>
                    <a href=""><span class="fa fa-remove"></span></a>
                </td>
            </tr>
            <tr>
                <td>
                    slide
                </td>
                <td>
                    <img width="400px" src="user/images/venum-mass-banner.jpg" style="margin: 20px 20px">
                </td>
                <td>
                    Slide 2
                </td>
                <td>
                    <a href=""><span class="fa fa-edit"></span></a>
                </td>
                <td>
                    <a href=""><span class="fa fa-remove"></span></a>
                </td>
            </tr>
        </table>
    </div>
@endsection
