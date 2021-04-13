import os
import mysql.connector


class ServiceClass():
    
    def __init__(self, users):
        self.users = users
        try:
            self.conn = mysql.connector.connect(host="localhost",user="admin", password="pauletlouis", database="game")
        except:
            print("erreur")
        self.cursor = self.conn.cursor()
        self.inventory = 0



    def __del__(self):
        self.conn.close()

    def get_user(self):
        return self.users

    def commandSQL(self,command):
        self.cursor.execute(command)
        print(self.cursor.fetchall())

    def set_data(self,position,data):
        
        command = "UPDATE `map` SET `donne`='"+ data +"' WHERE position='"+position+"'"
        try:
            self.cursor.execute(command)
            self.conn.commit()
            return True
        except:
            print("erreur")
            print(self.cursor.fetchall())
            return False
        

    def inclure(self, file):
        tran = "/var/www/html/USER/" + self.users + "/temp/" + file
        str = open(tran, 'r').read()
        return str


    def autorisation(self):
        return True


    def write_base(self,content):
        filepas = '/var/www/html/USER/'+self.users+'/base.py'
        fichier = open(filepas,'w')
        fichier.write(content)
        fichier.close()
        return True
        
    def run(self,file):
        A = "cd /var/www/html/USER/"+self.users+"; python " + file
        os.system(A)
        return True

    def write_sonde(self,sonde_name, content):
        fichier = open(sonde,'w')
        fichier.write(content)
        fichier.close()
        return True

    def create_sonde(self,sonde_name):
        return True

    def print_inventory_base(self):
        return ""

    def craft(self,name):
        return ""

    def delete_object(self):
        return True

    def print_inventory_truck(self,name_of_truck):
        return True

    def get_inventory_truck(self,name_of_truck,entity,quantity):
        return

    def put_inventory_truck(self,name_of_truck,entity,quantity):
        return