<x-main_container>
    <x-navbar pageTitle=Customers />

    <table class="table table-hover">
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
</x-main_container>
