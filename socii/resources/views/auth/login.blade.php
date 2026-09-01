<x-layouts.app title="Login - Socii">
    <div class="auth-page">
        <a href="{{ route('home') }}" class="auth-page__brand">
            <span>S</span>ocii
        </a>
        <div class="auth-card">
            <div class="auth-card__header">
                <span class="auth-card__mark">✦</span>
                <h1 class="auth-card__title">Entrar</h1>
                <p class="auth-card__subtitle">Continua tu archivo de momentos.</p>
            </div>
            @session('status')
                <div class="auth-card__status">
                    {{ $value }}
                </div>
            @endsession
            <form action="{{ route('login') }}" method="POST" class="auth-card__form">
                @csrf
                <div class="auth-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-field">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password">
                    @error('password')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-form__row">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <span class="auth-checkbox__check"></span>
                        <span class="auth-checkbox__label">Recordarme</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="auth-form__forgot">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>
                <button type="submit" class="btn btn--solid auth-form__submit">Entrar</button>
            </form>
            <p class="auth-card__switch">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
        </div>
    </div>
</x-layouts.app>