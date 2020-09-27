@extends('docs.component')

@section('content')

    <x-antd-row>
        <x-antd-col span="24">col24</x-antd-col>
    </x-antd-row>

    <x-antd-row gutter="16" style="margin: 5px;">
        <x-antd-col flex="2" class="gutter-row" span="6">
            <div>col-6 flex 2</div>
        </x-antd-col>
        <x-antd-col flex="3" class="gutter-row" span="6" style="color: red">
            <div>col-6</div>
        </x-antd-col>
    </x-antd-row>
@endsection
