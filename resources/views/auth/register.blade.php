<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register with Animation</title>
    <style>
        /* General Body Styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #007BFF, #004C97);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: white;
            position: relative;
        }

        /* Floating Circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        /* Keyframe Animation for Floating */
        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* Circle Sizes and Positions */
        .circle-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 5%;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            bottom: 15%;
            right: 10%;
        }

        .circle-3 {
            width: 100px;
            height: 100px;
            top: 60%;
            left: 15%;
        }

        .circle-4 {
            width: 120px;
            height: 120px;
            bottom: 10%;
            left: 25%;
        }

        /* Main Container */
        .container {
            width: 350px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(15px);
            padding: 30px;
            animation: fadeIn 1s ease-in-out;
            z-index: 10;
            text-align: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Logo Styling */
        .logo {
            width: 80px;
            /* Lebar gambar yang disesuaikan */
            height: auto;
            /* Menjaga aspek rasio */
            margin: 0 auto 20px auto;
            /* Tengah dan beri jarak ke bawah */
            display: block;
            /* Menghilangkan extra space */
            object-fit: contain;
            /* Memastikan gambar tidak terpotong */
        }

        /* Form Styling */
        input {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: none;
            outline: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transition: all 0.3s ease-in-out;
        }

        input::placeholder {
            color: #e0e0e0;
        }

        input:focus {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
            background: #00bfff;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            background: #00a8e6;
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }

        a {
            display: block;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 10px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #00bfff;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Floating Circles -->
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

    <!-- Form Container -->
    <div class="container">
        <!-- Logo -->
        <img src="{{ asset('admin_assets') }}/img/xlablogo.png" height="150px" alt="Logo" class="logo">
        <div style="font-size: 1.5rem; font-weight: bold; margin-bottom: 10px;">Buat Akun Baru</div>
        <div class="col-lg-7">
            <div class="p-5">
            </div>
            <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <div class="form-group">
                    <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Nama">
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Alamat Email">
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Ulangi Password">
                        @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-user btn-block">Daftar Akun</button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
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