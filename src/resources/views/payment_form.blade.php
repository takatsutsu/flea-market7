@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap_custom2.min.css') }}">
@endsection

<html>

<head>
    <title>Stripe Payment</title>
</head>

<body>
    <h1>Stripe Payment Form</h1>

    @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/payment_store" method="POST">
        @csrf
        <label for="amount">金額 (円)</label>
        <input type="number" name="amount" id="amount" required>

        <script src="https://checkout.stripe.com/checkout.js"
            class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="5000"
            data-name="Stripe Demo"
            data-description="Online payment"
            data-currency="jpy">
        </script>
    </form>
</body>

</html>