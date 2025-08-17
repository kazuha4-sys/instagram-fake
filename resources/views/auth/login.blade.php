<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram · Login</title>
    <!-- @vite('resources/css/app.css')  Se estiver usando Laravel Mix ou Vite -->
    <link rel="icon" type="image/png" href="./img/insta-fav.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen font-sans">
<br>
<main class="h-screen mx-auto max-w-[935px] flex justify-center items-center">

    <!-- Auth -->
    <section id="auth" class="max-w-[350px] flex flex-col">

        <!-- Login Panel -->
        <div class="bg-white border border-gray-300 mb-2 p-4 flex flex-col">

            <!-- Logo -->
            <h1 class="flex justify-center my-5">
                <img src="https://raw.githubusercontent.com/kazuha4-sys/instagram-page-login-code-/refs/heads/main/img/instagram-logo.png" alt="Instagram logo"/>
            </h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col px-5 py-2">
                @csrf

                <!-- Email -->
                <label for="email" class="sr-only">Telefone, nome de usuário ou e-mail</label>
                <input id="email" name="email" type="email" placeholder="Telefone, nome de usuário ou e-mail"
                    value="{{ old('email') }}" required autofocus autocomplete="username"
                    class="w-full mb-2 px-2 py-2 rounded border border-gray-300 bg-gray-50 text-gray-500 placeholder-gray-500 focus:border-gray-400 focus:outline-none"/>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->
                <label for="password" class="sr-only">Senha</label>
                <input id="password" name="password" type="password" placeholder="Senha"
                    required autocomplete="current-password"
                    class="w-full mb-2 px-2 py-2 rounded border border-gray-300 bg-gray-50 text-gray-500 placeholder-gray-500 focus:border-gray-400 focus:outline-none"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"/>
                        <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full mt-2 h-[35px] bg-blue-500 rounded font-bold text-white hover:bg-blue-600">
                    Entrar
                </button>

                <!-- Forgot password -->
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="underline text-sm text-gray-500 hover:text-gray-900 block mt-2">
                        Esqueceu sua senha?
                    </a>
                @endif
            </form>

            <!-- Separator -->
            <div class="flex items-center px-5 py-2">
                <span class="flex-1 h-[1px] bg-gray-300 mr-2"></span>
                <div class="text-gray-500 font-bold text-sm">OU</div>
                <span class="flex-1 h-[1px] bg-gray-300 ml-2"></span>
            </div>

            <!-- Login with Facebook -->
            <div class="px-5 py-5 flex flex-col items-center w-full">
                <div class="mb-4 flex items-center">
                    <img class="inline" src="./img/facebook-icon.png" alt="Facebook Logo"/>
                    <a class="font-bold text-blue-800 ml-2">Entrar com o Facebook</a>
                </div>
            </div>

        </div>

        <!-- Register Panel -->
        <div class="bg-white border border-gray-300 p-5 flex justify-center mb-4">
            <p class="text-sm mr-1">Não tem uma conta?</p>
            <a href="#" class="text-blue-500 font-bold text-sm">Cadastre-se</a>
        </div>

        <!-- App download -->
        <div class="flex flex-col items-center p-4">
            <p class="py-2 text-sm">Obtenha o aplicativo.</p>
            <div class="flex justify-center">
                <img src="https://raw.githubusercontent.com/kazuha4-sys/instagram-page-login-code-/refs/heads/main/img/apple-button.png" class="h-10 mx-1" alt="Apple Store"/>
                <img src="https://raw.githubusercontent.com/kazuha4-sys/instagram-page-login-code-/refs/heads/main/img/googleplay-button.png" class="h-10 mx-1" alt="Google Play"/>
            </div>
        </div>

    </section>
</main>

<!-- Footer -->
<footer class="mx-auto max-w-[935px] mb-7">
    <ul class="flex flex-wrap justify-center mb-5">
        @foreach(['SOBRE','AJUDA','IMPRENSA','API','CARREIRAS','PRIVACIDADE','TERMOS','LOCALIZAÇÃO','CONTAS MAIS RELEVANTES','HASHTAGS','IDIOMA'] as $item)
            <li class="mx-2 mb-2">
                <a href="#" class="text-blue-800 font-bold uppercase text-center text-sm">{{ $item }}</a>
            </li>
        @endforeach
    </ul>
    <p class="text-gray-500 font-bold text-center text-sm">© 2020 Instagram do Facebook</p>
</footer>

</body>
</html>
