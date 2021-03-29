<div style="font-size: 0.7rem;" class="impressions mt-4">
    @component('components.impression-single-button',[
    'tweet'=>$tweet,
    'impression'=>'like'
    ])@endcomponent

    @component('components.impression-single-button',[
    'tweet'=>$tweet,
    'impression'=>'dislike'
    ])@endcomponent

    @component('components.impression-single-button',[
    'tweet'=>$tweet,
    'impression'=>'love'
    ])@endcomponent

    @component('components.impression-single-button',[
    'tweet'=>$tweet,
    'impression'=>'laugh'
    ])@endcomponent

    @component('components.impression-single-button',[
    'tweet'=>$tweet,
    'impression'=>'cry'
    ])@endcomponent
</div>