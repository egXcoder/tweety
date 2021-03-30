<style>
    .impressions button.{{$impression}}:hover,.impressions button.{{$impression}} i.active{
        color:{{\App\TweetImpression::getColorOfKey($impression)}}
    }
</style>
<form action="{{route('tweets.impressions.setImpression',['tweet'=>$tweet->id])}}" method="POST" class="d-inline-block">
    @csrf
    <button name="impression" value="{{$impression}}" class="d-inline-block bg-transparent border-0 {{$impression}}">
        <i class="{{\App\TweetImpression::getIconOfKey($impression)}} fa-2x mx-2  
            {{($tweet->getImpressionRecordForLoggedUser($impression)) ? 'active' : ''}}">
            <span style="font-size: 1rem">
                {{ $tweet->filterImpressions($impression)->count() ?? 0 }}
            </span>
        </i>
    </button>
</form>