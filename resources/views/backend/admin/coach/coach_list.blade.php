@extends('backend.layout.index', ['actor' => 'admin', 'menu' => 2])
@section('content')
    <div class="content-title">
        Danh sách huấn luyện viên
    </div>
    <div class="col-md-8">
        <a href="{{ route('admin_show_create_coach') }}" class="btn button-add">Thêm HLV</a>
    </div>
    <div class="col-md-4">
        <form action="{{ route('admin_coach_search') }}">
            <div class="search-area">
                <input type="search" name="search" placeholder="Tìm kiếm" class="search-input" title="Nhập tên thành viên" value="{{ isset($search) ? $search : null }}">
                <span class="button-search"></span>
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Họ và tên</th>
                <th><center>Giới tính</center></th>
                <th><center>Ngày sinh</center></th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th><center>Số thành viên</center></th>
                <th><center>Xem chi tiết</center></th>
                <th><center>Sửa</center></th>
                <th><center>Xóa</center></th>
            </tr>
            @foreach ($coachs as $coach)
                <tr>
                    <td>
                        {{ $coach->name }}
                    </td>
                    <td align="center">
                        {{ $coach->gender ? 'nam' : 'nữ' }}
                    </td>
                    <td align="center">
                        {{ $coach->year_of_birth }}
                    </td>
                    <td>
                        {{ $coach->email }}
                    </td>
                    <td>
                        {{ $coach->address }}
                    </td>
                    <td align="center">
                        {{ App\Model\User::where('coach_id', $coach->id)->count() }}
                    </td>
                    <td  align="center">
                        <a href="{{ route('admin_show_coach_detail', ['coach_id' => $coach->id]) }}">
                            Xem chi tiết
                        </a>
                    </td>
                    <td align="center">
                        <a href="{{ route('admin_show_update_coach', ['coach_id' => $coach->id]) }}"><span class="fa fa-edit"></span></a>
                    </td>
                    <td align="center">
                        <a class="delete" style="cursor: pointer"><input type="hidden" class="del_url" value="{{ route('admin_action_delete_coach', ['coach_id' => $coach->id]) }}"><span class="fa fa-remove"></span></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $coachs->links() }}
    </div>
    <script>
        $('.delete').on('click', function () {
            var del_url = $(this).find('.del_url').val();
            if (confirm("Bạn có chắc chắn muốn xóa ?") == true) {
                $(this).attr('href', del_url);
            }
        });
    </script>
@endsection
