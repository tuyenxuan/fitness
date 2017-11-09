@extends('backend.layout.index', ['actor' => 'member'])
@section('content')
    <div class="content-title">
        Viết báo cáo tập luyện
    </div>
    <div class="new-report">
        <div class="base-input">
            <div class="col-md-12 block-input">
                <div class="col-md-3 title">
                    Ngày báo cáo
                </div>
                <div class="col-md-9">
                    <input type="date"  class="input">
                </div>
            </div>
            <div class="col-md-12 block-input">
                <div class="col-md-3 title">
                    Tiêu đề
                </div>
                <div class="col-md-9">
                    <input type="text"  class="input">
                </div>
            </div>
            <div class="col-md-12 block-input">
                <div class="col-md-3 title">
                    Huấn luyện viên
                </div>
                <div class="col-md-9">
                    <select name="" id="" class="input">
                        <option value="">Tô Minh Phong</option>
                        <option value="">Tô Minh Phong</option>
                        <option value="">Tô Minh Phong</option>
                        <option value="">Tô Minh Phong</option>
                        <option value="">Tô Minh Phong</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 block-input">
                <div class="col-md-3 title">
                    Nội dung
                </div>
                <div class="col-md-6">
                    <textarea name="" id="" cols="30" rows="3"  class="input"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Chiều cao
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                cm
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Cân nặng
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                kg
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Vòng ngực
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                cm
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Vòng eo
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                cm
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Vòng mông
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                cm
            </div>
        </div>
        <div class="col-md-12 block-input">
            <div class="col-md-3 title">
                Mỡ thừa
            </div>
            <div class="col-md-5">
                <input type="text"  class="input">
            </div>
            <div class="col-md-3 unit">
                cm
            </div>
        </div>
    </div>
@endsection
