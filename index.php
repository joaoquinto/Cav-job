<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Carnê" />
  <meta property="og:description" content="Carnê template" />
  <link rel="stylesheet" href="css/style.css">
  <title>Carnê</title>
</head>

<body>
  <main class="container">
    <?php
    for ($i = 2; $i <= 12; $i++) {
      $validationMes = ($i == 10 || $i == 11 || $i == 12 ? $i : "0$i");
      echo <<<HTML
      <section class="container-carne">
        <!-- Original -->
        <div class="carne-item">
          <header class="header-carne">
            <img src="./assets/img/image1.png" class="logo-carne" alt="">
            <h2 class="title-carne">Colégio Multimédio LTDA <br> <span>Carnê de pagamento</span></h2>
          </header>
          <p class="ano">2022</p>
          <ul class="informacoes-pagamento">
            <li class="text-preto">Aluno:</li>
            <li class="text-preto">Série:</li>
            <li class="text-preto">
              Referente á Mensalidade: <span class="mes">$i/12</span>
            </li>
            <li class="text-preto">Valor: <span></span></li>
            <li>
              <div class="valores">
                <p class="texto-verde">Pagamento até 08/$validationMes/2022: <span class="valor">R$501,00</span></p>
                <p class="texto-marrom">Pagamento de 09/$validationMes/2022 à 28/$validationMes/2022 <span>R$511,00</span> </p>
                <p class="texto-vermelho">Mar_R$536,78</p>
              </div>
            </li>
            <li>
              <div class="valor-pago">
                <p>Valor pago:R$ </p>
                <p>Data</p>
              </div>
            </li>
            <li>
              <ul class="forma-de-pagamento">
                <li>Forma de Pg: </li>
                <li>PIX <span>( )</span> </li>
                <li>Din <span>( )</span> </li>
                <li>Transf. <span>( )</span> </li>
                <li>Déb <span>( )</span> </li>
                <li>Cré <span>( )</span> </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Copia -->
        <div class="carne-item">
          <header class="header-carne">
            <img src="./assets/img/image1.png" class="logo-carne" alt="">
            <h2 class="title-carne">Colégio Multimédio LTDA <br> Carnê de pagamento</h2>
          </header>
          <p class="ano">2022</p>
          <ul class="informacoes-pagamento">
            <li class="text-preto">Aluno:</li>
            <li class="text-preto">Série:</li>
            <li class="text-preto">
              Referente á Mensalidade: <span class="mes"> $i/12</span>
            </li>
            <li class="text-preto espacamento">Valor: <span></span></li>
            <li>
              <div class="valor-pago">
                <p class="">Valor pago: R$</p>
                <p class="">Data</p>
              </div>
            </li>
            <li>
              <ul class="forma-de-pagamento">
                <li>Forma de Pg: </li>
                <li>PIX <span>( )</span> </li>
                <li>Din <span>( )</span> </li>
                <li>Transf. <span>( )</span> </li>
                <li>Déb <span>( )</span> </li>
                <li>Cré <span>( )</span> </li>
              </ul>
            </li>
          </ul>
        </div>
      </section>
      <hr class="linha">
     HTML;
    } ?>


  </main>

</body>

</html>