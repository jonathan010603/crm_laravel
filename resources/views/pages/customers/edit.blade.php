<x-customers_container>
    <x-navbar />

    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="{{ $customer->firstName }}" value="{{ $customer->firstName }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="{{ $customer->lastName }}" value="{{ $customer->lastName }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="{{ $customer->email }}" value="{{ $customer->email }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="exampleInputPassword1"
                    placeholder="{{ $customer->phone }}" value="{{ $customer->phone }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit changes</button>
        </form>
    </div>

</x-customers_container>
