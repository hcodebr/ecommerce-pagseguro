<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1 class="display-3">Pedido n° <?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?> recebido!</h1>
                    <p class="lead">Recebemos o seu pedido. Aguarde a confirmação do pagamento.</p>
                    <hr class="my-4">
                    <p>Mas fique tranquilo pois avisaremos por e-mail assim que possível.</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg" href="/profile/orders/<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Ver meus pedido</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>