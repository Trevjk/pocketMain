import os

local = "C:/xampp/htdocs/nothw/renders/deviantart/"
for filename in os.listdir(local):
    namearr = filename.split()
    namearr = namearr[6:]
    print("".join(namearr))
    source = local + filename
    name = local + "".join(namearr)
    os.rename(source, name)