<x-main_container>
    <x-navbar pageTitle=Customers />

    <div class="container mt-5">
        <form action="{{ route('customers.update', $customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="firstName" class="form-label">First name</label>
                <input name="firstName" type="text" class="form-control" id="firstName" aria-describedby="firstName"
                    placeholder="{{ $customer->firstName }}" value="{{ $customer->firstName }}">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input name="lastName" type="text" class="form-control" id="lastName" aria-describedby="lastName"
                    placeholder="{{ $customer->lastName }}" value="{{ $customer->lastName }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                    placeholder="{{ $customer->email }}" value="{{ $customer->email }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input name="phone" type="text" class="form-control" id="phone"
                    placeholder="{{ $customer->phone }}" value="{{ $customer->phone }}">
            </div>

            <x-modal message="Update user #{{ $customer->id }} ( {{ $customer->firstName }} {{ $customer->lastName }} )?">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
                    Submit changes
                </button>
            </x-modal>
        </form>
    </div>

</x-main_container>
