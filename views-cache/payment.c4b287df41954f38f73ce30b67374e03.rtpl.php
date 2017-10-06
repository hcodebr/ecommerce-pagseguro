<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
.button.alt.btn:hover, .button.alt.btn:focus {
    color: #fff!important;
}
</style>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="product-content-right">
					
						<div id="customer_details" class="col2-set">
							<div class="row">
								<div class="col-md-12">

									<?php if( $msgError != '' ){ ?>
									<div class="alert alert-danger">
										<?php echo htmlspecialchars( $msgError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
									</div>
                                    <?php } ?>
                                    
                                    <div id="alert-error" class="alert alert-danger hide">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <span class="msg">Error</span>
                                    </div>

									<div class="woocommerce-billing-fields">
										<h3>Forma de Pagamento</h3>

                                        <div id="loading" style="margin:10px 0;">
                                            <i class="fa fa-refresh fa-spin fa-fw margin-bottom"></i> Carregando métodos de pagamento...
                                        </div>

                                        <div id="payment-methods" class="hide">
                                            <!-- Nav tabs -->
                                            <ul id="tabs-methods" class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab-boleto" role="tab">Boleto</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab-debito" role="tab">Débito</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab-credito" role="tab">Cartão de Crédito</a>
                                                </li>
                                            </ul>
                                            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane" id="tab-boleto" role="tabpanel">

                                                    <form action="/payment/boleto" class="checkout" method="post" name="checkout" style="padding:10px;" id="form-boleto">

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="cpf_field">CPF:</label>
                                                                    <input type="text" required="required" placeholder="" id="cpf_field" name="cpf" class="input-text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="nascimento_field">Data de nascimento:</label>
                                                                    <input type="date" required="required" placeholder="" id="nascimento_field" name="birth" class="input-text" style="margin-bottom: 10px; width: 100%; border: 1px solid #ddd; padding: 2px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="telefone_field">Telefone:</label>
                                                                    <input type="text" required="required" maxlength="2" minlength="2" placeholder="DDD" id="ddd_field" name="ddd" class="input-text" style="float:left; width: 60px;">
                                                                    <input type="text" required="required" maxlength="9" minlength="8" placeholder="Número" id="telefone_field" name="phone" class="input-text" style="float: left; margin-left: 10px; width: calc(100% - 70px);">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-row place-order">
                                                                <button type="submit" id="place_order_boleto" name="woocommerce_checkout_place_order" class="button alt btn"><i class="fa fa-refresh fa-spin fa-fw margin-bottom hide"></i>Continuar</button>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </form>

                                                </div>
                                                <div class="tab-pane" id="tab-debito" role="tabpanel">

                                                    <form action="/payment/debit" class="checkout" method="post" name="checkout" style="padding:10px;" id="form-debit">

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="cpf_field">CPF:</label>
                                                                    <input type="text" required="required" placeholder="" id="cpf_field" name="cpf" class="input-text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="nascimento_field">Data de nascimento:</label>
                                                                    <input type="date" required="required" placeholder="" id="nascimento_field" name="birth" class="input-text" style="margin-bottom: 10px; width: 100%; border: 1px solid #ddd; padding: 2px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="telefone_field">Telefone:</label>
                                                                    <input type="text" required="required" maxlength="2" minlength="2" placeholder="DDD" id="ddd_field" name="ddd" class="input-text" style="float:left; width: 60px;">
                                                                    <input type="text" required="required" maxlength="9" minlength="8" placeholder="Número" id="telefone_field" name="phone" class="input-text" style="float: left; margin-left: 10px; width: calc(100% - 70px);">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <fieldset class="form-group row">
                                                            <div class="col-sm-10 contents">

                                                            </div>
                                                        </fieldset>

                                                        <div class="form-row place-order">
                                                                <button type="submit" id="place_order_debit" name="woocommerce_checkout_place_order" class="button alt btn"><i class="fa fa-refresh fa-spin fa-fw margin-bottom hide"></i>Continuar</button>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </form>

                                                </div>
                                                <div class="tab-pane" id="tab-credito" role="tabpanel">

                                                    <form action="/payment/credit" class="checkout" method="post" name="checkout" style="padding:10px;" id="form-credit">

                                                        <input type="hidden" name="brand" id="brand_field">

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="cpf_field">CPF:</label>
                                                                    <input type="text" required="required" placeholder="" id="cpf_field" name="cpf" class="input-text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="nascimento_field">Data de nascimento:</label>
                                                                    <input type="date" required="required" placeholder="" id="nascimento_field" name="birth" class="input-text" style="margin-bottom: 10px; width: 100%; border: 1px solid #ddd; padding: 2px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="telefone_field">Telefone:</label>
                                                                    <input type="text" required="required" maxlength="2" minlength="2" placeholder="DDD" id="ddd_field" name="ddd" class="input-text" style="float:left; width: 60px;">
                                                                    <input type="text" required="required" maxlength="9" minlength="8" placeholder="Número" id="telefone_field" name="phone" class="input-text" style="float: left; margin-left: 10px; width: calc(100% - 70px);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                    <div class="form-row form-row-wide address-field validate-required">
                                                                        <label class="" for="name_field">Nome impresso no cartão:</label>
                                                                        <input type="text" required="required" placeholder="" id="name_field" name="name" class="input-text">
                                                                    </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="number_field">Número do cartão:</label>
                                                                    <input type="text" required="required" placeholder="" id="number_field" name="number" class="input-text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="cvv_field">Código de segurança:</label>
                                                                    <input type="text" required="required" placeholder="" id="cvv_field" name="cvv" class="input-text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="month_name">Validade:</label>
                                                                    <select name="month" class="input-text" required="required">
                                                                        <option disabled="disabled" selected="selected" value="">Mês</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="month_name">&nbsp;</label>
                                                                    <select name="year" class="input-text" required="required">
                                                                        <option disabled="disabled" selected="selected" value="">Ano</option>
                                                                        <?php $counter1=-1;  if( isset($years) && ( is_array($years) || $years instanceof Traversable ) && sizeof($years) ) foreach( $years as $key1 => $value1 ){ $counter1++; ?>
                                                                        <option value="<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="installments_qtd">
                                                            <input type="hidden" name="installments_value">
                                                            <input type="hidden" name="installments_total">
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="form-row form-row-wide address-field validate-required">
                                                                    <label class="" for="installments_field">Parcelamento</label>
                                                                    <select name="installments" id="installments_field" class="input-text" required="required">
                                                                        <option disabled="disabled" selected="selected">Carregando...</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <div class="form-row form-row-wide address-field validate-required" style="margin-bottom:10px; display:inline-block;">
                                                                    <label class="" for="month_name">Bandeiras aceitas</label>
                                                                    <div class="contents"></div>
                                                                </div>
                                                            </div>
                                                        </div>                                                            

                                                        <div class="form-row place-order">
                                                            <button type="submit" id="place_order_credit" name="woocommerce_checkout_place_order" class="button alt btn"><i class="fa fa-refresh fa-spin fa-fw margin-bottom hide"></i>Continuar</button>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

									</div>
								</div>
							</div>
						</div>
					
				</div>                

            </div>
        </div>
    </div>
</div>
<script id="tpl-payment-debit" type="text/x-handlebars-template">
    <div class="form-check" style="padding: 10px;">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="bank" value="{{value}}" checked>
            <img src="https://stc.pagseguro.uol.com.br/{{image}}" alt="{{value}}">
            {{text}}
        </label>
    </div>
</script>
<script id="tpl-payment-credit" type="text/x-handlebars-template">
    <img src="https://stc.pagseguro.uol.com.br/{{image}}" alt="{{name}}" style="float:left; margin-right:4px;">
</script>
<script id="tpl-installment-free" type="text/x-handlebars-template">
    <option>{{quantity}}x de {{installmentAmount}} sem juros</option>
</script>
<script id="tpl-installment" type="text/x-handlebars-template">
    <option>{{quantity}}x de {{installmentAmount}} com juros ({{totalAmount}})</option>
</script>
<script src="<?php echo htmlspecialchars( $pagseguro["urlJS"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId('<?php echo htmlspecialchars( $pagseguro["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>');
</script>
<script>
scripts.push(function(){

    function showError(error)
    {

        $("#alert-error span.msg").text(error);
        $("#alert-error").removeClass("hide");

    }

    PagSeguroDirectPayment.getPaymentMethods({
        amount: parseFloat("<?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"),
        success: function(response) {
            
            var tplDebit = Handlebars.compile($("#tpl-payment-debit").html());
            var tplCredit = Handlebars.compile($("#tpl-payment-credit").html());

            $.each(response.paymentMethods.ONLINE_DEBIT.options, function(index, option){

                $("#tab-debito .contents").append(tplDebit({
                    value:option.name,
                    image:option.images.MEDIUM.path,
                    text:option.displayName
                }));

            });

            $.each(response.paymentMethods.CREDIT_CARD.options, function(index, option){

                $("#tab-credito .contents").append(tplCredit({
                    name:option.name,
                    image:option.images.MEDIUM.path
                }));

            });

            $("#loading").hide();

            $("#tabs-methods .nav-link:first").tab("show");

            $("#payment-methods").removeClass("hide");

        },
        error: function(response) {
            
            var errors = [];

            for (var code in response.errors)
            {
                errors.push(response.errors[code]);
            }

            showError(errors.toString());
            

        },
        complete: function(response) {
            
                        

        }
    });

    $("#number_field").on("change", function(){

        var value  = $(this).val();

        if (value.length >= 6) {

            PagSeguroDirectPayment.getBrand({
                cardBin: value.substring(0, 6),
                success: function(response) {
                    
                    $("#brand_field").val(response.brand.name);
                    
                    PagSeguroDirectPayment.getInstallments({
                        amount: parseFloat("<?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"),
                        brand: response.brand.name,
                        maxInstallmentNoInterest: parseInt("<?php echo htmlspecialchars( $pagseguro["maxInstallmentNoInterest"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"),
                        success: function(response) {
                            
                            $("#installments_field").html('<option disabled="disabled"></option>');
                            
                            var tplInstallmentFree = Handlebars.compile($("#tpl-installment-free").html());
                            var tplInstallment = Handlebars.compile($("#tpl-installment").html());

                            var formatReal = {
                                minimumFractionDigits:2,
                                style:"currency",
                                currency:"BRL"
                            };

                            $.each(response.installments[$("#brand_field").val()], function(index, installment){

                                if (parseInt("<?php echo htmlspecialchars( $pagseguro["maxInstallment"], ENT_COMPAT, 'UTF-8', FALSE ); ?>") > index) {

                                    if (installment.interestFree === true) {

                                        var $option = $(tplInstallmentFree({
                                            quantity:installment.quantity,
                                            installmentAmount:installment.installmentAmount.toLocaleString('pt-BR', formatReal)
                                        }));

                                    } else {

                                        var $option = $(tplInstallment({
                                            quantity:installment.quantity,
                                            installmentAmount:installment.installmentAmount.toLocaleString('pt-BR', formatReal),
                                            totalAmount:installment.totalAmount.toLocaleString('pt-BR', formatReal)
                                        }));

                                    }

                                    $option.data("installment", installment);

                                    $("#installments_field").append($option);

                                }

                            });

                            console.log(response);

                        },
                        error: function(response) {
                            
                            var errors = [];

                            for (var code in response.errors)
                            {
                                errors.push(response.errors[code]);
                            }

                            showError(errors.toString());

                        },
                        complete: function(response) {
                            //tratamento comum para todas chamadas
                        }
                    });

                },
                error: function(response) {
                    
                    var errors = [];

                    for (var code in response.errors)
                    {
                        errors.push(response.errors[code]);
                    }

                    showError(errors.toString());

                },
                complete: function(response) {
                    //tratamento comum para todas chamadas
                }
            });

        }

    });

});
</script>