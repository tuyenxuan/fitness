<div class="header">
    <div class="header-top">
        <div class="social">
            <a href="{{ $youtube->url }}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="{{ $fanpage->url }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
        <div class="right-menu-top">
            <a href="#" class="hidden"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
            <div class="dropdown">
						<span class="dropdown-toggle btn" data-toggle="dropdown">
							Tuyến Xuân
							<i class="fa fa-caret-down" aria-hidden="true"></i>
						</span>
                <ul class="dropdown-menu">
                    <li><a href="#">Quản lý tài khoản</a></li>
                    <li><a href="#">Quản lý bài tập</a></li>
                    <li><a href="#">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-logo">
        <div class="col-md-2">
            <a href="{{ route('home') }}">
                <img src="{{ $logo->url }}" alt="{{ $logo->alt }}" class="logo">
            </a>
        </div>
        <div class="col-md-10">
            <div class="search">
                <input type="text" name="search" placeholder="Tìm kiếm ..." class="input-search">
                <button type="button" class="button-search">
                    Tìm kiếm <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-12 header-nav">
        <ul>
            <li class="item @if (!isset($content)) active @endif"><a href="{{ route('home') }}">Trang chủ</a></li>
            @foreach ($root_categories as $root_category)
                <li class="item @if (isset($content) && $root_category->id == $content->id) active @endif"><a href="{{ route('content', ['category' => $root_category->id]) }}">{{ $root_category->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>