@extends('master')


@section('content')
    <div class="container-fluid">
            <users-table :users="{{ ($users) }}"></users-table>
    </div>
@endsection