BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "note" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	"noteid"	TEXT NOT NULL UNIQUE,
	"chatid"	INTEGER NOT NULL,
	"ownerid"	INTEGER NOT NULL,
	"ref_id"	INTEGER NOT NULL,
	FOREIGN KEY("ref_id") REFERENCES "note"("id")
);
CREATE TABLE IF NOT EXISTS "ref" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	"type"	TEXT NOT NULL,
	"data"	TEXT NOT NULL
);
COMMIT;