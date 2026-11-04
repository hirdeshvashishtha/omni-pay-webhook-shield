# Omni-Pay Webhook Shield 🛡️💳

**PHP 8.2+ | Laravel 10/11 | Fintech HMAC-SHA256 & Idempotency | MIT License**

Enterprise-grade **multi-gateway payment webhook signature verifier** and **Redis atomic idempotency shield** for Laravel e-commerce and municipal/banking platforms. Built-in support for **Razorpay, Cashfree, SBIePay, and custom HMAC gateways**.

### 🔒 Key Capabilities
* **Cryptographic HMAC Verification:** Constant-time `hash_equals` verification prevents timing attacks and spoofed webhook payloads.
* **100% Atomic Idempotency:** Uses `Cache::lock()` to block race conditions when identical webhooks hit your load balancer concurrently.
* **Graceful 200 OK Deduplication:** Automatically acknowledges already-processed events so the payment gateway stops retrying.

### 📦 Installation
```bash
composer require hirdeshvashishtha/omni-pay-webhook-shield
php artisan vendor:publish --tag="webhook-shield-config"
```

### 🚀 Usage in `routes/api.php`
```php
Route::post('/webhooks/razorpay', [PaymentWebhookController::class, 'handleRazorpay'])
    ->middleware('webhook.shield:razorpay');

Route::post('/webhooks/sbiepay', [PaymentWebhookController::class, 'handleSbiEpay'])
    ->middleware('webhook.shield:sbiepay');
```
