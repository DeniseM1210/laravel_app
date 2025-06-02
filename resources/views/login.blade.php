<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
      <form class="form-signin" action="{{ route('index') }}" method="GET">
        @csrf
        <h2 class="form-signin-heading">Please login</h2>
        <input
          type="text"
          class="form-control"
          name="username"
          placeholder="Email Address"
          autofocus=""
        />
        <input
          type="password"
          class="form-control"
          name="password"
          placeholder="Password"
        />
        <label class="checkbox">
          <input
            type="checkbox"
            value="remember-me"
            name="rememberMe"
          />
          Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Login
        </button>
      </form>
    </div>
</body>
<style>
    @import "bourbon";

    body {
      background: #eee !important;
    }

    .wrapper {
      margin-top: 80px;
      margin-bottom: 80px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px 35px 45px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.1);

      .form-signin-heading,
      .checkbox {
        margin-bottom: 30px;
      }

      .checkbox {
        font-weight: normal;
      }

      .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;

        &:focus {
          z-index: 2;
        }
      }

      input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }

      input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    }
  </style>
</html>