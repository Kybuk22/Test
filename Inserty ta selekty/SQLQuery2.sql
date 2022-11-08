
USE [baza]
GO

INSERT INTO [dbo].[employee]
           ([first_name]
           ,[last_name]
           ,[personal_id_number])
     VALUES
           ('kek','ok',12),('kek1','ok1',13)
GO
USE [baza]
GO

INSERT INTO [dbo].[employee_position]
           ([name])
     VALUES
           ('barman'),('barman2')
GO
USE [baza]
GO

USE [baza]
GO

INSERT INTO [dbo].[restaurant]
           ([nName]
           ,[city]
           ,[adress]
           ,[postcode])
     VALUES
           ('name','city','addres','postcode'),('name1','city1','addres1','postcode1')
GO



INSERT INTO [dbo].[employment]
           ([restaurant_id]
           ,[employee_id]
           ,[employee_position_id])
     VALUES
           (1,1,1),(1,3,1),(1,3,2)
GO

USE [baza]
GO

INSERT INTO [dbo].[restaurant_table]
           ([name]
           ,[number_of_guests]
           ,[restaurant_id])
     VALUES
           ('stolik',0,1),('stolikk',0,1)
GO
USE [baza]
GO

INSERT INTO [dbo].[reservation]
           ([restaurant_id]
           ,[restaurant_table_id]
           ,[surname]
           ,[reservation_date]
           ,[phone]
           ,[guests])
     VALUES
           (1,1,'ok','12-12-12','phone',0)
GO







Select DISTINCT restabl.id,restabl.name,restabl.number_of_guests,restabl.restaurant_id
From restaurant_table restabl
Right Join reservation resrv
On restabl.id!=resrv.restaurant_table_id

Select *
From restaurant_table restabl
Inner JOIN reservation resrv
On restabl.id=resrv.restaurant_table_id
Order by restabl.restaurant_id /*albo Where restabl.restaurant_id=*cos-tam* */

Select *
From employee
Inner JOIN employment employm
On employm.employee_id=employee.id
Inner JOIN employee_position emppos 
On employm.employee_position_id=emppos.id

Select *
From employee
Left JOIN employment employm
On employm.employee_id=employee.id
Where employm.employee_position_id is Null /* переработай,нула нет */

Select employee.id
From employee
Inner JOIN employment employm
On employm.employee_id=employee.id
Group by employm.employee_id,employee.id
Having COUNT(employee.id)>1

Select *
From employee
Cross Join restaurant


 
