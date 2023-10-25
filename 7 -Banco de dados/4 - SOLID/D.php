D ependency Inversion Principle (Princípio da Inversão de Dependência):
     Módulos de alto nível não devem depender de módulos de baixo nível. Ambos devem depender de abstrações. Além disso, abstrações não devem depender de detalhes, mas detalhes devem depender de abstrações. Esse princípio promove a modularidade, a reutilização e a flexibilidade.


<?php

interface PaymentGateway {
    public function processPayment($amount);
}

class PayPalPaymentGateway implements PaymentGateway {
    public function processPayment($amount) {
        // Lógica para processar um pagamento usando o PayPal
    }
}

class StripePaymentGateway implements PaymentGateway {
    public function processPayment($amount) {
        // Lógica para processar um pagamento usando o Stripe
    }
}

class OrderProcessor {
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function processOrder($order) {
        // Lógica para processar um pedido
        $this->paymentGateway->processPayment($order->getTotalAmount());
    }
}

// Nesse exemplo, a classe OrderProcessor depende de uma abstração (PaymentGateway) em vez de depender diretamente de implementações concretas. Isso permite que diferentes gateways de pagamento (como PayPal e Stripe) sejam injetados na classe OrderProcessor sem modificá-la, seguindo o princípio de inversão de dependência.