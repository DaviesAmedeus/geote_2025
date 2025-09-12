@props(['pageTitle'])

<div class="row align-items-center py-3">
            <div class="col-md-6">
                <h1 class="dash-title">{{ $pageTitle }}</h1>
            </div>
          {{ $slot ?? '' }}
        </div>
