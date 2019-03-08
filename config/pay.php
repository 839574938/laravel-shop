<?php

return [
    'alipay' => [
        'app_id'         => '2016092500595712',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmrPb74GGnqbFEddCfv307wqFkrDB45jGwKMQaQm1rnMs6Hx0OS4D8eP+Y00thFpQ3XHk91fOAIDzOIC6kvLWvR/wXvqFIgF1w7DoH1OSRhLfZ1nvYrXCxTwVOybAZvvRzJHdH8eCbUq5xlIgka0PaSvuRgvscEXoAhoy74aOIK8qRRgVqUacFa9Lob+wxgNK2koD5XQB2JuRI+8v7UoEMVA8aZIjH/J0aLeRyQd93WkkC+dzbkF/v4bZ0orz42+TUqVHpaaSRRj+w6bdeJq0iE9jlRmjZHdEG5bxNGCU+BXjBZZXcRSv6QOf4BqZPw7DrChysYE8uexyD6XWWwHe8wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAr1/Kc3TSzzP7Pn6bN+p/tp2jVYO8CyS3o6hg6ZeiThoXs9492bZKHErr0UNk1f41Z4AU9RM9VKj/DD9F7hV3jHOS7vyJVQ+jEcNN9dI6LP3/jbNbLY+0EZuMtLYIKaVDjCj5leRNY4fTavyLhq0j+DQgl7dCYDHdHv/hEvH5EsgZ3wRDM1BTDYO2khER2upmqxVRRaOEIfGy10aG+WvPUoSUKZ1FhxesLQ8sV9INwEpCCKuIe9QrEcO+aYt1tEuA6CGxcqqbgGczOa3VVYjRxx4HEqjZw0lLEkoKGKe3V87NSNT2k2d9y5czvfBve4fuHlIcgSue+rxtePKLJ5k+ZwIDAQABAoIBAEOL55QUmOWJpelqJiqhPVN+39weAx1fpQN55OnTp4XhcuOqY7QpC95d1PoitQHfCX61zFygbmzfMmzrKeoLhqIoGZ3G0rZacXpz+OEHebS+l+FiBWpFARwPB2DLA9XWe2/OkGL1LgF53SpF3w+ePE5q9Wq6AOzAB+TatTvwyvg6Sot6Q1hog8ZlM+76YAd6UTfO9EU6phgsoJ7TDv9qz9QNC+RuZZ/CtjkHAjfCfq8+XKAfCpM27z8pmQ3UpsZh3KE4gegTexwmdHWqX1BRYSFCrAs1XeSbdlYs8+8Wi3D9dMVn01wtEALgnMQtYGqsLVuJ1hemo8e2ujdfpok2q+ECgYEA4L6Fhgmdg/zFVtSQwiSWVACeTX6ulwaAdeWT3w6eQteGNHJmPus7VDbkx2OvC0B3tZrFmB6CiVhOERupc8JqYPZWynVz0oF0d7BcBhUJpUvlwIY+7jsMObbGbwJv3WjXqdMXe9d5NNFib8VCGlhlvbJkO7HVM7ZEDyPd+h4QqWkCgYEAx8ORRROr/d7v9tTTBJVDNcu/plQZ82MEGpwF4a4i7ihjxb9tSLYvfIkg45Oj4zl9CLPMjpg/c/F5fPQr1X4syvcdm4xcqbjkkYHoWE01JN5T6LJ9/VydbQXiOlqHVmtBJ+8SJ+p6PYm6F/VAaM/XxKMb4p7PyCm7Lv1A4yL/X08CgYEAw1k3bGONM72RtkC7ttTgihGjh86WaRWwsUmlN5xYOddmgs3xS71h63hvcVSXQRt/Mi5elDPo2QMVkE9QAhu6JZ/Zns9qpk3581MrGepNYQ1QngDSUHao0L2rS7B9laFc2/NtFSsc4qkhe++k3ot5m+KktzKDFBjYnaRafN6HMwkCgYEAhhoAPGn/TLbLSl0Gp434B3YW2vacUSoISECzJhQ7OLt+dvKRz30WFbkMjhm/rDscd6oTySnldtUE5GAZyQEh2sLXamNolTscnZ2itxxlb7GcjJq+P0ZcHCMWAmxhbB8mJ0OzYX5jv0nk1k56haH5S/TfNFu+SrXRBbNXSuNkobsCgYA+VzgnqQw+zitXIguHlpW7FIpcbEQ/J6h5nPT/I216vZh+I61vooorGPCZ3bwFnTxOuG7kpr48sXnqC6DnOz7eZNsFqNFWnetXIeNs3PaB9bgFFkzX9KURiAsjW3OfwvlkfcNiCsfYseRO75aDPdTOMPhFifB9fUczVmQFb0Sigw==',
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