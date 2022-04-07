<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New bid') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            @foreach($errors->all() as $error)
                <div class="error">{{ $error }}</div>
            @endforeach
            <form action="{{ route('bid.store') }}" enctype="multipart/form-data" class="col-6 mt-5 bg-white p-4" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-6">
                        <label for="name" class="form-label">{{ __('Your name') }}*:</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()?->name }}" {{ !auth()->check() ?: "disabled" }}>
                    </div>
                    <div class="col-6">
                        <label for="phone" class="form-label">{{ __("Phone number") }}*:</label>
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="col-12">
                        <label for="company" class="form-label">{{ __("Company") }}:</label>
                        <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">
                    </div>
                    <div class="col-12">
                        <label for="bid_name" class="form-label">{{ __("Bid name") }}*:</label>
                        <input id="bid_name" type="text" class="form-control" name="bid_name" value="{{ old('bid_name') }}">
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">{{ __("Message") }}*:</label>
                        <textarea id="message" class="form-control" name="message" rows="4">{{ old('message') }}</textarea>
                    </div>
                    <div class="col-12">
                        <label for="file" class="form-label">{{ __("File") }}</label>
                        <input class="form-control" type="file" id="file" name="file" value="{{ old('file') }}">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" type="submit">{{ __("Send") }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
