# Online Pastebin
Online notepad and online pastebin with various language code style

# How to use it
First, create the database and a table

```
CREATE TABLE  `epiz_23817834_notepad`.`isi` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`judul` TEXT NOT NULL ,
`author` VARCHAR( 200 ) NOT NULL ,
`bahasa` VARCHAR( 100 ) NOT NULL ,
`konten` TEXT NOT NULL ,
`date` VARCHAR( 100 ) NOT NULL
) ENGINE = MYISAM ;
```

Second, open the dbConnect.php in database folder. Fill the database information.
Last, open the header.php in view folder. Change the base_url.

# Theme
Bootstrap

# Plugin
Prism.js
Smooth Scroll
