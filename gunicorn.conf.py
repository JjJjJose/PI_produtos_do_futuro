bind = '0.0.0.0:8000'
worker = 3

# proxy reverso 

backends = [
    {
        'name': 'php',
        'url': 'http://localhost:80',
        'headers' : {
            'Host' : 'localhost',
        },
    },
]