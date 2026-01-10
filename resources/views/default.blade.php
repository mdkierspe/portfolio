@extends('layout')

@section('body')
    @foreach (($page->page_content ?? []) as $block )
        @includeIf('blocks.' . $block['type'], $block)
    @endforeach
@endsection