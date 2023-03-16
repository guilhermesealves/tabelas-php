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
    .buttonDownload {
  display: inline-block;
  position: relative;
  padding: 10px 25px;
  background-color: #4CC713;
  color: white;
  font-family: sans-serif;
  text-decoration: none;
  font-size: 0.9em;
  text-align: center;
  text-indent: 15px;
  border: none;
  border-radius: 2em;
  font-weight: bold;
}

.buttonDownload:hover {
  background-color: #1a60a2;
  color: white;
}

.buttonDownload:before, .buttonDownload:after {
  content: ' ';
  display: block;
  position: absolute;
  left: 15px;
  top: 52%;
}

.buttonDownload:before {
  width: 10px;
  height: 2px;
  border-style: solid;
  border-width: 0 2px 2px;
}

.buttonDownload:after {
  width: 0;
  height: 0;
  margin-left: 3px;
  margin-top: -7px;
  border-style: solid;
  border-width: 4px 4px 0 4px;
  border-color: transparent;
  border-top-color: inherit;
  animation: downloadArrow 1s linear infinite;
  animation-play-state: paused;
}

.buttonDownload:hover:before {
  border-color: #bdd3ef;
}

.buttonDownload:hover:after {
  border-top-color: #eff1f7;
  animation-play-state: running;
}

@keyframes downloadArrow {
  0% {
    margin-top: -7px;
    opacity: 1;
  }

  0.001% {
    margin-top: -15px;
    opacity: 0.4;
  }

  50% {
    opacity: 1;
  }

  100% {
    margin-top: 0;
    opacity: 0.4;
  }
}

</style>

<body>

    <div class="tudo">
        <div class="title">
            <h1>Cadastro de Produtos</h1>
        </div>

        <div class="continer mt-5 ms-3">
            <div class="col">
                <div class="row">
                    <div class="col-md-10 ms-">
                        <form action="" method="post">
                            <div class="form-group mt-1 ">
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group mt-1">
                               <SELEct name="Categoria" class="form-select">
                                <option selected>Categoria</option>
                                <option>Produtos de Criança</option>
                                <option>Produtos de PET</option>
                                <option>Produtos de Casa</option>
                                <option>Produtos de Cozinha</option>
                               </SELEct>
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Numero">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Quantidade">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Preço de Compra">
                            </div>
                            <div class="form-group mt-1">
                                <input type="number" name="phone" class="form-control" placeholder="Preço de Venda">
                            </div>
                            <div class="mt-3">
                            <button class="buttonDownload">Foto do Produto</button>

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