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
    .tudo {
        margin-top: 130px;
        margin-left: 550px;
        width: 500px;
        height: 600px;
        background-color: gainsboro;
        padding-top: 30px;
        padding-left: 45px;
    }

    button {
        padding: 15px 25px;
        border: unset;
        border-radius: 15px;
        color: #212121;
        z-index: 1;
        background: #e8e8e8;
        position: relative;
        font-weight: 1000;
        font-size: 17px;
        -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        transition: all 250ms;
        overflow: hidden;
    }

    button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        border-radius: 15px;
        background-color: #212121;
        z-index: -1;
        -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
        transition: all 250ms
    }

    button:hover {
        color: #e8e8e8;
    }

    button:hover::before {
        width: 100%;
    }
</style>

<body>

    <div class="tudo">
        <div class="title">
            <h1>Cadastro novo usuário</h1>
        </div>

        <div class="continer mt-5 ms-3">
            <div class="col">
                <div class="row">
                    <div class="col-md-10 ms-">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="number" name="cpf" class="form-control" placeholder="CPF">
                            </div>
                            <div class="form-group mt-1 ">
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" name="email" class="form-control" placeholder="Bairro">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Numero">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Cidade">
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" name="phone" class="form-control" placeholder="Estado">
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" name="phone" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Whatsapp">
                            </div>
                            <div class="mt-3">
                            </div>

                            <p class="small mt-3">
                                <a href=""> <button>Cadastrar</button>
                                </a>

                            </p>
                        </form>
                    </div>

                </div>
            </div>


        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>