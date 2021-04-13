import os
import mysql.connector


try:
	conn = mysql.connector.connect(host="localhost",user="admin", password="pauletlouis", database="game")
	print("connection base de donné établi")
except:
	print("erreu")
cursor = conn.cursor()






for i in range(0,10):
	for r in range(0,10):

		command = "INSERT INTO `map` (`position`) VALUES ('"+str(i)+":"+str(r)+"')"
		cursor.execute(command)
conn.commit()

command = "SELECT * FROM `map` WHERE 1"
cursor.execute(command)
print(cursor.fetchall())
conn.close()