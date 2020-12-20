
--insert
INSERT INTO notes (idUser, name, content, subject, time, date) values (:idUser, :name, :content, :subject, :time, :date);

--update
UPDATE notes SET idUser = :idUser, name = :name, content = :content, subject = :subject, time = :time, date = :date where id = :id

--delete
DELETE FROM notes where id = :id

--fetchAll
SELECT * FROM notes

--fetchById
SELECT * FROM notes WHERE id = $id

--fetchByIdUser
SELECT * FROM notes WHERE idUser = $idUser