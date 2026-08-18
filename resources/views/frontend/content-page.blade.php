@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
    {{ $contentPage->title }} - SSF Marketing
@endsection

@section('css')
@endsection

@section('body')
    <main class="content-page">
        <section class="content-page-hero">
            <div class="container content-page-hero-grid">
                <div class="reveal">
                    <span class="eyebrow">SSF Marketing</span>
                    <h1>{{ $contentPage->title }}</h1>
                    <p>Review the latest website information for {{ $contentPage->title }}.</p>
                </div>
            </div>
        </section>

        <section class="content-page-section">
            <div class="container content-page-wrap">
                <article class="content-page-body reveal">
                    {!! $contentPage->description !!}
                </article>
            </div>
        </section>
    </main>
@endsection

@section('js')
@endsection
