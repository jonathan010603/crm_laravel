<x-main_container>
    <x-navbar pageTitle=Customers />

    <div class="container">
        <form action="{{ route('customers.update', $customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="firstName" class="form-label">First name</label>
                <input name="firstName" type="text" class="form-control" id="firstName" aria-describedby="emailHelp"
                    placeholder="{{ $customer->firstName }}" value="{{ $customer->firstName }}">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input name="lastName" type="text" class="form-control" id="lastName" aria-describedby="emailHelp"
                    placeholder="{{ $customer->lastName }}" value="{{ $customer->lastName }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="{{ $customer->email }}" value="{{ $customer->email }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input name="phone" type="text" class="form-control" id="phone"
                    placeholder="{{ $customer->phone }}" value="{{ $customer->phone }}">
            </div>

            <x-modal>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </x-modal>
        </form>
    </div>

</x-main_container>
