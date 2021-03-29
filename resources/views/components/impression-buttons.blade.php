<div style="font-size: 0.7rem;" class="impressions mt-4">
    <i class="far fa-thumbs-up fa-2x active mx-2 like"><span
            style="font-size: 1rem">{{$tweet->onlyImpressions(\App\Enum\ImpressionsEnum::LIKE)->count() ?? 0}}</span></i>
    <i class="far fa-thumbs-down fa-2x mx-2 dislike"><span
            style="font-size: 1rem">{{$tweet->onlyImpressions(\App\Enum\ImpressionsEnum::DISLIKE)->count() ?? 0}}</span></i>
    <i class="far fa-heart fa-2x mx-2 love"><span
            style="font-size: 1rem">{{$tweet->onlyImpressions(\App\Enum\ImpressionsEnum::LOVE)->count() ?? 0}}</span></i>
    <i class="far fa-laugh-beam fa-2x mx-2 laugh"><span
            style="font-size: 1rem">{{$tweet->onlyImpressions(\App\Enum\ImpressionsEnum::LAUGH)->count() ?? 0}}</span></i>
    <i class="far fa-sad-tear fa-2x mx-2 cry"><span
            style="font-size: 1rem">{{$tweet->onlyImpressions(\App\Enum\ImpressionsEnum::CRY)->count() ?? 0}}</span></i>
</div>