=== Checkout Transparente do PayPal ===
Contributors: apuhlmann
Tags: paypal, paypal plus, woocommerce, woo commerce, checkout transparente, transparente, pagamento, gateway, paypal brasil, ecommerce, e-commerce
Requires at least: 4.4
Tested up to: 4.9
Stable tag: 1.6
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
WC requires at least: 3.0
WC tested up to: 3.5

Adicione facilmente opções de pagamento do PayPal Plus ao seu site do WordPress/WooCommerce.

== Description ==

A experiência de um Checkout Transparente processado com a segurança do PayPal. Seu cliente efetua o pagamento diretamente no seu site, sem redirecionamento e sem a necessidade de abertura de uma conta PayPal, utilizando os dados cartão de crédito, que podem ser salvos para agilizar o pagamento em futuras compras.

= Conheça mais vantagens do PayPal =

* **Segurança:** nível máximo de certificação de segurança PCI Compliance e criptografia em todas as transações.
* **Programa de Proteção ao Vendedor¹:** protege suas vendas em casos de “chargebacks”, reclamações ou cancelamentos solicitados pelo comprador.
* **Facilidade no recebimento das vendas:** parcele suas vendas em até 12 vezes e receba em 24 horas², sem tarifa incremental de antecipação.
* **Atendimento especializado:** atendimento comercial e técnico para tirar suas dúvidas e te ajudar com integrações. Seu cliente também conta com um atendimento bilíngue 24x7.
* **Venda para novos clientes no exterior:** receba pagamentos de compradores de mais de 200 mercados³ diferentes e para 250 milhões de compradores ao redor do mundo.
* **Soluções responsivas:** seu cliente compra pelo celular com melhor experiência e estabilidade no mobile.

¹ Sujeito ao cumprimento dos requisitos do Programa de Proteção ao Vendedor e Comprador.
² Pagamentos recebidos na conta do PayPal e sujeitos a análise de risco e crédito pelo PayPal.
³ Este módulo só permite recebimento nas moedas Real Brasileiro (BRL) e Dólar Americano (USD).

= Para quem o produto está disponível =

O produto está disponível para contas PayPal cadastradas com CNPJ (Conta Empresa). Caso a sua conta seja de pessoa física, você deve abrir uma conta PayPal de pessoa jurídica por [este link](https://www.paypal.com/bizsignup/).

Caso já tenha uma conta Empresa, você pode solicitar o Checkout Transparente do PayPal [clicando aqui](https://www.paypal.com/br/webapps/mpp/paypal-payments-pro/woocomerce#woocommerce).

= Compatibilidade =

Compatível à partir da versão 3.0.x até a 3.5.x do WooCommerce.

= Pré-requisitos =

Por padrão o WooCommerce não pede no cadastro do cliente as informações de CPF/CNPJ. Estas informações são importantes para o PayPal oferecer uma análise de risco eficiente, portanto este campo é obrigatório para utilizar este plugin.
Você deve adicionar esta funcionalidade ao seu WooCommerce via plugin, por exemplo: [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/).

= Instalação =

O PayPal disponibiliza um tutorial completo com o passo a passo de integração do Chekout Transparente utilizando o WooCommerce para facilitar a integração do meio de pagamento no seu site.

Clique no [link](https://www.paypal.com/br/webapps/mpp/paypal-payments-pro/woocomerce) e siga as instruções.

= Dúvidas/Suporte =

Caso tenha alguma dúvida ou dificuldade na utilização do plugin acesse a seção de Suporte por [este link](https://wordpress.org/support/plugin/paypal-plus-brasil).

== Installation ==

= Instalação do plugin: =

* Envie os arquivos do plugin para a pasta "wp-content/plugins", ou instale usando o instalador de plugins do WordPress.
* Ative o plugin.

== Frequently Asked Questions ==

= Instalação do plugin: =

* Envie os arquivos do plugin para a pasta "wp-content/plugins", ou instale usando o instalador de plugins do WordPress.
* Ative o plugin.

== Screenshots ==

1. Exemplo de dados não preenchidos no tema Storefront.
2. Exemplo de checkout com cartão de crédito salvo no tema Storefront.

== Changelog ==

= 1.0.0 - 2017/07/25 =

= 1.3 - 2018/09/25 =

= 1.4 - 2018/10/28 =

= 1.4.1 - 2018/10/29 =

* Versão inicial do plugin.

== Upgrade Notice ==

= 1.0.0 =

* Versão inicial do plugin.

= 1.3 =

* Configurações agora possuem somente um checkbox para debug.
* Modificado a descrição do campo de "Prefixo de Invoice ID".
* Título do gateway baseado na moeda configurada no WooCommerce.
* Modificado os detalhes do pagamento na página administrativa do pedido.
* Alterado o plugin locale para paypal-plus-brasil

= 1.4 =

* Melhoria nos logs para análise de erros.
* Validação de compatibilidade com WooCommerce 3.5.

= 1.4.1 =

* Melhoria nos logs para análise de erros.

= 1.5.0 =

* Adicionado suporte a Digital Goods.
* Melhoria nos logs para análise de erros.

= 1.5.1 =

* Atualizado título do plugin.

= 1.6.0 =

* Implementado novo SDK.