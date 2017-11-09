<div class="header col-md-12">
    <div class="header-line">
        <a href="" title="Về trang chủ">
            <div class="logo-area col-md-3">
                <img src="backend/images/logo.png" alt="Logo">
            </div>
        </a>
        <div class="header-title col-md-7">
            <a href="{{ route('member_schedule') }}">
                @if ($actor == 'member')
                    Góc thành viên
                @elseif ($actor == 'coach')
                    Góc huấn luyện viên
                @else
                    Góc quản trị viên
                @endif
            </a>
        </div>
        <div class="header-menu-right col-md-2">
            <a href="#" class="hidden"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
            <div class="dropdown">
						<span class="dropdown-toggle btn" data-toggle="dropdown">
							Tuyến Xuân
							<i class="fa fa-caret-down" aria-hidden="true"></i>
						</span>
                <ul class="dropdown-menu">
                    <li><a href="">Về trang chủ</a></li>
                    <li><a href="">Quản lý tài khoản</a></li>
                    <li><a href="">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>