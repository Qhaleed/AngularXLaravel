<nav class="flex items-center justify-between px-10 flex-row bg-gray-800 text-white w-full p-1 py-5">
    {{-- Logo name  --}}
            {{ $slot }}
    <div>


        @if(Auth::check())
        <div class="flex align-middle text-center justify-center gap-5">
            <h1>Welcome back {{Auth::user()->name}}</h1>
            <x-logout-button>
                logout
            </x-logout-button>
        </div>

        @else

         <x-auth-button variant="primary" id="signup-btn" >
                Sign Up
            </x-auth-button>

            <x-auth-button variant="outline" id="login-btn">
                Login
            </x-auth-button>
@endif



    </div>

</nav>
