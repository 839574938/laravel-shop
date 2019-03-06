<?php

return [
    'alipay' => [
        'app_id'         => '2016092500595692',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAml5wsLcVumXsjG9Jd4Nzf7dwzatq7CiIkgDg+is4WP4lENQAIZrTdXsnWRem0MhneHmqFhoJaJYtTS1+CfG4kZgpBs8+42G7T1XBVoF+goB3jyyi0r16CPktRmPghH/mfc++6OHx3Xc5dG8+H6G9gIVbb4+lsDlFF71+y0CjTa2khFFHgflCgThMTDPZNmf5c22PApKrpnIpfJybBEbAIroviyd/Fi3VDu+tWbf4uwEggjzkBgHjhNivoa0RxbMnh+B5R6k7iYVRVXtcqBLziQ+fZpSs4x2S5PsXmwmL6jYzIStfF6rL6PuMHythEi7n/SZWGu24RtCK8J0zo3I8vQIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEAnwFDJDg6pf6+SJd/7dFHUrl46tz+0GUTOoNNhgwv6Nl33/iZyxHTzqVBbgHTRBAzMkij9xmCzP4IH407zZgeC8huwjGf8SyaU1Pw8lN/vld0yOJCsIVsGfFwQKq2LJidF9vqSGxOiq+QjXKskZaD1zUwyuyJFrABQ9USrqk0n9URJetdyzpMsU76xPV5Ui0tPKgn1aTSaPw11P+9jocI+zhTU+Zgxio9pCCVK9+Ix6roXYRbhSFxkpg+qylBUl7C7L7BwlRUuZGWZtfi+blvvbK5tVjvbba6bCU1u9OX41x53EAQduZJRLTV0xzvn7DatImJf+SKtdONAgZO3gy2+wIDAQABAoIBAQCaHvsZjHcslvOSIWca+RONF8IgxP0ouhAdU1A9cmqt5LzRF4La1vjbAEufeZ1yB9HYF5j21n92e3UcQCWLbrsQ6MKS8M77UiR0SJTwDgdwVA0a+lVyDKFvtBr+U3opV/RNQBijAnhO7UXMFS84HxDD9QbKauOmXgub2Fg3fENJ+BEatjUFLwcAsl+7qbCY9MppFupqQHGErFS4/iZw2QSt9U9N9XvjfDdTusBaDMFBG5T68VaaIa0o48+v8JhQD0bsfJSjUPsHUlwNG2Ha/0uyS2ANiWUFyFriTNkU8QmX33tLoHlx2w7Cn8HhDx7ik5r3tdP7yuDiI0BbadX5kyKBAoGBANLUeBMCw6bu5K4PDbTtylfvm3CxQ8rhbhTjwfMQR4yKJM8LDQWOo6WBhYiLNeis9l/0bn2PLgVUWsmFyJPMu1W+JyIxboOdUwF8MP3a6jytQYyKLV3qGqsdVVODuNr6mOaGwL/da7fyYccZ4aBLvkhLnr1sqAWYrs0C640BxLnLAoGBAMEST7+z/bL+ttXNUmIQ9cTBH6iEQ8XSAWmbASZ2D685NnnHAAlfTymqcIp0y8EHnaqbUl/4RWET6+N819Gk4WEb8Y041AbzFbRFnmdsiOwImG9ejfhUgHGYpGkq7Qs/jJPq+l6prWAFKhxn8374suyiuEt20EWtj6WlVxKCuxGRAoGBAI6Xf0K0Wum7p1UF/2pAbds9xm7YpZZBE7fzNwkTGKE4CZ8yxTLd/1aAHHV2WhatbNEHO/eV8DVQkTq9TiSQkp9yRXt93VYNAMf/XA9FkalKMQxBpF9hZ3oWE9CxRURtux4nQ5RAyIsX1wPXQF+u+tpgstNA+v8V/hvQfsnWyVwzAoGBALOSr3/zDeUcybtDs/soIR62LRbUpiBo+g1aMRCvwFjOUt+i+mK9Nejf8LqmdRh9V+TlgBFo3kaze7PjWuxPeZyTm/AoyfQIxcgc9H7nUNaQDA+Rl2RAXBLL0SdL2JucqMivRd0j3fCv/QHcoXoYIHq9wcHWqVIVYsTDap/53boxAoGBAJ4XNbOlQta7g/+kbzFtHiiARorj2M8bbfHdsmkwqpKf6b64xse38NTowHTLuN6Ejezcl0SMo7Br2hooaZEyTON5aWuNoboeyF9Gh2+AK1f56SOK8+sf0tDbrUv9/XSWeg3aMta7wPQ21NEgjl50FWxD+LAVszG7RNdrjdGHmQJn',
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