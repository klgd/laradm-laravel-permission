@extends('docs.component')

@section('content')
    @php
        $mem = DB::table('members15')->paginate(3);
    @endphp
    <x-pagination :paginator="$mem" disabled />

    @php
        $mem1 = DB::table('members15')->simplePaginate(8);
    @endphp
    <x-pagination :paginator="$mem1"  />


    <x-pagination total="500" page-name="p" size="small"  />

@endsection
