<x-main_container>
    <x-navbar pageTitle=Customers />

    <div class="container mt-5">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="firstName" class="form-label">First name</label>
                <input name="firstName" type="text" class="form-control" id="firstName" aria-describedby="firstName"
                    placeholder="Jonathan">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input name="lastName" type="text" class="form-control" id="lastName" aria-describedby="lastName"
                    placeholder="da silva">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                    placeholder="jonathan@gmail.com">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input name="phone" type="text" class="form-control" id="phone"
                    placeholder="55 48 9 9999 9999">
            </div>

            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
                Create user
            </button>
        </form>
    </div>

</x-main_container>
