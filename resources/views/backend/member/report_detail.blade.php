@extends('backend.layout.index', ['actor' => 'member', 'menu' => 2])
@section('content')
    <div class="content-title">
        Nội dung chi tiết báo cáo {{ $report->title }}
    </div>
    <div class="report-content">
        <div class="report-content">
            <table>
                <tr>
                    <th>Mục</th>
                    <th>Nội dung</th>
                </tr>
                <tr>
                    <td>
                        Ngày báo cáo
                    </td>
                    <td>
                        {{ $report->create_date }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Tiêu đề
                    </td>
                    <td>
                        {{ $report->title }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Huấn luyện viên
                    </td>
                    <td>
                        {{ $coach->name }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Nội dung
                    </td>
                    <td>
                        {{ $report->content }}
                    </td>
                </tr>
                @foreach ($measurement_reports as $measurement_report)
                    <tr>
                        <td>{{ $measurement_report->measurement->display_name }}</td>
                        <td>{{ $measurement_report->measure }} ({{ $measurement_report->measurement->unit }})</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
