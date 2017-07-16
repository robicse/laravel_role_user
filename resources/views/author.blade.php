@extends('layouts.master')
@section('title')
Admin Panel
@endsection
@section('content')
<section class="content">
    <div class="row">
        <h2>New Article</h2>
        <a href="{{ URL::to('/generate-article') }}">Generate</a>
    </div>
</section>
@endsection

