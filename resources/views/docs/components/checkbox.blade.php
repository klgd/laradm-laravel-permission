@extends('docs.component')

@section('content')
    <x-antd-checkbox autoFocus>Checkbox</x-antd-checkbox>
    <br>
    <br>
    <br>

    <div>
        <x-antd-checkbox disabled />
        <br />
        <x-antd-checkbox checked disabled />
    </div>
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
        <x-antd-checkbox.group name="fruit[]" :options="$plainOptions" :value="['Apple']" />
        <br />
        <br />
        <x-antd-checkbox.group :options="$options" :value="['Pear']" />
        <br />
        <br />
        <x-antd-checkbox.group
            :options="$optionsWithDisabled"
            disabled
            :value="['Apple']"
        />
    </div>

    <br>
    <br>
    <br>

    <x-antd-checkbox.group name="aadd" :value="['A', 'C']" disabled style="width: 100%">
        <x-antd-row>
            <x-antd-col span="8">
            <x-antd-checkbox value="A">A</x-antd-checkbox>
            </x-antd-col>
            <x-antd-col span="8">
            <x-antd-checkbox value="B" name="test[]">B</x-antd-checkbox>
            </x-antd-col>
            <x-antd-col span="8">
            <x-antd-checkbox value="C" name="test[]">C</x-antd-checkbox>
            </x-antd-col>
            <x-antd-col span="8">
            <x-antd-checkbox value="D">D</x-antd-checkbox>
            </x-antd-col>
            <x-antd-col span="8">
            <x-antd-checkbox value="E">E</x-antd-checkbox>
            </x-antd-col>
        </x-antd-row>
    </x-antd-checkbox.group>

    <br>
    <br>
    <br>
    <style>
        .site-checkbox-all-wrapper {
            border-bottom: 1px solid #e9e9e9;
        }
    </style>
    <div>
        <div class="site-checkbox-all-wrapper">
            <x-antd-checkbox
                indeterminate
            >
                Check all
            </x-antd-checkbox>
        </div>
        <br />
        <x-antd-checkbox.group
            :options="$plainOptions"
        />
    </div>

@endsection
