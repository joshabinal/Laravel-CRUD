<x-layout :heading="$heading">

    <div class="container mt-3">
        <div class="container">

            <p class="text-end">
                <a href="/students/create">
                    <button class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        Add Student
                    </button>
                </a>
            </p>
            <table class="table table-bordered text-center">
                <tr>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>

                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->section }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}/edit" class="text-decoration-none text-white">
                                <button class="btn btn-warning">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </button>
                            </a>
                            <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-layout>
