<tr>
    <th scope="row">{{ $customer->id }}</th>
    <td>{{ $customer->firstName }}</td>
    <td>{{ $customer->lastName }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->phone }}</td>
    <td>
        <form action="{{ route('customers.edit', $customer) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        </form>

        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
