@extends('layout.app')
@section('content')
    <form action="/" method="post" enctype="multipart/form-data" id="netappli_form">
        @csrf
        <div class="mb-3">
            <h2>Formulaire de contact</h2>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Sam">
                <div class="netappli_error"></div>
                @error('name')
                <div class="netappli_error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Sujet</label>
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Contact">
                <div class="netappli_error"></div>
                @error('subject')
                <div class="netappli_error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                <div class="netappli_error"></div>
                @error('message')
                <div class="netappli_error">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
