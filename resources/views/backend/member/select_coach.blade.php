@extends('backend.layout.index', ['actor' => 'member', 'menu' => 1])
@section('content')
    <div style="margin: 40px 90px">
        <h3>Bạn chưa có huấn luyện viên, hãy chọn 1 huấn luyện</h3>
        <form action="{{ route('member_create_relationship') }}" method="post">
            {{ csrf_field() }}
            <p>
                <select name="coach">
                    @foreach ($coachs as $coach)
                        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                    @endforeach
                </select>
            </p>
            <button type="submit" class="btn button-add">Lưu</button>
        </form>
    </div>
@endsection