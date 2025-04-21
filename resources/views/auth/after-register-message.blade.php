<x-layout>
    <x-main>
        <div class="p-4 bg-gray-800 flex m-auto w-50">
            <p class="text-white flex">You are registered, You can login know but you can use the feature,
                check
                your email for verification your
                email and use unlock all the feature! You are redirect to the Login page after 5 secound...</p>
        </div>

        @if (session()->has('redirect-after-register-message'))
            <script>
                setTimeout(function() {
                    window.location.href = "http://localhost:8000/auth/login";
                }, 5000); // 2 second
            </script>
        @endif

    </x-main>
</x-layout>
