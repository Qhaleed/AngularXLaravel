{{-- @props(['duoRequests' => []]); --}}

<div class="flex flex-col mx-10 m-auto">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="border border-white rounded-lg divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <div class="py-3 px-4">

            {{-- Search --}}
          <div class="relative max-w-xs">
            <label for="hs-table-search" class="sr-only">Search</label>
            <input type="text" name="hs-table-search" id="hs-table-search" class="py-1.5 sm:py-2 px-3 ps-9 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search for items">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
              <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
              </svg>
            </div>
          </div>
            {{-- Search --}}



        </div>
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-700">
              <tr>
                <th scope="col" class="py-3 px-4 pe-0">
                  {{-- <div class="flex items-center h-5"> --}}
                    {{-- <input id="hs-table-search-checkbox-all" type="checkbox" class="border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"> --}}
                    {{-- <label for="hs-table-search-checkbox-all" class="sr-only">Checkbox</label> --}}
                  {{-- </div> --}}
                </th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Game</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Server</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Accept</th>
              </tr>
            </thead>



            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                {{-- All data are hardcoded and will soon be dynamic when db is up --}}
                {{-- <x-ticket name="Blebleble" game="valorant" server="hongkong">
                </x-ticket> --}}
                {{-- @foreach ($duoRequests as $request)
                    <x-ticket :name="$request->user->name" :game="$request->game" :server="$request->server" />

                @endforeach --}}
                {{-- {{ $slot }} --}}
                        @foreach ( $duoRequests as $request )

                            <x-ticket :game="$request->game" :server="$request->server" />

                        @endforeach



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
