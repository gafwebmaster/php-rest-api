# PHP REST API

Thank you very much for offering your time to seeing my project!

Here you will see a PHP REST API with no framework. I have used object-oriented programming along PDO.

## FOLDER STRUCTURE/files

> ### api/config/Database.php
>
> **Database** class does contains:
> - properties used for conneccting to DB;
> - **connect** method that return the connection.

> ### api/models/Post.php
>
> **Post** class does contains:
> - properties that will help for connection/table which has the details;
> - properties for each table column $data;
> - construct that initializate the DB connection;
> - **read** method is used for getting all the posts thate are in DB;
> - **read_single** method is used for getting from DB just one post;
> - **create** method is used to add a new post to DB;
> - **update** method is used to update a post from DB;
> - **delete** method is used to delete a post from DB.



> ### api/post/read.php
>
> This file will interact with the model and will show all the posts.
> Does contains the headers;
> Include the config/Database.php and models/Post.php

> ### api/post/read_single.php
>
>That method is used to read a specified ID post by accessing the **read_single** model method.

> ### api/post/create.php
>
>That method is used to create a new post and add it to DB.

> ### api/post/update.php
>
>That method is used to update post from DB.

> ### api/post/delete.php
>
>That method is used to delete post from DB.

## Test the REST API functionality:

For testing, I am using Postman software. Below are all PHP API options.

> ### See all the posts
>
> Make a GET request to the link below:
> http://restapi.topwebdeveloper.co.uk/api/post/read.php

> ### See a specified post 
>
> Use the ID post you want to see.  Make a GET request, see the example link below:
> http://restapi.topwebdeveloper.co.uk/api/post/read_single.php?id=2

> ### Create a new post
>
> Make a POST request by accessing the below link. Set to the Postman options: POST request, from 'Headers' choose as a 'Content-Type' the 'application/json' option. Then to the 'Body' tab choose 'raw'.
> http://restapi.topwebdeveloper.co.uk/api/post/create.php
> Code sample:
> ```
>{
>		"title": "My sample",
>		"body": "This is my body sample",
>		"author": "Gabriel",
>		"category_id": "1"
>}
> ```

> ### Update a post
>
> Make a PUT request by accessing the below link. Set to the Postman options: PUT request, from 'Headers' choose as a 'Content-Type' the 'application/json' option. Then to the 'Body' tab choose 'raw'.
> http://restapi.topwebdeveloper.co.uk/api/post/update.php
> Code sample:
> ```
>{
>		"title": "Updated post",
>		"body": "This is my updated body sample",
>		"author": "Gabriel Agiurgioaie",
>		"category_id": "2",
>		"id": "2"
>}
> ```

> ### Delete a post 
>
> Make a DELETE request by accessing the below link. Set to the Postman options: DELETE request, from 'Headers' choose as a 'Content-Type' the 'application/json' option. Then to the 'Body' tab choose 'raw'.
> http://restapi.topwebdeveloper.co.uk/api/post/delete.php
> Code sample:
>
> ```
>{
>		"id": "2"
>}
>```
