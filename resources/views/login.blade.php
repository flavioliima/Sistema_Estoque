<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="/css/login.css" rel="stylesheet" />
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/b7962066fb.js" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown bg-dark">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first mt-3 mb-2">
            <div>
                <i class="fa-solid fa-cart-flatbed fa-3x mb-2"></i>
            </div>


            <div class="titulo_sistema">
                <strong>SIS ESTOQUE</strong></a>
            </div>

            <div class="text-center mt-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

        </div>

        <!-- Login Form -->
        <form method="post">
            @csrf
            <input type="email" id="email" class="form-control" name="email" placeholder="Email" autofocus>
            <input type="password" id="password" class="form-control" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth mt-3" value="Entrar">
        </form>

{{--        <!-- Remind Passowrd -->--}}
{{--        <div id="formFooter">--}}
{{--            <a class="underlineHover" href="#">Forgot Password?</a>--}}
{{--        </div>--}}

    </div>
</div>
