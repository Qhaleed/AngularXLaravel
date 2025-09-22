
<div class="fixed hidden inset-0 z-50  items-center justify-center bg-black/50" id="duoRequest-form">

    <form action="{{ route('duo-requests.store') }}" method="POST" class= "space-y-4 text-white bg-gray-900 rounded-lg overflow-hidden shadow-lg m-auto max-w-md w-full mx-4 p-5" >


    <svg class="form-close-btn w-6 h-6   text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="form-close-btn">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
    @csrf
        <div>
            <label class="block font-medium">Game</label>
            <x-select name="game" required>
                <option value="" disabled selected>-- Select a Game --</option>
                <option value="valorant" >Valorant</option>
                <option value="dota2" >dota2</option>
                <option value="lol" >lol</option>
            </x-select>
            {{-- <x-input type="text" name="game" required/> --}}
            {{-- <input type="text" name="game" class="w-full border rounded p-2" required> --}}
            {{-- @error('game') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror --}}
        </div>

        <div>
            <label class="block font-medium">Server</label>
            <x-select name="server"  required>
                <option value="" disabled selected>-- Select a Server --</option>
                <option value="hongkong" >Hongkong</option>
                <option value="singapore" >Singapore</option>
                <option value="china" >China</option>
            </x-select>
            {{-- <x-input type="text" name="server" required/> --}}
            {{-- <input type="text" name="server" class="w-full border rounded p-2" required> --}}
            {{-- @error('server') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror --}}
        </div>

        <div>
            <label class="block font-medium">Discord Tag</label>
            <x-input type="text" name="discord_tag" required/>
            {{-- <input type="text" name="discord_tag" placeholder="username#1234" class="w-full border rounded p-2" required> --}}
            {{-- @error('discord_tag') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror --}}
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">
            Submit Request
        </button>
    </form>
</div>
