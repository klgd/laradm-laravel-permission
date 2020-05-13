@extends('layout')

@section('content')
    <style>
        .avatar-item {
            margin-right: 24px;
        }

        [class*='-col-rtl'] .avatar-item {
            margin-right: 0;
            margin-left: 24px;
        }
    </style>
    <div>
        <div>
            <x-antd-avatar size="64" icon="user" />
            <x-antd-avatar size="large" icon="user" />
            <x-antd-avatar icon="user" />
            <x-antd-avatar size="small" icon="user" />
        </div>
        <div>
            <x-antd-avatar shape="square" size="64" icon="user" />
            <x-antd-avatar shape="square" size="large" icon="user" />
            <x-antd-avatar shape="square" icon="user" />
            <x-antd-avatar shape="square" size="small" icon="user" />
        </div>
    </div>

    <br>
    <br>
    <br>

    <div>
        <x-antd-avatar icon="user" />
        <x-antd-avatar>U</x-antd-avatar>
        <x-antd-avatar>USER</x-antd-avatar>
        <x-antd-avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
        <x-antd-avatar style="color: #f56a00; background-color: #fde3cf">U</x-antd-avatar>
        <x-antd-avatar style="background-color: #87d068" icon="user" />
    </div>

    <br>
    <br>
    <br>

    <div>
    <span class="avatar-item">
      <x-antd-badge count="1">
        <x-antd-avatar shape="square" icon="user" />
      </x-antd-badge>
    </span>
        <span>
      <x-antd-badge dot>
        <x-antd-avatar shape="square" icon="user" />
      </x-antd-badge>
    </span>
    </div>
@endsection
