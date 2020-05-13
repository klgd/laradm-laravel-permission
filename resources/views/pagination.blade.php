@extends('layout')

@section('content')
    @php
        $mem = DB::table('members15')->paginate(3);
    @endphp
    <x-antd-pagination :paginator="$mem" disabled />

    @php
        $mem1 = DB::table('members15')->simplePaginate(8);
    @endphp
    <x-antd-pagination :paginator="$mem1"  />


    <x-antd-pagination total="100" page-name="p" size="small"  />

@endsection
