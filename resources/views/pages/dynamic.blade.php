@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="content-box">
                <h1 class="page-title">{{ $page->title }}</h1>
                <div class="content">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
