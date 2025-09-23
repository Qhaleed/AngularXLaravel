@props(['name' => 'user', 'game' => 'valorant', 'server' => 'hongkong',
'action' => 'contact', 'discord_tag' => 'user#123'])

<div class="fixed inset-0 z-50
hidden items-center justify-center
  ">
    <div class="text-white flex flex-row bg-gray-900 rounded-lg overflow-hidden shadow-lg max-w-md w-full mx-4">
        <h1>{{ $name }} </h1>
        <h1>{{ $game }} </h1>
        <h1>{{ $server }} </h1>
        <h1>{{ $discord_tag }} </h1>
    </div>
</div>
