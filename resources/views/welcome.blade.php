<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'Ac6DM-xwgsJXrT75vGcO8SpN8PbN5iFfbUaXrRsWe5AMXdjKcOO89jbboNUALP5JFfcwi4wi0ltbxID7',

        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'small',
            color: 'blue',
            shape: 'pill',
        },
        // Set up a payment
        payment: function(data, actions) {
            return actions.payment.create({
                redirect_urls:{
                    return_url :'http://127.0.0.1:8000/execute-payment'
                },
                transactions: [{
                    amount: {
                        total: '20',
                        currency: 'USD'
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.redirect();
        }
    }, '#paypal-button');
</script>
