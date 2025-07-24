    @props(['imglink', 'title'])

<div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ asset($imglink) }}" class="img-fluid" height="100" width="50" alt="">
              <div class="ms-2">{{ $title }}</div>
            </div>
          </div>
