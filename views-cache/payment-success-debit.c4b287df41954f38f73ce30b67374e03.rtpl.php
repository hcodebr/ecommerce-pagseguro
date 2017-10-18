<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1 class="display-3">Pedido n° <?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?> recebido!</h1>
                    <p class="lead">Você ainda precisa pagar usando o site do seu banco.</p>
                    <hr class="my-4">
                    <p>Use o botão abaixo para acessar o site do seu banco:</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg" href="<?php echo htmlspecialchars( $order["despaymentlink"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" role="button">Ir para o banco</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>