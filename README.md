Anax comment module
==================================

A Comment module for anax. This module creates comment and add them to
a database.

To create a comment a session most be set with the key values of
"user_id", "user_mail". This values will be added to the comment database
and be made so that only the same "user_id" can commit CRUD on given comment
with the exception of "user_id = 1" wich can do CRUD on all comments.



Usage
------------------

To use module you will be needing a Anax page with the basic modules like request, response, router, session. You will also need a mysql database with matching column names as in the Comment class. The code for my database is in the sql folder.

Basic setup is easy you simply download the module with composer, setup a database.
Then you can use my router and view files. Then you will have a simple running comment system.


License
------------------

This software carries a MIT license.



```
 .  
..:  Copyright (c) 2017 Kevin Olguin Jönsson (kewin_256@hotmail.com)
```
# comment-remverk
