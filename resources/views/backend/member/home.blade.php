@extends('backend.layout.index', ['actor' => 'member', 'menu' => 1])
@section('content')
    <div class="box-schedule day yesterday">
        <div class="title">
            {{ date('d-m', time() - 3 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_3days_agos as $lesson_3days_ago )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_3days_ago->title }}">
                        {{ str_limit($lesson_3days_ago->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_3days_ago->start_time }} {{ $lesson_3days_ago->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_3days_ago->description }}">
                        {{ str_limit($lesson_3days_ago->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_3days_ago->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day yesterday">
        <div class="title">
            {{ date('d-m', time() - 2 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_2days_agos as $lesson_2days_ago )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_2days_ago->title }}">
                        {{ str_limit($lesson_2days_ago->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_2days_ago->start_time }} {{ $lesson_2days_ago->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_2days_ago->description }}">
                        {{ str_limit($lesson_2days_ago->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_2days_ago->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day yesterday">
        <div class="title">
            {{ date('d-m', time() - 1 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_1days_agos as $lesson_1days_ago )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_1days_ago->title }}">
                        {{ str_limit($lesson_1days_ago->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_1days_ago->start_time }} {{ $lesson_1days_ago->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_1days_ago->description }}">
                        {{ str_limit($lesson_1days_ago->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_1days_ago->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day today">
        <div class="title">
            Hôm nay
        </div>
        <div class="lesson-block">
            @foreach ($lesson_todays as $lesson_today )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_today->title }}">
                        {{ str_limit($lesson_today->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_today->start_time }} {{ $lesson_today->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_today->description }}">
                        {{ str_limit($lesson_today->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_today->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day tomorrow">
        <div class="title">
            {{ date('d-m', time() + 1 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_next_1days as $lesson_next_1day )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_1days_ago->title }}">
                        {{ str_limit($lesson_next_1day->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_next_1day->start_time }} {{ $lesson_next_1day->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_next_1day->description }}">
                        {{ str_limit($lesson_next_1day->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_next_1day->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day tomorrow">
        <div class="title">
            {{ date('d-m', time() + 2 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_next_2days as $lesson_next_2day )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_next_2day->title }}">
                        {{ str_limit($lesson_next_2day->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_next_2day->start_time }} {{ $lesson_next_2day->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_next_2day->description }}">
                        {{ str_limit($lesson_next_2day->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_next_2day->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-schedule day tomorrow">
        <div class="title">
            {{ date('d-m', time() + 3 * 86400) }}
        </div>
        <div class="lesson-block">
            @foreach ($lesson_next_3days as $lesson_next_3day )
                <div class="lesson">
                    <div class="lesson-title" title="{{ $lesson_next_3day->title }}">
                        {{ str_limit($lesson_next_3day->title, $limit = 14, $end = '...') }}
                    </div>
                    <div class="lesson-time">
                        {{ $lesson_next_3day->start_time }} {{ $lesson_next_3day->end_time }}
                    </div>
                    <div class="lesson-content" title="{{ $lesson_next_3day->description }}">
                        {{ str_limit($lesson_next_3day->description, $limit = 40, $end = '...') }}
                    </div>
                    <div class="view-lesson">
                        <a href="{{ route('show_excercise_detail', $lesson_next_3day->id) }}" target="_blank">Xem bài học</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
