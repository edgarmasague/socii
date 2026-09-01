<x-layouts.app title="Register - Socii">
    <div class="auth-page">
        <a href="{{ route('home') }}" class="auth-page__brand">
            <span>S</span>ocii
        </a>
        <div class="auth-card">
            <div class="auth-card__header">
                <span class="auth-card__mark">✦</span>
                <h1 class="auth-card__title">Regístrate</h1>
                <p class="auth-card__subtitle">Crea tu cuenta y empieza a compartir tus momentos.</p>
            </div>
            <form action="{{ route('register') }}" method="POST" class="auth-card__form">
                @csrf
                <div class="auth-field">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-field">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" required autocomplete="username">
                    @error('username')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-field">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required autocomplete="new-password">
                    @error('password')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="auth-field">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="auth-field__error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn--solid auth-form__submit">Regístrate</button>
            </form>
            <p class="auth-card__switch">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia</a>
            </p>
        </div>
    </div>
</x-layouts.app>