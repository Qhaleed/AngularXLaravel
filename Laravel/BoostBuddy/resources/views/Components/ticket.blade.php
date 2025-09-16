@props(['name' => 'user', 'game' => 'valorant', 'server' => 'hongkong', 'action' => 'accept']);

    <tr>
        <td class="py-3 ps-4">
            <div class="flex items-center h-5">
            <input id="hs-table-search-checkbox-1" type="checkbox" class="border-gray-200 rounded-sm
             text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700
             dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
            <label for="hs-table-search-checkbox-1" class="sr-only">Checkbox</label>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$name}}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $game }}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$server}}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
            <button type="button" class="inline-flex items-center
            gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden
             focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none
              dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                {{$action}}</button>
        </td>
    </tr>
