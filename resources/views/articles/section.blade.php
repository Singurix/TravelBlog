@extends('template')

@section('content')
    <x-ArticlesList :articles="$articles" :catId="$catId"></x-ArticlesList>
@endsection
