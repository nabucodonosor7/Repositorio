DELETE FROM TABLE WHERE 
TRUNCATE TABLE /* EMPIEZA DESDE CERO*/  
DROP TABLE
UPDATE TABLE NAME SET FIELD = ""
IDENTITY /*Propiedad muy parecidad al auto_increment validad solo para sql server (?permitiendo la repeticion)*/
attribute identity(56,3)/*Empezando desde el 56 y incrementando de 3*/
SELECT IDENT_SEED('nameTable')/*Retorna Desde donde inicio la cuenta*/

SELECT COUNT(*) FROM WHERE
SELECT SUM(*) FROM WHERE
SELECT MAX(*) FROM WHERE
SELECT MIN(*) FROM WHERE
SELECT AVG(*) FROM WHERE


SELECT SUBSTRING("",1,5)/*Donde empieza y numero de caracteres*/
SELECT STR(456)/*Pasa a texto*/
SELECT LEN("")/*SIZE*/
SELECT LOWER("")
SELECT UPPER("")
SELECT REPLACE("","A","B")/*A es el texto a remplazar,B por el cual se remplaza */
SELECT LTRIM("")/*EMPACIOS EN LA IZQUIERDA*/
SELECT REVERCE("")
SELECT STUFF("texto",5,4,"")/*Donde empieza y numero de caracteres y remplazo*/
SELECT PATINDEX("%texto%","")/*Posicion donde se encuentra*/
SELECT REPLICATE("texto",100)/*Posicion donde se encuentra*/
SELECT ""+SPACE(5)/*Agrega espacios*/
SELECT * FROM TABLE WHERE NAME IS NULL
SELECT FIELD FROM TABLE WHERE FIELD BETWEEN 200 AND 300
SELECT FIELD FROM TABLE WHERE FIELD NOT LIKE '%DEB%'
SELECT DISTINCT NAME FROM TABLE 
SELECT NAME,FIELD FROM TABLE WHERE SEX = "" GROUP BY NAME HAVING FIELD > 5
SELECT TOP 5 * FROM TABLE
UPDATE TABLE SET FIELD ="" 	FROM TALBLE INNER JOIN TABLE ON 
DELETE TABLE FROM TALBLE INNER JOIN TABLE ON 



ALTER TABLE NAMEOFTABLE ADD  FIELDNAME INT 
ALTER TABLE NAMEOFTABLE DROP COLUMN FIELDNAME 
ALTER TABLE NAMEOFTABLE ADD  COLUMNNAME  AS (FIELD+20) 



SELECT * FROM TABLE WHERE ID_LIBRE IN (SELECT ID FROM TABLE WHERE ID > 1)
SELECT ID FROM TABLE WHERE TABLE.ID = (SELECT ID FROM TABLE WHERE ID > 1)
SELECT * FROM TABLE WHERE ID_LIBRE = ANY (SELECT ID FROM TABLE WHERE ID > 1)
SELECT * FROM TABLE WHERE ID_LIBRE NOT IN (SELECT ID FROM TABLE WHERE ID > 1)
SELECT * FROM TABLE WHERE ID_LIBRE = <> ALL (SELECT ID FROM TABLE WHERE ID > 1)
UPDATE TABLE SET FIELD = ""  WHERE ID = ANY (SELECT ID FROM ANOTHER)
DELETE TABLE WHERE FILED = ANY (SELECT * FROM TABLE)



INSERT INTO TABLE (FIELD) SELECT (FIELD) FROM TABLE
GO /*AGRUPA ANTES Y DESPUES GRUPOS DE SENTENCIAS */


CREATE VIEW ANOTHERTABLENAME_ AS
/*SIENDO UNA TABLA VIRTUAL DINAMICA QUE AFECTA LOS DATOS CON LOS QUE SE TRABAJA LA TABLA DESDE LA CUAL FUE CREADA*/
	SELECT * FROM TABLE
SELECT * FROM ANOTHERTABLENAME_	
SP_HELPTEXT ANOTHERTABLENAME_ /*TE DA ACCESO A COMO SE CREO LA VISTA*/	

CREATE VIEW ANOTHERTABLENAME_ WITH ENCRYPTION AS /*ELIMINADO EL PROBLEMA DE SEGURIDAD*/
	SELECT * FROM TABLE

DROP VIEW ANOTHERTABLENAME_ /*IMPORTANTE TENER LOS PERMISO NECESARIOS,CADA UNA DE LAS VISTAS DEBE ELIMNARSE INDIVIDUALMENTE*/
UPDATE ANOTHERTABLENAME_ SET FIELD = "" /*AFECTANDO LA TABLA DE LA CUAL DEPENDE TANTO UN UPDATE COMO DELETE*/



CREATE VIEW COPY AS 
	SELECT * FROM TABLE WHERE FIELD > 5 WITH CHECK OPTION /*SOLO MODIFICARA HE INSERTARAS EN EN REGISTROS QUE CUMPLAN ESTA CONDICION*/


ALTER VIEW ANOTHERTABLENAME_ AS /*TE PERMITE MODIFICAR LA ESTRUCTURA COMPLETA DEL VIEW EVITANDO ELIMINAR Y VOLVER A CREAR*/
	SELECT * FROM TABLE WHERE


SELECT Field, Field2, Field3=
CASE Field3
	WHEN 17 THEN ""
	WHEN 17 THEN ""
	WHEN 17 THEN ""
	WHEN 17 THEN ""
	WHEN 17 THEN ""
	WHEN FIELD >= 17 THEN ""
	ELSE ""
END
--POR DEFECTO RETORNANDO NULL
-FROM TABLE

--ESTRUCTURA DE CONDICIONES
IF EXISTS(SELECT * FROM TABLE WHERE FIELD > 10)
	SELECT * FROM TABLE 
ELSE
	SELECT ""


DECLARE @VARIABLE VARCHAR(20)
DECLARE @VARIABLE INT

SET @VARIABLE = ""
SET @VARIABLE = 10
SELECT * FROM TABLE WHERE FIELD = @VARIABLE


--PROCEDIMIENTO ALMACENADOS
-- <> ALL CREATE PROCEDURE, TRIGGER, VIEW , RULE, DEFAULT

CREATE PROCEDURE NAMEOFPROCEDURA AS 
	SELECT * FROM TABLE WHERE ID

EXEC NAMEOFPROCEDURA

CREATE PROCEDURE NAMEOFTABLE AS 
	INSERT INTO TABLE VALUES()

EXEC NAMEOFTABLE
DROP PROC NAMEOFPROCEDURE
IF OBJECT_ID (NAMEOFPROCEDURE) IS NOT NULL
	BEGIN 
		DROP DATABASE NAMEOFPROCEDURE
	END
ELSE
	BEGIN
		SELECT "NO EXISTE"
	END

CREATE PROCEDURE NAMEOFPROCEDURE 
@EDAD INT = 1,-- SIENDO EL = EL POR DEFECTO
@NOMBRE VARCHAR(20) = ""
AS 
	SELECT * FROM TABLER WHERE EDAD = @EDAD

EXEC NAMEOFPROCEDURE 10,''

--PROCEDURE CON PARAMETROS DE SALIDA

CREATE PROCEDURE NAMEOFPROCEDURE 
@EDAD INT = 1,-- SIENDO EL = EL POR DEFECTO
@NOMBRE VARCHAR(20) = ""
@COUNT INT OUTPUT
AS 
	SET @COUNT =(SELECT * FROM TABLER WHERE EDAD = @EDAD)	 

DECLARE @TOTAL INT 
EXEC NAMEOFPROCEDURE 10,'', @TOTAL OUTPUT
PRINT @TOTAL


CREATE PROCEDURE NAMEOFPROCEDURE 
@EDAD INT = 1,-- SIENDO EL = EL POR DEFECTO
@NOMBRE VARCHAR(20) = ""
AS 
	IF(@EDAD IS NULL) OR (@NOMBRE IS NULL)
	RETURN 0
	ELSE
		RETURN 1


DECLARE @TOTAL INT 
EXEC @TOTAL =  NAMEOFPROCEDURE NULL, NULL
SELECT @TOTAL

SP_STORED_PROCEDURES --MUESTRA TODOS LOS PROCEMIENTOS ALMACENADOS




--https://www.ibm.com/support/knowledgecenter/es/SSGU8G_11.50.0/com.ibm.ddi.doc/ids_ddi_096.htm
--https://technet.microsoft.com/es-es/library/ms189079(v=sql.105).aspx