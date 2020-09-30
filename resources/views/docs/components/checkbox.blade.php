@extends('docs.component')

@section('content')
    <x-checkbox autoFocus>Checkbox</x-checkbox>
    <br>
    <br>
    <br>

    <div>
        <x-checkbox disabled />
        <br />
        <x-checkbox checked disabled />
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
        <x-checkbox.group name="fruit[]" :options="$plainOptions" :value="['Apple']" />
        <br />
        <br />
        <x-checkbox.group :options="$options" :value="['Pear']" />
        <br />
        <br />
        <x-checkbox.group
            :options="$optionsWithDisabled"
            disabled
            :value="['Apple']"
        />
    </div>

    <br>
    <br>
    <br>

    <x-checkbox.group name="aadd" :value="['A', 'C']" disabled style="width: 100%">
        <x-row>
            <x-col span="8">
            <x-checkbox value="A">A</x-checkbox>
            </x-col>
            <x-col span="8">
            <x-checkbox value="B" name="test[]">B</x-checkbox>
            </x-col>
            <x-col span="8">
            <x-checkbox value="C" name="test[]">C</x-checkbox>
            </x-col>
            <x-col span="8">
            <x-checkbox value="D">D</x-checkbox>
            </x-col>
            <x-col span="8">
            <x-checkbox value="E">E</x-checkbox>
            </x-col>
        </x-row>
    </x-checkbox.group>

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
            <x-checkbox
                indeterminate
            >
                Check all
            </x-checkbox>
        </div>
        <br />
        <x-checkbox.group
            :options="$plainOptions"
        />
    </div>

@endsection
