<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login User - EyeDetect</title>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      min-height: 100vh;
      background: #eef1f5;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    /* background motif */
    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        radial-gradient(circle at 78% 50%, rgba(255,255,255,0.35), transparent 30%),
        url("{{ url_for('static', filename='background.jpg') }}");
      background-repeat: no-repeat;
      background-position: right center;
      background-size: contain;
      opacity: 0.12;
      pointer-events: none;
    }

    body::after {
      content: "";
      position: absolute;
      right: -120px;
      top: 50%;
      transform: translateY(-50%);
      width: 620px;
      height: 620px;
      border-radius: 50%;
      background:
        radial-gradient(circle, transparent 34%, rgba(0,0,0,0.03) 35%, transparent 36%),
        radial-gradient(circle, transparent 49%, rgba(0,0,0,0.03) 50%, transparent 51%),
        radial-gradient(circle, transparent 64%, rgba(0,0,0,0.03) 65%, transparent 66%);
      pointer-events: none;
    }

    .login-wrapper {
      width: 100%;
      max-width: 520px;
      padding: 20px;
      position: relative;
      z-index: 2;
    }

    .login-card {
      background: #ffffff;
      border-radius: 26px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.10);
      padding: 42px 38px 34px;
    }

    .user-icon {
      width: 82px;
      height: 82px;
      border-radius: 50%;
      background: #dfe9f8;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #1f73ea;
      font-size: 38px;
    }

    .login-card h1 {
      text-align: center;
      font-size: 34px;
      color: #111827;
      margin-bottom: 12px;
      font-weight: 800;
    }

    .subtitle {
      text-align: center;
      color: #6b7280;
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .form-group label {
      display: block;
      font-size: 15px;
      font-weight: 700;
      color: #111827;
      margin-bottom: 8px;
    }

    .input-box {
      position: relative;
    }

    .input-box input {
      width: 100%;
      height: 56px;
      border: 1.5px solid #d1d5db;
      border-radius: 12px;
      outline: none;
      padding: 0 52px;
      font-size: 16px;
      color: #111827;
      background: #fff;
    }

    .input-box input:focus {
      border-color: #1f73ea;
      box-shadow: 0 0 0 3px rgba(31, 115, 234, 0.10);
    }

    .input-box .left-icon,
    .input-box .right-icon {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: #6b7280;
      font-size: 20px;
    }

    .input-box .left-icon {
      left: 16px;
    }

    .input-box .right-icon {
      right: 16px;
      cursor: pointer;
      background: none;
      border: none;
    }

    .login-btn {
      width: 100%;
      height: 58px;
      border: none;
      border-radius: 12px;
      background: #1f73ea;
      color: #fff;
      font-size: 18px;
      font-weight: 700;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.2s;
    }

    .login-btn:hover {
      background: #1764cf;
    }

    .bottom-text {
      margin-top: 26px;
      text-align: center;
      font-size: 15px;
      color: #374151;
    }

    .bottom-text a,
    .forgot-link {
      color: #1f73ea;
      text-decoration: none;
      font-weight: 700;
    }

    .forgot-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 15px;
    }

    @media (max-width: 576px) {
      .login-card {
        padding: 32px 22px 28px;
        border-radius: 20px;
      }

      .login-card h1 {
        font-size: 28px;
      }

      .subtitle {
        font-size: 13px;
      }

      .input-box input {
        height: 52px;
        font-size: 15px;
      }

      .login-btn {
        height: 54px;
        font-size: 17px;
      }
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <div class="login-card">
      <div class="user-icon">
        <i class="fa-regular fa-user"></i>
      </div>

      <h1>Login User</h1>
      <p class="subtitle">
        Silakan masuk untuk mengakses sistem EyeDetect<br>
        dan gunakan fitur deteksi dengan mudah.
      </p>

      <form action="/login" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-box">
            <i class="fa-regular fa-envelope left-icon"></i>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Masukkan email Anda"
              required
            />
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-box">
            <i class="fa-solid fa-lock left-icon"></i>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan password Anda"
              required
            />
            <button type="button" class="right-icon" onclick="togglePassword()">
              <i class="fa-regular fa-eye" id="eyeIcon"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="login-btn">
          <i class="fa-solid fa-right-to-bracket"></i> Masuk
        </button>
      </form>

      <div class="bottom-text">
        Belum punya akun? <a href="/register">Daftar</a>
      </div>

      <a href="/forgot-password" class="forgot-link">Lupa password?</a>
    </div>
  </div>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    }
  </script>
</body>
</html>