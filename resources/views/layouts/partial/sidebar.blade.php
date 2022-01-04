<aside
    class="sidebar absolute lg:relative inset-y-0 left-0
         bg-aside w-64 space-y-2 transform -translate-x-full lg:translate-x-0 transition duration-300 ease-in-out z-20">
    <div class="relative p-6 ">
        <img class="w-40 mb-3 " src="{{asset('img/brin-logo.png')}}" alt="BRIN LOGO">
        <span class="absolute text-slate-500 font-bold bottom-05">Dashboard BRIN</span>
    </div>
    <nav class="h-full">
        <div class="h-full flex flex-col justify-between">
            <div>
                @auth
                    <a href="/" class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <span>Informasi</span>
                    </a>
                    @if (auth()->user()->is_reviewer)
                        <a href="reviewPage.html" class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                            <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                            <span>Review Proposal</span>
                        </a>
                        <a href="hasilPage.html" class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                            <span>Hasil Review</span>
                        </a>
                    @else
                        <a href="{{ route('user.submission') }}" class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                            <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                            <span>Pengajuan Proposal</span>
                        </a>
                        <a href="{{ route('user.result-form') }}" class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                            <span>Hasil Seleksi</span>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                        class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Login</span>
                    </a>
                    <a href="{{ route('register') }}"
                        class="py-4 px-6 hover:bg-slate-500 flex items-center space-x-3 font-normal">
                        <i class="fas fa-user-plus"></i>
                        <span>Register</span>
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</aside>
