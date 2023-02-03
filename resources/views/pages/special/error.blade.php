<x-main_container>
    <x-navbar pageTitle=Customers />

    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="error-container w-50 h-25">
            <div class="error-message bg-danger w-100 h-50 d-flex justify-content-center align-items-center text-light">
                Internal Error
            </div>
            <div
                class="error-tryagain w-100 h-50 d-flex flex-column justify-content-center align-items-center text-dark">
                <form action="{{ route($goal) }}" method="GET">
                    <button type="submit"><img src="{{ asset('/icons/repeat.svg') }}"></button>
                </form>
            </div>
        </div>
    </div>
</x-main_container>
