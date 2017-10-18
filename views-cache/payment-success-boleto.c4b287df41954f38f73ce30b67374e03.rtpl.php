<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="jumbotron">
                    <h1 class="display-3">Pedido n° <?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?> recebido!</h1>
                    <p class="lead">Você ainda precisa pagar o boleto. Caso o boleto não seja pago até o vencimento, o pedido será cancelado.</p>
                    <hr class="my-4">
                    <p>O prazo de entrega é válido somente após a confirmação pela instituição financeira, que leva em média 5 dias.</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg" href="<?php echo htmlspecialchars( $order["despaymentlink"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank" role="button">Imprimir Boleto</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>