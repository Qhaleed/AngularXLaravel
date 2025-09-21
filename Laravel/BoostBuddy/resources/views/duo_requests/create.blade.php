<!DOCTYPE html>
<html>
<head>
    <title>Create Duo Request</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Create Duo Request</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('duo-requests.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Game</label>
                <input type="text" name="game" class="w-full border rounded p-2" required>
                @error('game') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium">Server</label>
                <input type="text" name="server" class="w-full border rounded p-2" required>
                @error('server') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium">Discord Tag</label>
                <input type="text" name="discord_tag" placeholder="username#1234" class="w-full border rounded p-2" required>
                @error('discord_tag') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">
                Submit Request
            </button>
        </form>
    </div>

</body>
</html>
