@extends('layouts.app')

@section('content-header', 'Changelogs')
@section('content-actions')
    <a href="{{route('changelogs.index')}}" class="btn btn-primary">Open POS</a>
    <style>
        .paragraf {
            font-size: medium;
            padding-left: 10px;
        }
        .logs {
            padding-block: 10px;
        }
    </style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header info">
    <h3 class="card-title">Changelogs</h3>
</div>
</div>
</div>

</div>
<div class="card">
    <div class="card-body">
        <ul class="logs">
            <h2>v1.0.0</h2>
            <li>
                <p  class="paragraf">Update PHP 8.1 dengan Laravel 10</p>
            </li>
            <li>
                <p  class="paragraf">Multi account role</p>
            </li>
            <li>
                <p  class="paragraf">AdminLTE 3 UI</p>
            </li>
        </ul>
    </div>
</div>
@endsection

