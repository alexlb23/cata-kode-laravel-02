@extends('layout')
@section('content')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById('timezone').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
        });
    </script>

    @if (isset($appointment))
        <h1 class="text-success">Prendre rendez-vous</h1>
        <a href="{{route('appointment_show', $appointment->id)}}"> votre rendez-vous</a>
    @elseif (isset($error))
        <h1 class="text-error">une erreur c'est produite/h1>
    @else

        <h1 class="text-success">Prendre rendez-vous</h1>

        <form method="POST" action="{{route('appointment_store')}}">
            @csrf
            <input type="hidden" name="timezone" value="" id="timezone">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3 ">
                <label class="form-label" for="date">Date</label>
                <input type="datetime-local" name="date" class="form-control" id="date">

            </div>
            <div class="mb-3 ">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" placeholder="..." id="message"></textarea>

            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    @endif
@endsection