
## About DressUp Avatar

## steps to follow

- git clone https://github.com/ashish2806/avatar_dressup or download zip

- composer install

- add .env and change your mysql connection 

- create a database and put db name in .env

- php artisan store:link

- php artisan migrate:fresh --seed

- php artisan serve 
  considering your server starting at localhost:8000

End Points:

http://localhost:8000/api/categories

Method : GET

http://localhost:8000/api/current-avatar-state/2

Method: GET


http://localhost:8000/api/purchase-items

Method : POST
Headers : Accept:application/json

body : {
    "item_id" : 2,
    "user_id": 2
}


http://localhost:8000/api/user-dressup

Method: PATCH
Headers : Accept:application/json

body : {
    "user_id" : 2,
    "item_ids": "3,1,2"
}

note - will  items ids in comma separated form which will assign to user current state if user purchase that items, non purchased items willbe skipped



