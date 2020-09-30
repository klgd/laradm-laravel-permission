@extends('docs.component')

@section('content')
    <x-slider name="addad" min="-1000" max="1000" />
    <br>
    <br>
    <br>
    <br>

    <x-slider range value="2,4" />
    <x-slider value="2,4" step="0.01" />
    <br>
    <br>
    <br>
    <br>
    <x-slider
        value="50"
        marks="0,100,200,300,400"
    />

    <br>
    <br>
    <br>
    <br>
    @php
    $marks = [
        0 => '$0',
        100 => '$100',
        200 => '$200',
        300 => '$300',
        400 => '$400',
    ];
    @endphp
    <x-slider
        value="50"
        :marks="$marks"
        reverse
    />

    <br>
    <br>
    <br>
    <br>
    <br>
    <style>
        .icon-wrapper {
            position: relative;
            padding: 0px 30px;
        }

        .icon-wrapper .anticon {
            position: absolute;
            top: -2px;
            width: 16px;
            height: 16px;
            line-height: 1;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.25);
        }

        .icon-wrapper .icon-wrapper-active {
            color: rgba(0, 0, 0, 0.45);
        }

        .icon-wrapper .anticon:first-child {
            left: 0;
        }

        .icon-wrapper .anticon:last-child {
            right: 0;
        }
    </style>

    <div class="icon-wrapper">
        <x-icon name="frown" />
        <x-slider name="adddwd" min="10" max="1000" value="53" />
        <x-icon name="smile" />
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div style="display: inline-block; height: 300px; margin-left: 70px;">
        <x-slider
            name="adadawd"
{{--            reverse--}}
            vertical value="5" />
    </div>
    <div style="display: inline-block; height: 300px; margin-left: 70px;">

        <x-slider
            name="adadawd"
            reverse
            vertical value="5" />
    </div>


    <div style="display: inline-block; height: 300px; margin-left: 70px;">

        <x-slider
            value="34"
            vertical
            data-slider-ticks-snap-bounds="3"
            {{--            data-slider-ticks-positions="[0, 26, 37, 100]"--}}
            :marks="[0 => '0°C', 26 => '26°C', 37 => '37°C', 100 => '100°C']"
        />
    </div>

    <div style="display: inline-block; height: 300px; margin-left: 70px;">

        <x-slider
            value="26,34"
            vertical
            data-slider-ticks-snap-bounds="3"
{{--            data-slider-ticks-positions="[0, 26, 37, 100]"--}}
            :marks="[0 => '0°C', 26 => '26°C', 37 => '37°C', 100 => '100°C']"
        />
    </div>

    <div style="display: inline-block; height: 300px; margin-left: 70px;">

        <x-slider
            value="26,34"
            vertical
            reverse
            data-slider-ticks-snap-bounds="3"
            {{--            data-slider-ticks-positions="[0, 26, 37, 100]"--}}
            :marks="[0 => '0°C', 26 => '26°C', 37 => '37°C', 100 => '100°C']"
        />
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
