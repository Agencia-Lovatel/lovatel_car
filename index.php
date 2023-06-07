<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('includes/head.php') ?>
    <title>Lovatel Car</title>
</head>

<body>
    <?php require('includes/header.php') ?>

    <section class="veiculos container">
        <div class="main flex_c middle">
            <h2 class="main-t blueFont bold uppercase fullW t-center margin20">Veículos</h2>

            <form id="form_filter" class="flex_r flex_w form-mail" action="javascript:;">

                <input name="check_1" type="hidden" value="">
                <input style="position: absolute; width: 1px; top: -5000px; left: -5000px;" name="check_2" type="text">

                <select name="marca" class="input s_input" required>
                    <option value="">Marca:</option>
                </select>

                <select name="modelo" class="input s_input" required>
                    <option value="">Modelo:</option>
                </select>

                <select name="ano" class="input s_input" required>
                    <option value="">Ano:</option>
                </select>

                <button type="submit" class="button">Filtrar</button>

            </form>


            <div class="gridVeiculos fullW grid3">
                <?php for ($v = 0; $v < 9; $v++) { ?>
                    <a href="veiculos_detalhes.php" class="itemVeiculo fullW flex_c">
                        <div class="imgVeiculo fullW flex">
                            <img src="assets/img/imgCarro.webp" alt="Chevrolet S10">
                        </div>
                        <div class="descItemVeiculo fullW flex_c">
                            <h6 class="small-t purpleFont bold uppercase">Chevrolet S10</h6>
                            <span class="ano">2024</span>
                            <span class="preco">R$ 200.000,00 ou Consulte</span>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php require('includes/footer.php') ?>
</body>

</html>