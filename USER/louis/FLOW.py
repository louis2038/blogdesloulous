import sys
sys.path.insert(1, '/var/www/html/USER')
from SERVICE import *
service = ServiceClass("l")
print(service.get_user())