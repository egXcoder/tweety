<div style="font-size: 0.7rem;" class="impressions mt-4">
    <i class="far fa-thumbs-up fa-2x mx-2 like {{($tweet->isLoggedUserImpressed(\App\Enum\ImpressionsEnum::LIKE())) ? 'active' : ''}}">
        <span style="font-size: 1rem">
            {{$tweet->filterImpressions(\App\Enum\ImpressionsEnum::LIKE())->count() ?? 0}}
        </span></i>
    <i class="far fa-thumbs-down fa-2x mx-2 dislike {{($tweet->isLoggedUserImpressed(\App\Enum\ImpressionsEnum::DISLIKE())) ? 'active' : ''}}">
        <span style="font-size: 1rem">
            {{$tweet->filterImpressions(\App\Enum\ImpressionsEnum::DISLIKE())->count() ?? 0}}
        </span></i>
    <i class="far fa-heart fa-2x mx-2 love {{($tweet->isLoggedUserImpressed(\App\Enum\ImpressionsEnum::LOVE())) ? 'active' : ''}}">
        <span style="font-size: 1rem">
            {{$tweet->filterImpressions(\App\Enum\ImpressionsEnum::LOVE())->count() ?? 0}}
        </span></i>
    <i class="far fa-laugh-beam fa-2x mx-2 laugh {{($tweet->isLoggedUserImpressed(\App\Enum\ImpressionsEnum::LAUGH())) ? 'active' : ''}}">
        <span style="font-size: 1rem">
            {{$tweet->filterImpressions(\App\Enum\ImpressionsEnum::LAUGH())->count() ?? 0}}
        </span></i>
    <i class="far fa-sad-tear fa-2x mx-2 cry {{($tweet->isLoggedUserImpressed(\App\Enum\ImpressionsEnum::CRY())) ? 'active' : ''}}">
        <span style="font-size: 1rem">
            {{$tweet->filterImpressions(\App\Enum\ImpressionsEnum::CRY())->count() ?? 0}}
        </span></i>
</div>