<x-guest-layout>

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-website.sidenav-guest />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
    <div class="px-5 py-7 container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
            @if (session('errors'))
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert" id="alert">
                    {{ $error }}
                </div>
            @endforeach
            @endif
            @if (session('success'))
                <div class="alert alert-success" role="alert" id="alert">
                    {{ session('success') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <p>Thank you for registering. Kindly make payment to <b>Fdees Fashion Academy 1229747882 (Zenith Bank)</b></p>
                <p><a class="btn btn-pink-3 less-top-bottom-padding btn-round btn-small-2" href="{{url('/')}}">Back Home</a></p>
            </div>
        </div>
    </div>
    </main>

</x-app-layout>
