<?php

return [
    'idempotency_ttl' => env('WEBHOOK_SHIELD_TTL', 86400),
    'timestamp_tolerance' => env('WEBHOOK_SHIELD_TOLERANCE', 300),
    'secrets' => [
        'razorpay' => env('RAZORPAY_WEBHOOK_SECRET'),
        'cashfree' => env('CASHFREE_WEBHOOK_SECRET'),
        'sbiepay'  => env('SBIEPAY_MERCHANT_KEY'),
        'stripe'   => env('STRIPE_WEBHOOK_SECRET'),
    ],
];
