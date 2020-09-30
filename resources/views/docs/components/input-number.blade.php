@extends('docs.component')

@section('content')
    <x-input-number min="1" max="10" value="3" />
    <br>
    <br>
    <br>

    <div class="site-input-number-wrapper">
        <x-input-number size="large" min="1" max="100000" value="3" />
        <x-input-number min="1" max="100000" value="3" />
        <x-input-number size="small" min="1" max="100000" value="3" step="0.1" />
    </div>
@endsection
