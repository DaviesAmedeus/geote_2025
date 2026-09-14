<div class="col-lg-6 col-md-6">
    <div class="service-item position-relative">

        @isset($engagement_icon)
            <div class="icon">
                {{ $engagement_icon }}
            </div>
        @endisset

        @isset($engagement_title)
            <h3>{{ $engagement_title }}</h3>
        @endisset

       <p> {{ $slot }}</p>

    </div>
</div>
