@extends('layouts.app')

@section('content')
    <div class="callout large">
        <div class="row column text-center">
            <h1>Changing the World Through Design</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
            <a href="#" class="button large">Learn More</a>
            <a href="#" class="button large hollow">Learn Less</a>
        </div>
    </div>
    
    {{--<div class="orbit" role="region" aria-label="Landing page slider" data-orbit>
        <ul class="orbit-container">
            <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
            <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
            <li class="orbit-slide is-active">
                <img src="{{ URL::to('/') }}/images/slider/phone1.jpeg">
                <div class="caption"><br>Caption goes here</div>
            </li>
            <li class="orbit-slide">
                <img src="{{ URL::to('/') }}/images/slider/hand1.jpeg">
            </li>
            <li class="orbit-slide">
                <img src="{{ URL::to('/') }}/images/slider/sail.jpeg">
            </li>
        </ul>
    </div>--}}


    <div class="row content">
        <div class="card" style="width: 600px;">
            <div class="card-divider">
                This is a header
            </div>
            <img src="http://placehold.it/2000x3000" alt="" style="width: 600px"/>
            <div class="card-section">
                <h4>This is a card.</h4>
                <p>It has an easy to override visual style, and is appropriately subdued.</p>
            </div>
        </div>

    </div>
@endsection
