<x-panel.layout>
    <div class="form-screen" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('assets/img/login-bg.JPG') }});">
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white text-center">Login</div>
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="py-2">
                        <x-panel.forms.input placeholder='Email' type="email" name="email" />
                        <x-panel.forms.input placeholder='Password' type="password" name="password" />
                    </div>

                    <x-panel.forms.button redirectTitle="I don't remember my Password?"
                        redirect="#">Login</x-panel.forms.button>
                </form>
            </div>
        </div>


    </div>



</x-panel.layout>
