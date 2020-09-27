@extends('docs.component')

@section('content')
    <x-antd-input-number min="1" max="10" value="3" />
    <br>
    <br>
    <br>

    <div class="site-input-number-wrapper">
        <x-antd-input-number size="large" min="1" max="100000" value="3" />
        <x-antd-input-number min="1" max="100000" value="3" />
        <x-antd-input-number size="small" min="1" max="100000" value="3" step="0.1" />
    </div>
@endsection
