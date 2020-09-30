@extends('docs.component')

@section('content')
    <x-radio>Radio</x-radio>

    <div>
        <x-radio disabled />
        <br/>
        <x-radio checked disabled>
            Disabled
        </x-radio>
    </div>

    <br>
    <br>
    <br>

    <x-radio.group name="aadd" value="2">
        <x-radio value="1">A</x-radio>
        <x-radio value="2">B</x-radio>
        <x-radio value="3">C</x-radio>
        <x-radio value="4">D</x-radio>
    </x-radio.group>

    <br>
    <br>
    <br>

    <x-radio.group name="adfdfe" value="1">
        <x-radio style="display: block; height: 30px; line-height: 30px;" value="1">
            Option A
        </x-radio>
        <x-radio style="display: block; height: 30px; line-height: 30px;" value="2">
            Option B
        </x-radio>
        <x-radio style="display: block; height: 30px; line-height: 30px;" value="3">
            Option C
        </x-radio>
        <x-radio style="display: block; height: 30px; line-height: 30px;" value="4">
            More...

        </x-radio>
    </x-radio.group>

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
        <x-radio.group name="fgff" :options="$plainOptions" value="Apple"/>
        <br>
        <x-radio.group name="adff" :options="$options" value="Pear"/>
        <br>
        <x-radio.group
            name="adfe"
            disabled
            :options="$optionsWithDisabled"
            value="Apple"
        />
    </div>

    <br>
    <br>
    <br>


    <x-radio.group name="cc1" value="a">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>
    <x-radio.group name="cc2" value="a" style="margin-top: 16px">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b" disabled>
            Shanghai
        </x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>
    <x-radio.group name="cc3" disabled value="a" style="margin-top: 16px">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>

    <br>
    <br>
    <br>


    <x-radio.group name="awdf" value="a" buttonStyle="solid">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>
    <x-radio.group name="vsffef" value="c" buttonStyle="solid" style="margin-top: 16px">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b" disabled>
            Shanghai
        </x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>

    <br>
    <br>
    <br>

    <x-radio.group name="awdwfff" value="a" size="large">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>
    <x-radio.group name="awddvwww" value="a" style="margin-top: 16px">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>
    <x-radio.group name="dwvedd" value="a" size="small" style="margin-top: 16px">
        <x-radio.button value="a">Hangzhou</x-radio.button>
        <x-radio.button value="b">Shanghai</x-radio.button>
        <x-radio.button value="c">Beijing</x-radio.button>
        <x-radio.button value="d">Chengdu</x-radio.button>
    </x-radio.group>

@endsection
