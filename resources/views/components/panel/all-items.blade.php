@props(['btnTitle'])



<div class="col-md-6 " style="text-align: end">
    <a {{ $attributes->merge() }} class="btn  rounded btn-primary view-event" {{ $attributes->merge() }}>
        <i class="fas fa-angle-double-left "></i> {{ $btnTitle }}
    </a>
</div>
