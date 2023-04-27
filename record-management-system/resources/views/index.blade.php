<h1>Records</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/records/create" class="btn btn-primary mb-3">Add New Record</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td>{{ $record->address }}</td>
                <td>
                    <a href="/records/{{ $record->id }}" class="btn btn-sm btn-info">View</a>
                    <a href="/records/{{ $record->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/records/{{ $record->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>