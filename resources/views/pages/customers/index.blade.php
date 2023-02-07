<x-main_container>
    <x-navbar pageTitle=Customers />

    <div class="container mt-5 d-flex flex-column align-items-center">
        <a href="{{ route('customers.create') }}">
            <button type="button" class="btn btn-primary">New user</button>
        </a>
        <div class="container mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers_list as $customer)
                        <x-customers_tableRow :customer="$customer">
                        </x-customers_tableRow>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-main_container>
