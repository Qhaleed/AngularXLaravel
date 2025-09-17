<nav class="flex items-center justify-between px-10 flex-row bg-gray-900 text-white w-full p-1 my-5">

            {{ $slot }}
    <div>


        @if(Auth::check())
      <h1>Welcome back {{Auth::user()->name}}</h1>
        @else

         <x-auth-button variant="primary" id="signup-btn" >
                Sign Up
            </x-auth-button> <x-auth-button variant="outline" id="login-btn">
                Login
            </x-auth-button>
@endif



    </div>

</nav>
