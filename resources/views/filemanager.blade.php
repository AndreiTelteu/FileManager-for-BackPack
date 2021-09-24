@extends(backpack_view('blank'))

@section('content')
    <section id="app" v-cloak>
        {{-- notifications --}}
        <div class="notif-container">
            <my-notification></my-notification>
        </div>
        
        @include('MediaManager::_manager')

    </section>
@endsection

@push('before_styles')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endpush

@push('after_scripts')
    @stack('styles')
    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
