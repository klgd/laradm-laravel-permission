@extends('docs.component')

@section('content')
    <x-antd-radio>Radio</x-antd-radio>

    <div>
        <x-antd-radio disabled />
        <br/>
        <x-antd-radio checked disabled>
            Disabled
        </x-antd-radio>
    </div>

    <br>
    <br>
    <br>

    <x-antd-radio.group name="aadd" value="2">
        <x-antd-radio value="1">A</x-antd-radio>
        <x-antd-radio value="2">B</x-antd-radio>
        <x-antd-radio value="3">C</x-antd-radio>
        <x-antd-radio value="4">D</x-antd-radio>
    </x-antd-radio.group>

    <br>
    <br>
    <br>

    <x-antd-radio.group name="adfdfe" value="1">
        <x-antd-radio style="display: block; height: 30px; line-height: 30px;" value="1">
            Option A
        </x-antd-radio>
        <x-antd-radio style="display: block; height: 30px; line-height: 30px;" value="2">
            Option B
        </x-antd-radio>
        <x-antd-radio style="display: block; height: 30px; line-height: 30px;" value="3">
            Option C
        </x-antd-radio>
        <x-antd-radio style="display: block; height: 30px; line-height: 30px;" value="4">
            More...

        </x-antd-radio>
    </x-antd-radio.group>

    <br>
    <br>
    <br>

    @php
        $plainOptions = ['Apple', 'Pear', 'Orange'];
        $options = [
          ['label' => 'Apple', 'value' => 'Apple'],
          ['label' => 'Pear', 'value' => 'Pear'],
          ['label' => 'Orange', 'value' => 'Orange'],
        ];
        $optionsWithDisabled = [
          ['label' => 'Apple', 'value' =>  'Apple'],
          ['label' => 'Pear', 'value' =>  'Pear'],
          ['label' => 'Orange', 'value' =>  'Orange', 'disabled' => false],
        ];
    @endphp

    <div>
        <x-antd-radio.group name="fgff" :options="$plainOptions" value="Apple"/>
        <br>
        <x-antd-radio.group name="adff" :options="$options" value="Pear"/>
        <br>
        <x-antd-radio.group
            name="adfe"
            disabled
            :options="$optionsWithDisabled"
            value="Apple"
        />
    </div>

    <br>
    <br>
    <br>


    <x-antd-radio.group name="cc1" value="a">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>
    <x-antd-radio.group name="cc2" value="a" style="margin-top: 16px">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b" disabled>
            Shanghai
        </x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>
    <x-antd-radio.group name="cc3" disabled value="a" style="margin-top: 16px">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>

    <br>
    <br>
    <br>


    <x-antd-radio.group name="awdf" value="a" buttonStyle="solid">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>
    <x-antd-radio.group name="vsffef" value="c" buttonStyle="solid" style="margin-top: 16px">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b" disabled>
            Shanghai
        </x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>

    <br>
    <br>
    <br>

    <x-antd-radio.group name="awdwfff" value="a" size="large">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>
    <x-antd-radio.group name="awddvwww" value="a" style="margin-top: 16px">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>
    <x-antd-radio.group name="dwvedd" value="a" size="small" style="margin-top: 16px">
        <x-antd-radio.button value="a">Hangzhou</x-antd-radio.button>
        <x-antd-radio.button value="b">Shanghai</x-antd-radio.button>
        <x-antd-radio.button value="c">Beijing</x-antd-radio.button>
        <x-antd-radio.button value="d">Chengdu</x-antd-radio.button>
    </x-antd-radio.group>

@endsection
