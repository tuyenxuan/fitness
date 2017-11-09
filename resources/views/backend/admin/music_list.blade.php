@extends('backend.layout.index', ['actor' => 'admin'])
@section('content')
    <div class="content-title">
        Danh sách nhạc thể hình
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Ngày đăng</th>
                <th>Tiêu đề</th>
                <th>Ảnh mô tả</th>
                <th>Video link</th>
                <th>Xem chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <tr>
                <td>
                    19/11/2017
                </td>
                <td>
                    Top 5 bài tập cho ...
                </td>
                <td>
                    <img width="100px" src="user/images/barbell-front-squat-218x150.jpg" alt="">
                </td>
                <td>
                    https://www.youtube.com/watch?v=VqvGLsmXpQA
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
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
                    19/11/2017
                </td>
                <td>
                    Top 5 bài tập cho ...
                </td>
                <td>
                    <img width="100px" src="user/images/barbell-front-squat-218x150.jpg" alt="">
                </td>
                <td>
                    https://www.youtube.com/watch?v=VqvGLsmXpQA
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
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
                    19/11/2017
                </td>
                <td>
                    Top 5 bài tập cho ...
                </td>
                <td>
                    <img width="100px" src="user/images/barbell-front-squat-218x150.jpg" alt="">
                </td>
                <td>
                    https://www.youtube.com/watch?v=VqvGLsmXpQA
                </td>
                <td>
                    <a href="http://fitness.dev/">
                        Xem chi tiết
                    </a>
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
