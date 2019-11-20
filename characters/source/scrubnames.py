import xlrd
import os

xfile = xlrd.open_workbook(os.path.join("C:/xampp/htdocs/nothw/", "characters.xlsx"), on_demand=True)
names = xfile.sheet_names()

for name in names:
    print("<option value=\"" + name + "\">" + name + "</a></li>")