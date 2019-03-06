<?php

return [
    'alipay' => [
        'app_id'         => '2016092500595692',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyzSIZCM0uveKtOuGiYFN2WfoDyQUCjdzyr/XiDlbSihAxQwOaVd+68m5vd/XleMmeIhGKhyVvXBoBAE6KQ4d7PUNdrbX+PcG94PgU0yvUJ9MBWOiKEJf8bAkOp2H8Uz8f36lQorrMlnqesCBpvRxKbUSKWP4vYfjbrKgy3Ghl1KsTxWOI06mFXwFbi9TT9MtHv1eqe2q30kXJwjOi7lFVI3unqnH9Pq+6ykU7OAoUCiw9ugVLsSiq70kdgCqcFKJp1QkJlbJCV4N7oxwpn2n42Hv9d5dF8jYpyj/WO4mrQYzZcTi5E6GKc90IDgF6PllPFuutiFvlIzWJDEdDjTWewIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAyzSIZCM0uveKtOuGiYFN2WfoDyQUCjdzyr/XiDlbSihAxQwOaVd+68m5vd/XleMmeIhGKhyVvXBoBAE6KQ4d7PUNdrbX+PcG94PgU0yvUJ9MBWOiKEJf8bAkOp2H8Uz8f36lQorrMlnqesCBpvRxKbUSKWP4vYfjbrKgy3Ghl1KsTxWOI06mFXwFbi9TT9MtHv1eqe2q30kXJwjOi7lFVI3unqnH9Pq+6ykU7OAoUCiw9ugVLsSiq70kdgCqcFKJp1QkJlbJCV4N7oxwpn2n42Hv9d5dF8jYpyj/WO4mrQYzZcTi5E6GKc90IDgF6PllPFuutiFvlIzWJDEdDjTWewIDAQABAoIBAHtNYiGZN0roIDON4vIXEv0Dzs05MCvO4CU76XXQj/Ncn4ixuyDypaI/osRzSia6UcK7tg+hjr8HsSYU9Iyq8z+wpr3NTxnUE1cnn3wMQSkjsAZpIaFaPUuzfRhQNIgYFfLrDy5kizjfVKetnj6Hfw82v1F8RxgCl9+45lbsmYfu3oFjCMjVHDU4QMnM6b5K4HicqKCSDzwY+DL9Ba53RV6cw9zpur680tR9929XEx3WIf/9pPuCqw54Sqd8DfhJhufB+kgP5RFdy+AGWO4OLAlzawf4ecKEy/5DIXXcXVS94CxdHfQhZ8k9Ut1O+/0x2vlKXFyfj+bg2+NftMoyGzkCgYEA7Kk2azgfNp76+kn+AGAeylMlBeAJujuZwkN5Q5ZkK2HcNtlJrhGXKLNWfzFwxCksZD9j1hsviLDEf+cFIFuEooF8pSSdnTLGLPzMWf8Zni4YaQLghYK7YhpD2bvh0iLIALoUNhHlph3jXvgR45bUJPi40Mu8r96XZouKRv+0N+0CgYEA289yrSOarWv03En2oTpWRW6Db0efiVEIU/6O42gK4m6JtlF1Pnt/O3DcMlDfNsz5jvBI5JBz7OdzVZQLWNG/hTMPCDwQs3mDrR+l9X+HdNmQ5yymI64QrA74bC5vCqZUFFyDcxoJkzKwJ8HTbfrKJyTmw/C9zUWRZ7cd1rUcqwcCgYEA4xHkbfG2OTFG/Bk8hd20DUrDbiStEKwY9oTI+Cl3SQynP1Uy1bp4/4s7BeVJHl2nAzSzNP52mD+K+nGNwKMu2sFE+Crus6LA9O9Fn2Adk2EE+NTS2ic6ZYFv8pzLqlTG87OWqt53KvDodPmuKGFSgXrH0UZ6b4AyYiim70JvB20CgYEAp6OY9A8ZYnXZM0B9hgz1ytI0D2RyecmBLn4P/8NTuclP4epSHqsVKAI1DXK8KhE9qxP6o8a/gsgqH/Reiwi8phuAtWkJ27crA5gFfCwc5LMhXg2hT8jrEi4ArJDlQxwDN9wurFQJRWf9DPU4CMKh9iSgkoNCXhFWieEQMrXB/XUCgYEAwv9jIJDTGjnXqERt+gCo/e+MxkhRaMaFo17Z7qFaWaX6SAc66IP0MUYyh5/szHQVKGWdlVNom7akwj7Hh5Do/JZPstwXxVnKuxeq0Swy7Ekucjdd28wO5w+P8qDos85Gn4B4RvTgWmcf5ucBpJ9HNqVz0nZK837xS1U+34ckk0g=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],


];