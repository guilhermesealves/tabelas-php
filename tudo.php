<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    h1{
        padding-top: 100px;
        text-align: center;
    }
    .meio {
        padding-top: 14%;
        padding-left: 42%;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .button-margin {
        margin: 7px;
    }

    .tudo-meio {
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
        padding-right: 170px;
        padding-top: 20px;
        margin-top: 3%;
        margin-left: 34%;
        width: 500px;
        height: 500px;
    }

    button {
        appearance: none;
        background-color: transparent;
        border: 0.125em solid #1A1A1A;
        border-radius: 0.9375em;
        box-sizing: border-box;
        color: #3B3B3B;
        cursor: pointer;
        display: inline-block;
        font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        width: 200px;
        height: 80px;
        outline: none;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
    }

    button:disabled {
        pointer-events: none;
    }

    button:hover {
        color: #fff;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    button:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>

<body>
    <h1> TABLE PHP BY GUILHERME SELERI </h1>
    <div class="tudo-meio">
        <div class="meio">
            <div class="button-margin">
                <a href="cadastroCliente.php"><button>Cadastro Clientes</button></a>
            </div>
            <div class="button-margin">
                <a href=""><button>Cadastro Produtos</button></a>
            </div>
            <div class="button-margin">
                <a href=""><button>Cadastro Funcionario</button></a>
            </div>
            <div class="button-margin">
                <a href=""><button>Cadastro Fornecedor</button></a>
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>