<div class="home__hero">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center px-4">
            <div class="home__hero--left">
                {!! $heroFields['heroInfo'] !!}
            </div>

            <div class="home__hero--right">
                <img src={!! $heroFields['heroIllustration'] !!} alt="hero illustration">
            </div>
        </div>
    </div>
</div>