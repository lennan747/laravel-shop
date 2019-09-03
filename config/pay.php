<?php

return [
    'alipay' => [
        'app_id'         => '2016101400682786',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn4nNqeZQ/sikO4AUmeKT/S00DvEZtwVNXixwiE7N47zEU4B8ATJK1m1lJnxFp8p6kcbm8rpuVWAJTS3NWRWBHC9YKWUxB21zbpJLoF+/HY1o0TMMAz7B0k9n1JvYWUmONj+p4jHnBT2fDJ87c9JrgVdHJjZ7/j+FSiJqpiUxdbuSBGWY86qljYY8Uk0Pa9N/k3m8+uuHksBmvnjr3tN/kK117OXHL0LTwaD1LxOemHRn4m7cudoiXeTsQjgMU0bEUDLO8OEu7XTHTyt/7fqj2fpZFcv9138tAsZAvIZFjy0ej0e+BoEvcBCFMd1nv4IlMqccMeK2GNFl2XvWccBpCwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAgob7dxPvaDpII2UYmXO0CXqFTz4eRJF3NCX2bbxeCjfuWLYOJuPUhl1B6gZW+wBi1q7dtgPa6hPFNh52BQHsynKn03DAjeOK+k/Kmopl2qHYf93ehPI6bvs90pElJ/hsbkygm70cI1KJ4ZYUyMfFiYb9ImEF3TigpF+eoFwHQstEg1nKg9kinJfO2gSKZyK1nvLVG0KBLpRGX+/Imaz7vtzrchAbDkixNworqhqUe5IoukA2GyJm3/MX0INA5Ota8C75pS/FAzDaW1litRrpegA1Sj3J4uiqDt1SKU8fO6C0xqgs5mKajRlUZ9G/nypxvDeHgWuUrJs2ciZcaGtw6wIDAQABAoIBAG1UfuEY85kL6Eyta1NtVMnztCHR2Cx646vseGMmOma4vo3TwDrW7ra0+nb5ZHXNtvw3cEH7LKyQbsmL7jL3j81rCCPU95RhmZFcsEmNzw64Lc28m5wkAMng68GqDcNTFA+3Y3fPiPgVNKSdvz8GBfHR/cmEFxNbUUMdTJLpQrOwqPeGA68AM30XhfvA0yq/nO1TB9aU4wBN7VUHSPcgeaX314wrrP3WJ6Yb9aatcoT3WsykszPBlVR0EIo7FYxA8t1fEazhD72WNYUXCc8XNWHzjTu9VvdvqxlAt44NrxX0fp4lz1RcKpEeizWfedL1mKQUhpQLsOei+TGLSbybImECgYEA+4W/wIm2jcRJVOqLSoVDj2dmalut434BhPA8JMzO41vxFgIvwtu7tMgzlwncmuOkU1cHrIXFu4CF6jvz17qXHJHXo1aWtANsbuHCaUA4cTAqK8zdwLSt0/c9WlbiHIBfyO8a5PeZphUozouLmA5esQNR7oCKf8jTieLV6soiKjMCgYEAhNnT7Sudny7BIQFXLGjNfqIZ4m9iDk761on96UtYXpbUJ5I0HWSAS1kZQGZJs+18n2lvXNbhh0bfAqC3Eg2635qhsmvfRLIs9jWCRgM2ADmaReUnnPbe5/73CE8C0RNqPMxGAYgAyE7lMGCJuO9r9NWGiHuHZb1rFvhMJbvZVmkCgYAq9gtsnZka2d4UrQMhtWV2xxiNLh+jbdBgnpAHURw9ZWTmd3Uk+Vc0Z8W4FK0jn6JfwcvDwg2mGyvEeH0L6gkJjjeg5JdVJAiPX+xPAfMiEjIBzTpLQhE21VIbbh+s8phpv71+QnRyE8cmkFtFm5686W5DKJ1/ehP3x1D2i5QOVQKBgEzAqH7CjxsTYQLXimye0/JQZtH6ddU8bhEawjZRkGl9jG6cOj2s/a4KeNtK/VPVZgWXXX5uqveDy33yKjJk+k0LQlYZmnFO20kXmv8mBcHVhbrR7LPzsM6p8EC9nSv7ooojnmJuF72iTylG7OqKcH2QC1y4uX3fFIq9wwid4a/ZAoGAOfBQplp3UypmuD/YZCGIYyn/4+Cd1qpQUfLHxlgZFWZEclYwZn2FRSYCM6e7XFSzXqLJn0owG+XPy3nqGYOoKiOvdkQmyn5MPB03IDMuFSOrBcGc7yOuvKwY1tXKpqby3itTQAYsjlLDeQU4p4ijqe64yI7muW2+MnIWJH/sEVk=',
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
