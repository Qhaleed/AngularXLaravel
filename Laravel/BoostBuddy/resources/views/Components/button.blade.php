@props(['id'=>'btn'])


<button class="bg-blue-700 hover:bg-blue-900  transition duration-200 max-w-50 rounded-md px-3 py-2 text-white" id="{{ $id }}">
            {{$slot}}
    </button>
