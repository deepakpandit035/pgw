Best Online Payment Gateways in India 2024
There are various payment gateways in India that allow customers to make payments online. Some of the popular ones are:

PayU
Instamojo
CCAvenue
Bill Desk
JusPay
Airpay
Cashfree Payments
Zaakpay
Direcpay
ePaisa
Emvantage
Atom Paynetz
Transecute
Razorpay 


Here is a step-by-step pseudocode for integrating Cashfree's Payment Gateway in sandbox mode:

- Import Cashfree's SDK.
- Initialize Cashfree's SDK with your appId and secretKey in sandbox mode.
- Create a payment order by specifying the orderId, orderAmount, orderCurrency, and orderNote.
- Add customer details like customerName, customerPhone, customerEmail.
- Add return URLs for successful and unsuccessful payments.
- Generate a payment token using the SDK's function.
- Redirect the customer to the payment page using the generated token.
- After the payment, the customer will be redirected to the return URL.
- Verify the payment status using the SDK's function.

Here is a Python code snippet for the same:

from cashfree_sdk import Payouts

# Initialize Cashfree's SDK
Payouts.init("<YOUR_APP_ID>", "<YOUR_SECRET_KEY>", "TEST")

# Create a payment order
order_id = "Order0001"
order_amount = "1000"
order_currency = "INR"
order_note = "Test Order"
customer_name = "John Doe"
customer_phone = "9876543210"
customer_email = "johndoe@example.com"

# Add return URLs
return_url = "https://yourwebsite.com/success"
notify_url = "https://yourwebsite.com/notify"

# Generate payment token
token_data = Payouts.Token.create(order_id, order_amount, order_currency, order_note, customer_name, customer_phone, customer_email, return_url, notify_url)

# Redirect the customer to the payment page
payment_url = "https://test.cashfree.com/billpay/checkout/post/submit"
redirect(payment_url, token_data)

# After payment, verify the payment status
payment_status = Payouts.Orders.get_status(order_id)


Please replace <YOUR_APP_ID> and <YOUR_SECRET_KEY> with your actual App ID and Secret Key. Also, replace the URLs with your actual return and notify URLs.