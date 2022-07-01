const sdk = require('api')('@rd-station-dev-portal/v2.0#13qgon13l4d86f51');


sdk.auth('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5yZC5zZXJ2aWNlcyIsInN1YiI6ImRoRV9BbWExZTFlWXB5T0c4WnhtVkNhbVFjVTVfdjRQWTJPNVk4N2ZrdmdAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYXBwLnJkc3RhdGlvbi5jb20uYnIvYXBpL3YyLyIsImFwcF9uYW1lIjoiR2VyYWRvciBkZSBDb250YXRvcyIsImV4cCI6MTY1Njc3OTI2MiwiaWF0IjoxNjU2NjkyODYyLCJzY29wZSI6IiJ9.ZH7UWKvdWamWAUjOmxflT6yHjFo3jKetAwOqUSCdKsVHu43ImO0azahFQE7tRKwuDardIXnxb7Qm_X_8Y9dkEfwUGNDdxoG5Qut6QRBLBsqDAtHZyHpU7UpdHa7McW9uW37y5-wCheX8bvRJ5_WnNoPzs1VLenfpxxlLPIyfJyqXRYZ1nilkexViudCDxyWvn-q6oCJGScbqW3TbFQ8D7NBTlbTAnkMx075E9PRYc6dhTv8DbLp0nbwu3SE8OdtkOv7UMup9AhuUMqPSmQwjXVY-AhBu6JkgfSxQsbzTDym_ryeHDMKvhVu_HaB-Tzcf1qIWpxGnVYzwWFDXg6dWjg');
sdk.post('/platform/contacts', {
    name: document.querySelector('nome'),
    email: document.querySelector('email'),
    mobile_phone: document.querySelector('telefone')
})
  .then(res => console.log(res))
  .catch(err => console.error(err));