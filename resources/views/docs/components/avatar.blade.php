@extends('docs.component')

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
            <x-avatar size="64" icon="user" />
            <x-avatar size="large" icon="user" />
            <x-avatar icon="user" />
            <x-avatar size="small" icon="user" />
        </div>
        <div>
            <x-avatar shape="square" size="64" icon="user" style="color: #f56a00; background-color: #fde3cf" />
            <x-avatar shape="square" size="large" icon="user" />
            <x-avatar shape="square" icon="user" />
            <x-avatar shape="square" size="small" icon="user" />
        </div>
    </div>

    <br>
    <br>
    <br>

    <div>
        <x-avatar icon="user" />
        <x-avatar>U</x-avatar>
        <x-avatar>USER</x-avatar>
        <x-avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
        <x-avatar style="color: #f56a00; background-color: #fde3cf">U</x-avatar>
        <x-avatar style="background-color: #87d068" icon="user" />
    </div>

    <br>
    <br>
    <br>

    <div>
    <span class="avatar-item">
      <x-badge count="1">
        <x-avatar shape="square" icon="user" />
      </x-badge>
    </span>
        <span>
      <x-badge dot>
        <x-avatar shape="square" icon="user" />
      </x-badge>
    </span>
    </div>
@endsection
