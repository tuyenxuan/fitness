<div class="left-menu col-md-3">
    <div class="col-md-11">
        <ul>
            <li>
                <div class="search-area">
                    <input type="search" placeholder="Tìm kiếm" class="search-input">
                        <span class="button-search">
                        <button><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </li>
            @if ($actor == 'member')
                <div class="menu">
                    <a href="{{ route('member_schedule') }}">
                        <li class="active">
                            Lịch tập luyện
                        </li>
                    </a>
                    <a href="{{ route('member_report') }}">
                        <li>
                            Báo cáo hàng tuần
                        </li>
                    </a>
                    <a href="{{ route('member_create_report') }}">
                        <li>
                            Viết báo cáo
                        </li>
                    </a>
                    <a href="{{ route('member_review') }}">
                        <li>
                            Nhận xét
                        </li>
                    </a>
                </div>
            @elseif ($actor == 'coach')
                <div class="menu">
                    <a href="{{ route('coach_schedule') }}">
                        <li class="active">
                            Lịch làm việc
                        </li>
                    </a>
                    <a href="{{ route('coach_report_list') }}">
                        <li>
                            Xem báo cáo
                        </li>
                    </a>
                    <a href="{{ route('coach_member_list') }}">
                        <li>
                            Danh sách thành viên
                        </li>
                    </a>
                    <a href="{{ route('coach_review_list') }}">
                        <li>
                            Đánh giá kết quả
                        </li>
                    </a>
                    <a href="{{ route('coach_excercise_list') }}">
                        <li>
                            Quản lý bài tập
                        </li>
                    </a>
                </div>
            @else
                <div class="menu">
                    <a href="{{ route('admin_dashboard') }}">
                        <li class="active">
                            QL thành viên
                        </li>
                    </a>
                    <a href="{{ route('admin_coach_list') }}">
                        <li>
                            QL huấn luyện viên
                        </li>
                    </a>
                    <a href="{{ route('admin_excercise_list') }}">
                        <li>
                            QL bài tập
                        </li>
                    </a>
                    <a href="{{ route('admin_post_list') }}">
                        <li>
                            QL bài viết
                        </li>
                    </a>
                    <a href="{{ route('admin_music_list') }}">
                        <li>
                            QL nhạc
                        </li>
                    </a>
                    <a href="{{ route('admin_image_system_list') }}">
                        <li>
                            QL logo/ảnh
                        </li>
                    </a>
                    <a href="{{ route('admin_system_infos') }}">
                        <li>
                            QL thông tin hệ thống
                        </li>
                    </a>
                </div>
            @endif
        </ul>
    </div>
</div>