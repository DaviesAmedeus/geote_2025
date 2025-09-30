@props(['pageTitle', 'icon'])

<div class="row align-items-center py-3">
            <div class="col-md-6">
                <h1 class="dash-title"><i class="{{ $icon ?? '' }} pr-2"></i>{{ $pageTitle }} </h1>
            </div>
          {{ $slot ?? '' }}
        </div>

