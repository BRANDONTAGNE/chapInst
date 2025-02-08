<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat WebSockets</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
    <div class="flex justify-center mt-6">
        <div class="flex flex-col border-1 border-gray-200 min-w-lg min-h-9/10 rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-3 grid-rows-auto gap-6 py-2 px-6">
    {{--            @foreach($messages as $message)
                    @if($message->sender == 'you')--}}
                        <!-- Sent message -->
                        <div class="col-end-7 flex justify-end">
                            <div class="flex items-end gap-2.5">
                                <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-blue-100 rounded-e-xl rounded-es-xl dark:bg-blue-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-white">You</span>
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{-- $message->time --}}</span>
                                    </div>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{-- $message->content --}}</p>
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                </div>
                                <svg class="w-8 h-8 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                
                                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Your image"> --}}
                            </div>
                        </div>
                        <div class="col-end-7 flex justify-end">
                            <div class="flex items-end gap-2.5">
                                <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-blue-100 rounded-e-xl rounded-es-xl dark:bg-blue-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-white">You</span>
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{-- $message->time --}}</span>
                                    </div>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{-- $message->content --}}</p>
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                </div>
                                <svg class="w-8 h-8 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Your image"> --}}
                            </div>
                        </div>
                {{-- @else--}}
                        <!-- Received message -->
                        <div class="col-end-3 col-span-7 flex">
                            <div class="flex items-start gap-2.5">
                                <svg class="w-8 h-8 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image"> --}}
                                <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-white">{{--$message->sender --}}</span>
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{-- $message->time --}}</span>
                                    </div>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{-- $message->content --}}</p>
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-end-3 col-span-7 flex">
                            <div class="flex items-start gap-2.5">
                                <svg class="w-8 h-8 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image"> --}}
                                <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-white">{{--$message->sender --}}</span>
                                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{-- $message->time --}}</span>
                                    </div>
                                    <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{{-- $message->content --}}</p>
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
                                </div>
                            </div>
                        </div>
    {{--              @endif
                @endforeach --}}
            </div>
            <form class="flex items-center max-w-lg mx-6 my-4">   
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z"/>
                        </svg>
                    </div>
                    <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Writh message to send..." required />
                    <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
                        </svg>
                    </button>
                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                      </svg>                      
                </button>
            </form>
        </div>
    </div>

</body>
</html>
