<x-customers_container>
    <x-navbar/>

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
</x-customers_container>
