<x-layout :heading="$heading">
    <div class="container w-50">
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Juan Dela Cruz"
                    value="{{ $student->name }}" />

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" id="section" name="section" placeholder="Ex. BSIT 3A"
                    value="{{ $student->section }}" />

                @error('section')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    placeholder="Ex. email@email.com" value="{{ $student->email }}" />

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <a href="/" class="text-decoration-none text-white btn btn-secondary">
                    Cancel
                </a>
                <button class="btn btn-warning">
                    Edit
                </button>
            </div>

        </form>
    </div>
</x-layout>
