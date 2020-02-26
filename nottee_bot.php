<?php
define("TOKEN", "");
define("BOTNAME", "nottee_bot");

require_once __DIR__."/vendor/autoload.php";
use SimpleCrud\Database;

$pdo = new \PDO("sqlite:" . __DIR__ . '/nottee_dbs.sqlite');
$db = new Database($pdo);

$bot = new PHPTelebot(TOKEN, BOTNAME);

$bot->cmd("/start", "Hello, I am note-taking bot! You can get help with `/help` command.\n".
                    "WARNING: DO NOT USE NOTTEE TO STORE SOMETHING IMPORTANT FOR YOU \n".
                    "(E.G. PASSWORDS, PINS, et.c.). YOU HAVE BEEN WARNED! I (@nuark) \n".
                    "AM NOT RESPONSIBLE FOR ANY LOST DATA");

$bot->cmd("/help",  "Use `{id} <linebreak> {your text}` to save something (to use in chats - ".
                    "prepend {id} with `/note`).\n".
                    "Then reference it with `/ref {id}`.\n".
                    "Also you can list them all with `/list`");

$bot->run();
