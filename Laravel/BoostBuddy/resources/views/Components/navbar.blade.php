<nav class="flex items-center justify-between px-10 flex-row bg-gray-900 text-white w-full p-1 my-5">

            {{ $slot }}
    <div>
  <x-auth-button variant="primary" id="signup-btn" >
                Sign Up
            </x-auth-button>

            <x-auth-button variant="outline" id="login-btn">
                Login
            </x-auth-button>
    </div>

</nav>
