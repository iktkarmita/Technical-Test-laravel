@extends('layouts.app')
@section('styles')
@endsection
@section('content')
    <div class="newsletter">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-4">
                    <div class="section-title text-center">
                        <h2>Subscribe</h2>
                        <p>Send our email for subscribe</p>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-7 col-11">
                    <form class="newsletter-form" action="{{ url('/subscribe/store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="email" name="email" placeholder="Enter your email...">
                        <button type="submit">Subscribe Now</button>
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if (session()->has('success'))
                            <div class="alert alert-success text-center mt-2" role="alert" style="width: 100%;">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const form = document.querySelector("#subscribeForm");
        const emailInput = document.querySelector("#email");
        const errorMessage = document.querySelector("#error");
        const successMessage = document.querySelector("#success");

        form.addEventListener("submit", (event) => {
            event.preventDefault();
            errorMessage.innerHTML = "";
            successMessage.innerHTML = "";

            const email = emailInput.value;
            if (!email) {
                errorMessage.innerHTML = "Email is required";
                return;
            }
            if (email.length < 10) {
                errorMessage.innerHTML = "Email must be at least 10 characters long";
                return;
            }
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                errorMessage.innerHTML = "Email must be in the format of example@domain.com";
                return;
            }

            // Aqui se puede hacer la llamada POST a su API con el email para guardarlo en la base de datos
            successMessage.innerHTML = "Subscribed successfully";
        });
    </script>
@endsection
