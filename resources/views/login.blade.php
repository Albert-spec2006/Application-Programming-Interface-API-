<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DIKS HAIR CUT - Login</title>
    <link href="{{ asset('assets/img/diks-favicon.svg') }}" rel="icon" type="image/svg+xml">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                rgba(17, 29, 22, 0.9),
                rgba(17, 29, 22, 0.9)
            ),
            linear-gradient(
                135deg,
                #17241c,
                #34493a
            );

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;
        }

        /* Kotak login */
        .login-card {
            width: 100%;
            max-width: 400px;

            background: #ffffff;

            border-radius: 16px;

            padding: 35px 32px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.45);

            border-top: 5px solid #c5a46a;
        }

        /* Logo / ikon */
        .barber-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 15px;

            border-radius: 50%;

            background: #111111;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 36px;

            border: 3px solid #c5a46a;
        }

        /* Judul */
        .login-title {
            text-align: center;

            font-size: 28px;
            font-weight: 800;

            color: #111111;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }

        .login-subtitle {
            text-align: center;

            color: #777777;

            font-size: 14px;

            margin-bottom: 28px;
        }

        /* Label */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;

            font-size: 14px;
            font-weight: 600;

            color: #222222;

            margin-bottom: 8px;
        }

        /* Input */
        input {
            width: 100%;

            height: 46px;

            padding: 0 14px;

            border: 1px solid #d5d5d5;

            border-radius: 8px;

            font-size: 14px;

            color: #222222;

            background: #fafafa;

            outline: none;

            transition: 0.2s;
        }

        input:focus {
            border-color: #a88a56;

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(197, 164, 106, 0.18);
        }

        /* Tombol login */
        .login-button {
            width: 100%;

            height: 48px;

            margin-top: 8px;

            border: none;

            border-radius: 8px;

            background: #1c3328;

            color: #ffffff;

            font-size: 15px;

            font-weight: 700;

            letter-spacing: 1px;

            cursor: pointer;

            transition: 0.2s;
        }

        .login-button:hover {
            background: #c5a46a;

            color: #111111;
        }

        .login-button:active {
            transform: scale(0.98);
        }

        /* Error */
        .error-message {
            margin-top: 6px;

            color: #dc2626;

            font-size: 12px;
        }

        /* Footer */
        .footer {
            text-align: center;

            margin-top: 25px;

            color: #999999;

            font-size: 12px;
        }

        .footer span {
            color: #a88a56;

            font-weight: 700;
        }

        .back-link {
            display: inline-block;
            margin-top: 18px;
            color: #777777;
            font-size: 12px;
            text-decoration: none;
        }

        .back-link:hover {
            color: #876e40;
        }

        .flash-error {
            margin: -10px 0 18px;
            padding: 11px 13px;
            border: 1px solid #f2caca;
            border-radius: 8px;
            background: #fff4f4;
            color: #b42318;
            font-size: 13px;
        }

        /* Responsive HP */
        @media (max-width: 480px) {

            .login-card {
                padding: 30px 22px;
            }

            .login-title {
                font-size: 24px;
            }

            .barber-icon {
                width: 60px;
                height: 60px;

                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        {{-- ICON BARBERSHOP --}}
        <div class="barber-icon">
            💈
        </div>

        {{-- JUDUL --}}
        <h1 class="login-title">
            DIKS HAIR CUT
        </h1>

        {{-- SUB JUDUL --}}
        <p class="login-subtitle">
            Panel pengelola DIKS HAIR CUT
        </p>

        @if (session('gagal'))
            <div class="flash-error" role="alert">{{ session('gagal') }}</div>
        @endif

        {{-- FORM LOGIN --}}
        <form method="POST" action="{{ route('login.proses') }}">
            @csrf

            {{-- EMAIL --}}
            <div class="form-group">

                <label for="email">
                    Alamat email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                    autofocus
                >

                @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- PASSWORD --}}
            <div class="form-group">

                <label for="password">
                    Kata sandi
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- TOMBOL --}}
            <button
                type="submit"
                class="login-button"
            >
                MASUK
            </button>

        </form>


        {{-- FOOTER --}}
        <div class="footer">
            <span>DIKS HAIR CUT</span>
            <br>
            Professional Barbershop
        </div>

        <a class="back-link" href="{{ route('frontend') }}">← Kembali ke website</a>

    </div>

</body>
</html>
