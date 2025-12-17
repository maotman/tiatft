<?php
return [
    'webhook_url' => 'https://rexia-main.up.railway.app/webhook/reg-tiatft',
    
    'rate_limit' => [
        'max_attempts' => 3,
        'time_window' => 60,
    ],
    
    'validation' => [
        'min_name_length' => 2,
        'min_platform_length' => 2,
        'temp_email_domains' => [
            'tempmail.com',
            'guerrillamail.com',
            'throwaway.email',
            '10minutemail.com',
            'mailinator.com',
            'maildrop.cc',
        ]
    ],
    
    'debug_mode' => true, // ← MUDAR PARA true
];
```

### **2. Testar Novamente**

Preencha o formulário e tente cadastrar novamente. 

Agora a mensagem de erro vai mostrar detalhes técnicos, tipo:
```
Failed to process registration. Please try again.
Debug: {"http_code":404,"curl_error":"...","webhook_url":"..."}
