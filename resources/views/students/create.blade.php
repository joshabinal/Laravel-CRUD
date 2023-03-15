<x-layout :heading="$heading">

    <div class="container w-50">
        <form action="/students" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Juan Dela Cruz" value="{{ old('name') }}" />

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" id="section" name="section" placeholder="Ex. BSIT 3A" value="{{ old('section') }}" />

                @error('section')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ex. email@email.com" value="{{ old('email') }}" />

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <a href="/" class="text-decoration-none text-white btn btn-secondary">
                    Cancel
                </a>
                <button class="btn btn-success">
                    Add
                </button>
            </div>

        </form>
    </div>
</x-layout>
