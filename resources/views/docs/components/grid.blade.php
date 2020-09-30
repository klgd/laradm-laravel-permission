@extends('docs.component')

@section('content')

    <x-row>
        <x-col span="24">col24</x-col>
    </x-row>

    <x-row gutter="16" style="margin: 5px;">
        <x-col flex="2" class="gutter-row" span="6">
            <div>col-6 flex 2</div>
        </x-col>
        <x-col flex="3" class="gutter-row" span="6" style="color: red">
            <div>col-6</div>
        </x-col>
    </x-row>
@endsection
