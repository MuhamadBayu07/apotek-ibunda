<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xlab Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body,
        html {
            height: 100%;
            background: linear-gradient(135deg, #004aad, #1e90ff);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Background Animasi Halus */
        .background span {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s infinite ease-in-out;
        }

        .background span:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-duration: 8s;
        }

        .background span:nth-child(2) {
            top: 50%;
            left: 20%;
            animation-duration: 6s;
        }

        .background span:nth-child(3) {
            bottom: 20%;
            right: 10%;
            animation-duration: 10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-30px);
            }
        }

        /* Form Container */
        .form-container {
            width: 350px;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #fff;
            position: relative;
        }

        .form-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Input Fields */
        .form-group {
            margin: 1rem 0;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            outline: none;
            color: #fff;
            font-size: 1rem;
            border-radius: 10px;
            transition: background 0.3s, box-shadow 0.3s;
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px #00bfff;
        }

        /* Button */
        .btn {
            display: inline-block;
            width: 100%;
            padding: 1rem;
            background: #00bfff;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 10px rgba(0, 191, 255, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            background: #009acd;
            box-shadow: 0 8px 20px rgba(0, 191, 255, 0.5);
        }

        /* Small Footer */
        .form-footer {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #d3d3d3;
        }
    </style>
</head>

<body>
    <!-- Background Floating Animation -->
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Form Login -->
    <div class="form-container">
        <img src="{{ asset('admin_assets') }}/img/xlablogo.png" height="150px" alt="Logo" class="logo">
        <form action="{{ route('login.action') }}" method="POST" class="user">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan email anda...">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <!-- <div class="custom-control custom-checkbox small">
                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div> -->
            </div>
            <button type="submit" class="btn btn-info btn-block btn-user">Login</button>
        </form>
        <div class="text-center">
            <a class="small" href="{{ route('register') }}">Buat Akun Baru!</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>

</html>