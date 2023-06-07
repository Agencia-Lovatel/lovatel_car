<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('includes/head.php') ?>
    <title>Chevrolet S10 - Lovatel Car</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.css">
    <link rel="stylesheet" href="assets/css/slides.css?v=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
</head>

<body>
    <?php require('includes/header.php') ?>

    <section class="veiculosDetalhes container">
        <div class="main flex_r flex_w">
            <div class="sliderVeiculo">
                <?php require('includes/sliderVeiculo.php') ?>
            </div>

            <div class="descricaoVeiculo flex_c">
                <h1 class="main-t purpleFont bold uppercase margin10">Chevrolet S10</h1>
                <span class="ano">2024</span>
                <span class="preco">R$ 200.000,00 ou Consulte</span>

                <p>A S10 Cabine Dupla vem equipada com 6 airbags de série (2 frontais, 2 laterais e 2 de cortina), alerta de pedestres e uma série de outras inovações para que você e seus passageiros sigam sempre seguros. diversas outras tecnologias que reforçam sua segurança em todos os caminhos.</p>
            </div>

            <div class="formulario fullW flex_c middle">
                <h4 class="main-t whiteFont bold uppercase t-center margin20">Estou Interessado</h4>

                <form id="form_contact" class="flex_r flex_w form-mail" action="javascript:;">

                    <input name="check_1" type="hidden" value="">
                    <input style="position: absolute; width: 1px; top: -5000px; left: -5000px;" name="check_2" type="text">

                    <input type="text" name="nome" class="input f_input" placeholder="Nome:" required>
                    <input type="email" name="email" class="input e_input" placeholder="E-mail:" required>
                    <input type="tel" name="telefone" id="telefone" class="input e_input" placeholder="Telefone:" maxlength="15" required>
                    <input type="text" name="cidade" class="input e_input" placeholder="Cidade:" required>
                    <select name="estado" class="input e_input" required>
                        <option value="">Estado:</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>

                    <textarea name="mensagem" class="input msg" placeholder="Mensagem:" required></textarea>

                    <button type="submit" class="button right">Enviar Mensagem</button>

                </form>
            </div>

            <a href="javascript:;" class="btnVoltar button" onclick="history.back()">Voltar</a>
        </div>
    </section>

    <?php require('includes/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script>
        var swiper = new Swiper('.slides .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.slides .swiper-pagination',
                clickable: true,
            }
        });

        $.fancybox.defaults.backFocus = false;
    </script>
</body>

</html>