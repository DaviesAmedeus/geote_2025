@props([
    'imglink',
    'name',
    'testimonial'
])

<div class="slide">
    <div class="testimonial">
        <div class="testimonial-item text-center p-4 shadow-sm"
            style="max-width: 350px; border-radius: 15px; background: #f4f4f4;">
            <img src="{{ asset($imglink) }}" class="testimonial-img rounded-circle mb-3"
                alt="{{ $name }}" style="width: 120px; height: 120px; object-fit: cover;">
            <h3 class="mt-2">{{ $name }} </h3>
            <p class="fst-italic" style="font-size: 0.95rem;">
              <i class="fas fa-quote-left"></i>
                {{$testimonial}}
            <i class="fas fa-quote-right"></i>
            </p>
        </div>
    </div>
</div>
