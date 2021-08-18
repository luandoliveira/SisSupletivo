@extends('layouts.app')


@section('content')
	<div class=""></div>
		<div class="container-login100">
			<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(img/2S3.png);">
					<!-- <div class="login100-form-title"> -->
					<span class="login100-form-title-1">
					
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="login é obrigatorio">
						<span class="label-input100">Login</span>
						<input id="email"  class="input100 @error('email') is-invalid @enderror" type="email" name="email"placeholder="Entre com seu email" value="{{ old('email') }}" autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Senha obrigatoria">
						<span class="label-input100">Senha</span>
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Entre com sua senha"  autocomplete="current-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> -->

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>

	
		<div class="footer">
    <div class="position-relative">
	<div style="background-color:black;font-size:0.8rem;">Copyright 2021 © Secretaria de Estado de Educação do Amazonas - Todos os direitos reservados.</div>
      <img src="img\rodape.png" id="imagem">
	 
    </div>
  </div>
	</div>
	

	@endsection

