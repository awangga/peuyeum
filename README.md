# peuyeum
SMS Broadcast Management Based on SMS Web
https://github.com/awangga/smsweb

## How To Run
 1. Put on Yout htdocs or public www folder of your app server
 2. create folder cache in folder app
 3. run MongoDB, create peuyeum database and collection : users

## MongoDB init collection
 1. users : name,alias,num,group.

```sh
$ mongo
> show dbs
local    0.078GB
peuyeum  0.078GB
> use peuyeum
switched to db peuyeum
> db
peuyeum
> db.createCollection("users")
{ "ok" : 1 }
> show collections
users
> db.users.insert({"name" : "Astra Jingga", "alias":"cepot","num":"081312000300","group":"punakawan"})
WriteResult({ "nInserted" : 1 })
> db.users.find()
{ "_id" : ObjectId("5649923d33c3ddb9bf95822c"), "name" : "Astra Jingga", "alias" : "cepot", "num" : "081312000300", "group" : "punakawan" }
> db.users.find().pretty()
```


## for reading and processing inbox
run command 

```sh
root@server# ./inboxparser.py &
```


## Reference
 1. http://www.tutorialspoint.com/mongodb/mongodb_query_document.htm