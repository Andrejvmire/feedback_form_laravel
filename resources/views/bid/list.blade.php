<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your bids list') }}
        </h2>
    </x-slot>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ __('Bid name') }}</th>
            <th scope="col">{{ __('User phone number') }}</th>
            <th scope="col">{{ __('Company') }}</th>
            <th scope="col">{{ __('Message') }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach($bids as $bid)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bid->name }}</td>
                    <td>{{ $bid->phone }}</td>
                    <td>{{ $bid->company }}</td>
                    <td>{{ $bid->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
