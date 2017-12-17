@extends('backend.layout.index', ['actor' => 'coach', 'menu' => 3])
@section('content')
    <div class="content-title">
        Thông tin member {{ $member->name }}
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Mục</th>
                <th>Nội dung</th>
            </tr>
            <tr>
                <td>
                    Họ và tên
                </td>
                <td>
                    {{ $member->name }}
                </td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td>
                    {{ $member->gender ? 'nam' : 'nữ' }}
                </td>
            </tr>
            <tr>
                <td>
                    Năm sinh
                </td>
                <td>
                    {{ $member->year_of_birth }}
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    {{ $member->email }}
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ
                </td>
                <td>
                    {{ $member->address }}
                </td>
            </tr>
        </table>
    </div>
    <br><br>
    <div class="content-title">
        Lịch luyện tập
    </div>
    <div class="col-md-12">
        <a href="{{ route('admin_show_create_member_schedule', ['member_id' => $member->id]) }}" class="btn button-add">Thêm bài tập</a>
    </div>
    <div class="report-content">
        <table>
            <tr>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Nội dung</th>
                <th>Chú ý</th>
                <th>Bài tập</th>
            </tr>
            @foreach ($member_schedules as $member_schedule)
                <tr>
                    <td>
                        {{ date('d/m/Y', strtotime($member_schedule->start_date)) }}
                    </td>
                    <td>
                        {{ date('d/m/Y', strtotime($member_schedule->end_date)) }}
                    </td>
                    <td title="{{ $member_schedule->title }}">
                        {{ str_limit($member_schedule->title, $limit = 25, $end = '...') }}
                    </td>
                    <td title="{{ $member_schedule->description }}">
                        {{ str_limit($member_schedule->description, $limit = 25, $end = '...') }}
                    </td>
                    <td title="{{ $member_schedule->excercise->title }}">
                        {{ str_limit($member_schedule->excercise->title, $limit = 40, $end = '...') }}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $member_schedules->links() }}
    </div>
@endsection
