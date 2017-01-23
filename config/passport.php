<?php

return [

    /*
    |--------------------------------------------------------------------------
    | oauth Key's
    |--------------------------------------------------------------------------
    |
    | Put your oauth private/public key here. They are generated during installation with
    | 
    | 'oauthPrivateKey' => '-----BEGIN RSA PRIVATE KEY-----
    | MIIJJwIBAAKCAgEA10uZbrzdwhPudOrifM4C7maBiaLKCITnBwqvj+nijR2xF3WF
    | .....SOME MORE LINES ......
    | jgBHd2aC+G5YLjkaTLAi1QSxXj0apygiR9lPnY+v7gmIqo2kpmLByEO0XECLUufX
    | 6Dba2oqUHBOSd8hwZW6KzHapkSlvxCCHi6BfUsrxbfV/8KcZu6ea/oniJQ==
    | -----END RSA PRIVATE KEY-----',
    | 
    | It is also possible to put a path here
    | 'oauthPrivateKey' => 'file://path/to/your/oauth-private.key',
    | 'oauthPrivateKey' => 'file://'.storage_path('config/oauth-private.key'),
    |
    | To convert your key to one line env variable use this command :
    | awk '{printf "%s\\n", $0}' oauth-private.key
    | 
    */

    //'oauthPrivateKey' => '',
    //'oauthPublicKey' => '',
];