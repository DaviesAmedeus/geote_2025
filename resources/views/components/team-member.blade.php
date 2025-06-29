@props([
    'memberName',
    'position',
    'imglink',
])


<div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
    <div class="member-img">
      <img src="{{asset($imglink)}}" class="img-fluid" alt="">
      {{-- <div class="social">
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div> --}}
    </div>
    <div class="member-info text-center">
      <h4>{{ $memberName }}</h4>
      <span>{{ $position }}</span>
<!--              <p>Executive Director of National Novel Writing Month and the co-founder of 100 Word Story, a literary magazine. Co-hosts the podcast Write-minded. Has a M.A. in Creative Writing from SFSU.</p>-->
    </div>
  </div>
