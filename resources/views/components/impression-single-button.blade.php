@php
    use \App\Enum\ImpressionsEnum;
    $icons = [
        'like'=>'far fa-thumbs-up',
        'dislike'=>'far fa-thumbs-down',
        'love'=>'far fa-heart',
        'laugh'=>'far fa-laugh-beam',
        'cry'=>'far fa-sad-tear',
    ];
    
    $colors = [
        'like'=>'#1da1f2',
        'dislike'=>'#ef3939',
        'love'=>'#ef3939',
        'laugh'=>'#ffc107',
        'cry'=>'#ffc107',
    ];
@endphp

<style>
    .impressions button.{{$impression}}:hover,.impressions button.{{$impression}} i.active{
        color:{{$colors[$impression]}}
    }
</style>
<form action="{{route('tweets.impressions.setImpression',['tweet'=>$tweet->id])}}" method="POST" class="d-inline-block">
    @csrf
    <button name="impression" value="{{$impression}}" class="d-inline-block bg-transparent border-0 {{$impression}}">
        <i class="{{$icons[$impression]}} fa-2x mx-2  
            {{($tweet->getImpressionRecordForLoggedUser(ImpressionsEnum::{strtoupper($impression)}())) ? 'active' : ''}}">
            <span style="font-size: 1rem">
                {{
                    $tweet->filterImpressions(ImpressionsEnum::{strtoupper($impression)}())
                    ->count() ?? 0
                    }}
            </span>
        </i>
    </button>
</form>