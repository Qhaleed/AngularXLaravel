<div id="login-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
    <div class="bg-gray-900 rounded-lg overflow-hidden shadow-lg max-w-md w-full mx-4">
        <div class="flex flex-col p-6">
            <div class="flex flex-row justify-between items-center mb-4">
                <h1 class="text-white text-lg font-semibold">Login</h1>

                <button type="button" class="text-gray-400 hover:text-white transition-colors" id="login-close-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
