@props([
    'button' => true,
    'btnTitle'
])


@if ($button)
 <div class="col-md-6 " style="text-align: end">
                <button {{ $attributes->merge() }}  class="btn  rounded btn-primary view-event" data-event-id="" data-bs-toggle="modal"
                    data-bs-target="#itemCreatorModal">
                    <i class="fas fa-plus"></i> {{ $btnTitle }}
                </button>
            </div>

@endif


@if (!$button)
 <div class="col-md-6 " style="text-align: end">
                <a {{ $attributes->merge() }}  class="btn  rounded btn-primary view-event" {{ $attributes->merge() }}>
                    <i class="fas fa-plus"></i> {{ $btnTitle }}
                </a>
            </div>

@endif

