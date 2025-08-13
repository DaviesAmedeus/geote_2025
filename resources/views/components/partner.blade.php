    @props(['imglink', 'title'])

<div class="col-lg-3 col-md-4">
  <div class="client-logo d-flex justify-content-start align-items-start">
    <img src="{{ asset($imglink) }}" class="img-fluid" height="100" width="50" alt="">
    <div class="ms-2">{{ $title }}</div>
  </div>
</div>
