<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  
			<form method="post">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?=$obUsuario->nome?>">
				</div>
				<div class="form-group">
					<label for="sobrenome">Sobrenome:</label>
					<input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="<?=$obUsuario->sobrenome?>">
				</div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" value="<?=$obUsuario->email?>">
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" class="form-control" name="senha" placeholder="Digite sua senha" value="<?=$obUsuario->senha?>">
					<p>
				</div>

				
				<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
			</form>
		


</main>