@props(['name'=> 'user'])

<select name="{{$name}}" class="w-full border rounded p-2 text-white" required >
    {{ $slot }}
</select>
<style>
    select option {
        background-color: #1f2937; /* Dark background */
        color: white;
        padding: 8px;
    }

    select option:hover {
        background-color: #374151;
    }
</style>
