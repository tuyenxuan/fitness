@extends('backend.layout.index', ['actor' => 'coach'])
@section('content')
    <div class="content-title">
        Danh sách đánh giá đã gửi
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Ngày gửi</th>
                <th>Tiêu đề</th>
                <th>Thành viên</th>
                <th>Kết quả</th>
                <th>Xem chi tiết</th>
            </tr>
            <tr>
                <td>
                    19/11/2017
                </td>
                <td>
                    Đánh giá kết quả
                </td>
                <td>
                    Tô Minh Phong
                </td>
                <td>
                    Tốt
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    19/11/2017
                </td>
                <td>
                    Đánh giá kết quả
                </td>
                <td>
                    Tô Minh Phong
                </td>
                <td>
                    Chưa tốt
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    19/11/2017
                </td>
                <td>
                    Đánh giá kết quả
                </td>
                <td>
                    Tô Minh Phong
                </td>
                <td>
                    Đạt
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
                </td>
            </tr>
        </table>
    </div>
@endsection
