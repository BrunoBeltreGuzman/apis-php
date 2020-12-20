# Apis PHP
**Apis with PHP to MySQL for a notes application with two related tables "users" and "notes".**

# Users:
**Insert:**
```php
$apisUsers = new ApisUsers();
$result = $apisUsers->insert($name, $email, $password);
```
First send the texts by the GET protocol, of course.

**Update:**
```php
$apisUsers = new ApisUsers();
$result = $apisUsers->update($id, $name, $email, $password);
```
Also first send the texts through the GET or PUT protocol.

**Delete:**
```php
$apisUsers = new ApisUsers();
$result = $apisUsers->delete($id);
```
You need to send the user id first.

**And Fect:**
```php
$apisUsers = new ApisUsers();
$result = $apisUsers->fetchAll();
```
Get all the records and return them.

Example:
```json
[
       {
              "id": "1",
              "name": "Bruno",
              "email": "bruno@example.com",
              "password": "123"
       },
       {
              "id": "2",
              "name": "Juan",
              "email": "juan@example.com",
              "password": "123"
       },
       {
              "id": "3",
              "name": "Maria",
              "email": "maria@example.com",
              "password": "123"
       }
]
```

_With the table "notes" in similar, it is just to change the respective fields and values_
