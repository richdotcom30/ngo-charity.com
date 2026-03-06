@extends('layouts.admin')

@section('title', 'NGO Login - Partner Access')

@section('content')
    <div class="relative min-h-screen flex w-full overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[#152111]/80 mix-blend-multiply z-10"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#152111] via-transparent to-transparent z-10"></div>
            <img alt="Volunteers planting trees in Australian bushland" class="w-full h-full object-cover opacity-60"
                data-alt="Volunteers planting trees in Australian bushland"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZXv0iL6OLQYx6gEGfl0LqMeQnwUH70AR7t1Nhg96HCMY61XaT3y47yAxtQoEfYNRM93ZJplZqC_H37Sd4c3NA3xWHXpBTPfK8jZJ1nrFGstloHqu7QeQbA-z20HFVV_WfhD2WvP2qiuA0kgIuaza_NTl8bXLk6ZxdGnmAld8iau9_UYMG1XpHzzWkZKbRkhAw1dwq4dD63Y8_JIWjJny0V_N4CxoFnZ0-SiQJ-Tgb3oSThQ4SaBUMQFC9s1QxrSUSc8bRns98YLU" />
        </div>
        <!-- Main Content Wrapper -->
        <div class="relative z-20 flex w-full flex-col md:flex-row h-screen">
            <!-- Left Side: Branding & Welcome (Desktop) / Top (Mobile) -->
            <div class="flex-1 flex flex-col justify-between p-8 md:p-12 lg:p-16 text-white/90">
                <!-- Logo Area -->
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary/20 text-primary border border-primary/30 backdrop-blur-sm">
                        <span class="material-symbols-outlined text-2xl">eco</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white">GreenHorizon Australia</span>
                </div>
                <!-- Hero Text (Hidden on small mobile landscape if needed, but good for context) -->
                <div class="hidden md:flex flex-col gap-6 max-w-lg mt-auto mb-20">
                    <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
                        Together, we create <span class="text-primary">lasting change</span>.
                    </h1>
                    <p class="text-lg text-gray-300 font-medium leading-relaxed">
                        Join our community of over 50,000 changemakers across Australia dedicated to preserving our unique
                        environment.
                    </p>
                    <div class="flex items-center gap-4 mt-4">
                        <div class="flex -space-x-3">
                            <img alt="Member Avatar" class="w-10 h-10 rounded-full border-2 border-[#152111]"
                                data-alt="Portrait of a smiling community member"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCq54bGRkbTjJNDZMNKkuSlKDM4t64HscN2HSNcU-kHbpwqTTDdadOpwjaMKGzJPghELsdbn77NGUFqB5ZzTg8EQgEjK5AxVXxAdyVWmR6CIqFYps3daa8ajiMbWFqW4vxzAkzYyt4fQ3mKZ7ZDlAjfFRH3UFvxVgG0mbFO3Yqb7zNYPmq_4PYjwuM_YmM9uAlgNbr2Tjn6ANzhVjDZeDaD02lb8zVEEwLGRT-H3HiXZRy4X8VmispzwYDe7eDbQlOtxiwLEcudc68" />
                            <img alt="Member Avatar" class="w-10 h-10 rounded-full border-2 border-[#152111]"
                                data-alt="Portrait of a young volunteer"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBrF7XBCgr5LpHQ-sdKwmU3zgaIq9SBYOuvDjJzxApA9H85YtmgEeYBvikzeAPIaBD2rtsw9Z4paRNf76T1DElEBDj4UOXcxDT3R94VC6XzfPyrJzNNg68G-zxXehqTsLB9gcOzBTz2pBeZYd_JrnA2ouLN44V2YkDb0GuDI4AKIJic3L04PHvIr6Kavq0s536NJmi1kvbkgF-Wz59p3hIWbegv_XA5h4u4NZEsXm2GzP0uvb11j1ZNKH_4inEDFu1NY-QCl5CdRo" />
                            <img alt="Member Avatar" class="w-10 h-10 rounded-full border-2 border-[#152111]"
                                data-alt="Portrait of a senior donor"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTdcGnkLT_wkH_QdH8zJGbCDcUhwGf9ESkzqp9F_nylrMTwoa_Hivp2mS1-mcCdxe8uLcESydI2vZopeo3jBLiZeRg1-aSJSJncfZ822JQ_3UcUx7ViCu-YkI7zm4IL28q49ZnExPf_afXazrjPGss3LGbBPFHtJWZCMf7W458KTRjtEfKjBrXRkN9rT7-bdt4etp1SX0JqhIHmk8hqND2z88B5se1lPQziRzsXZ-pTCBPcnF3jc34sV3P7eXEgWydTBpOl1VRWQM" />
                        </div>
                        <p class="text-sm text-gray-400">Join 120+ others online now</p>
                    </div>
                </div>
                <!-- Footer Links (Desktop) -->
                <div class="hidden md:flex gap-6 text-sm text-gray-400">
                    <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                    <a class="hover:text-primary transition-colors" href="#">Contact Support</a>
                </div>
            </div>
            <!-- Right Side: Login Form -->
            <div class="flex-1 flex items-center justify-center p-4 md:p-8 lg:p-12">
                <div
                    class="w-full max-w-[480px] bg-[#1a2c17]/60 dark:bg-[#1a2c17]/80 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl overflow-hidden p-8 md:p-10 flex flex-col gap-8 transition-all duration-500 ease-out transform translate-y-0 opacity-100">
                    <!-- Form Header -->
                    <div class="flex flex-col gap-2 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-white tracking-tight">Welcome Back</h2>
                        <p class="text-gray-400 text-sm md:text-base">Enter your details to access your impact dashboard.
                        </p>
                    </div>
                    <!-- Social Login -->
                    <div class="flex flex-col gap-3">
                        <button
                            class="flex items-center justify-center gap-3 w-full bg-white/5 hover:bg-white/10 border border-white/10 text-white rounded-lg h-12 transition-all duration-200 font-medium text-sm group">
                            <svg class="w-5 h-5 text-white/80 group-hover:text-white transition-colors" fill="currentColor"
                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4"></path>
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853"></path>
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05"></path>
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335"></path>
                            </svg>
                            Continue with Google
                        </button>
                    </div>
                    <div class="relative flex items-center gap-2 py-2">
                        <div class="h-px flex-1 bg-white/10"></div>
                        <span class="text-xs font-medium text-gray-500 uppercase">Or login with email</span>
                        <div class="h-px flex-1 bg-white/10"></div>
                    </div>
                    <!-- Input Fields -->
                    <form method="POST" action="{{ route('admin.login') }}" class="flex flex-col gap-5">
                        @csrf
                        <div class="space-y-1.5">
                            <label class="text-sm font-semibold text-gray-300 ml-1" for="email">Email Address</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <span
                                        class="material-symbols-outlined text-gray-500 group-focus-within:text-primary transition-colors text-[20px]">mail</span>
                                </div>
                                <input
                                    class="block w-full rounded-lg border border-[#406336]/50 bg-[#20321b]/50 pl-11 pr-4 py-3 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-sm transition-all shadow-sm"
                                    id="email" name="email" placeholder="name@example.com" required="" type="email" />
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between ml-1">
                                <label class="text-sm font-semibold text-gray-300" for="password">Password</label>
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <span
                                        class="material-symbols-outlined text-gray-500 group-focus-within:text-primary transition-colors text-[20px]">lock</span>
                                </div>
                                <input
                                    class="block w-full rounded-lg border border-[#406336]/50 bg-[#20321b]/50 pl-11 pr-11 py-3 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary sm:text-sm transition-all shadow-sm"
                                    id="password" name="password" placeholder="••••••••" required="" type="password" />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-500 hover:text-gray-300 transition-colors"
                                    onclick="togglePasswordVisibility()">
                                    <span id="password-toggle-icon"
                                        class="material-symbols-outlined text-[20px]">visibility</span>
                                </div>
                            </div>
                        </div>
                        <!-- Action Button -->
                        <button
                            class="mt-2 w-full flex items-center justify-center rounded-lg bg-primary py-3.5 px-4 text-sm font-bold text-[#152112] shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-[#152112] transition-all transform active:scale-[0.98]"
                            type="submit">
                            Log In
                        </button>
                    </form>
                    <!-- Footer -->
                    <div class="text-center">
                        <p class="text-sm text-gray-400">
                            Don't have an account?
                            <a class="font-bold text-primary hover:text-primary/80 transition-colors"
                                href="{{ route('register') }}">Join the movement</a>
                        </p>
                    </div>
                    <!-- Mobile Only Footer Links -->
                    <div
                        class="md:hidden flex justify-center gap-4 text-xs text-gray-500 mt-4 border-t border-white/5 pt-6">
                        <a href="#">Privacy</a>
                        <span class="text-gray-700">•</span>
                        <a href="#">Terms</a>
                        <span class="text-gray-700">•</span>
                        <a href="#">Help</a>
                    </div>
                    <script>
                        function togglePasswordVisibility() {
                            const passwordInput = document.getElementById('password');
                            const toggleIcon = document.getElementById('password-toggle-icon');

                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                toggleIcon.textContent = 'visibility_off';
                            } else {
                                passwordInput.type = 'password';
                                toggleIcon.textContent = 'visibility';
                            }
                        }
                    </script>
@endsection