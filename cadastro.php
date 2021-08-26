<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="js/script.js"></script>

    <title>Cadastro</title>
</head>
<style>
    @font-face {
        font-family: 'Kopodaps';
        src: url('resources/fonts/kopodaps/Kopodaps.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    form input[type="file"] {
        color: black;
        padding: 2px;
        background: white;
        cursor: pointer;
    }
</style>

<body class="body-app">
    <div class="cabecalho-app">
        <div class="img-cad"><a href="index.php"><img src="resources/favicon/veterinario1.png" alt=""></a></div>
    </div>
    <div class="body-items">
        <div class="container">
            <h2 class="txt-login">CADASTRO</h2>
            <form action="classes/cadastrar.php" method="POST">
                <div class="row">
                    <div class="campo-cad">
                        <input type="text" name="nome" id="nome" placeholder="Nome completo">
                    </div>
                    <div class="campo-cad">
                        <input name="cpf" id="cpf" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="11" placeholder="CPF" />
                    </div>
                </div>
                <div class="row">
                    <div class="campo-cad">
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço">
                    </div>
                    <div class="campo-cad">
                        <select name="funcao" id="funcao">
                            <option value="" disabled selected>Cargo</option>
                            <option value="1">Médico / Cirurgião</option>
                            <option value="2">Groomer(Cabeleireiro)</option>
                            <option value="3">Atendente</option>
                        </select>
                    </div>
                </div>
                <div class="campo-cad senha-cad">
                    <input type="password" name="pass" id="pass" placeholder="Senha" minlength="6">
                </div>
                <input type="submit" id="btnCad" value="Cadastrar">
            </form>
            <div class="footer">
                <span>CLÍNICA VETERINÁRIA SEU PET 🐶😸</span>
            </div>
            <div class="voltar">
                <a href="index.php" style="text-align: right; font-size: 25px;">Voltar<a>
            </div>

        </div>
    </div>
</body>

</html>