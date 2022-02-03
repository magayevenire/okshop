var response = fetch('/secret').then(function(response) {
    return response.json();
  }).then(function(responseJson) {
    var clientSecret = responseJson.client_secret;
    // Call stripe.confirmCardPayment() with the client secret.
  });
  const stripe = Stripe('pk_test_51KOiy8GAymI58WNIWQORDlqzrpuzpKXa5XIKK1nr7hFsVlmeEO3SXMDSuP3ejDQMYastxt73aLbaCvVZmQrx1JyG00p1piiCje');
  const options = {
    clientSecret: '{{CLIENT_SECRET}}',
    // Fully customizable with appearance API.
    appearance: {/*...*/},
  };

  // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 2
  const elements = stripe.elements(options);

  // Create and mount the Payment Element
  const paymentElement = elements.create('payment');
  paymentElement.mount('#payment-element');
