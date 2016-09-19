<div class="container">
    <section>
        <h1><strong>Sobre a Car Sale</strong></h1>
        <p>
            A Car Sale é especializada na comercialização de veículos de coleção, das melhores e mais tradicionais marcas mundiais.
        </p>
        <p>
            Trabalhando seriamente com o objetivo de oferecer ao mercado produtos diferenciados, a Car Sale seleciona seus carros através de um rigoroso critério técnico de avaliação, garantindo sua qualidade e procedência. Além disso, oferece garantia de três meses
            para motor e câmbio para todos os veículos.
        </p>
        <p>
            Atuamos de maneira objetiva e eficaz. Aceitamos seu veículo usado como parte do pagamento e fazemos a melhor avaliação possível, conforme as condições do veículo e dentro das normas do mercado.
        </p>
        <p>
            A Car Sale faz questão de encontrar o carro dos seus sonhos e, para isso, presta um atendimento personalizado. Atuando de maneira objetiva, mantemos diversas opções ao seu dispor ou ainda procuramos o veículo que você deseja, sem compromisso.
        </p>
    </section>
    <section>
        <h2><strong>Localização</strong></h2>
        <div id="map"></div>
        <script>
            function initMap() {
                var mapDiv = document.getElementById('map');
                var map = new google.maps.Map(mapDiv, {
                    center: {
                        lat: -23.874999,
                        lng: -53.889529
                    },
                    zoom: 15
                });
                var marker = new google.maps.Marker({
                    map: map,
                    position: {
                        lat: -23.874999,
                        lng: -53.889529
                    },
                    title: 'Aqui mora gente feliz'
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCebsgHW3uwCegRBiSNIPL1wZPsZHlRxS4&callback=initMap">
        </script>
    </section>
    <section>
        <h2><strong>Fotos</strong></h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="imgs/landau.jpg" alt="Landal 1960" class="img-responsive">
                <h3>Landau 1960</h3>
                <a href="landau" class="btn btn-danger">
                    <i class="fa fa-search"></i> Detalhes
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="imgs/corvete.jpg" alt="Corvete" class="img-responsive">
                <h3>Corvete 1973</h3>
                <a href="corvete" class="btn btn-danger">
                    <i class="fa fa-search"></i> Detalhes
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="imgs/opala.jpg" alt="Opala" class="img-responsive">
                <h3>Opala 1979</h3>
                <a href="opala" class="btn btn-danger">
                    <i class="fa fa-search"></i> Detalhes
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <img src="imgs/maverick.jpg" alt="Maverick" class="img-responsive">
                <h3>Maverick 1950</h3>
                <a href="maverick" class="btn btn-danger">
                    <i class="fa fa-search"></i> Detalhes
                </a>
            </div>
        </div>
        <!-- fim do row -->
    </section>
</div>
