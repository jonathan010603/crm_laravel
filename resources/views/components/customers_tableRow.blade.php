<tr>
    <th scope="row">{{ $customer->id }}</th>
    <td>{{ $customer->firstName }}</td>
    <td>{{ $customer->lastName }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->phone }}</td>
    <td class="d-flex">
        <a href="{{ route('customers.edit', $customer) }}">
            <button type="button" class="btn btn-primary btn-sm mx-2">Edit</button>
        </a>

        <form action="{{ route('customers.destroy', $customer) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
