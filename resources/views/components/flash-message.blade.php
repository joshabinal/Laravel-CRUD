@if (session()->has('message'))
    <div class="alert alert-info position-absolute top-0 start-50 translate-middle-x" role="alert"
        x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        {{ session('message') }}
    </div>
@endif
