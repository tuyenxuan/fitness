@extends('backend.layout.index', ['actor' => 'admin'])
@section('content')
    <div class="content-title">
        Danh sách thông tin hệ thống
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Label</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Link</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <tr>
                <td>
                    about
                </td>
                <td>
                    Giới thiệu
                </td>
                <td>
                    Thể Hình Channel là kênh hướng dẫn các bạn Gymer tập luyện, ...
                </td>
                <td>
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
                    fanpage
                </td>
                <td>
                    Facebook
                </td>
                <td>
                    https://www.facebook.com/
                </td>
                <td>
                    https://www.facebook.com/
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
