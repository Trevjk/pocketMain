import xlrd
import os

xfile = xlrd.open_workbook(os.path.join("os.path.abspath(__file__)", "characters.xlsx"), on_demand=True)
names = xfile.sheet_names()

print("<table>")
for i in range(0, len(names)):
    if (i%5 == 0):
        if (i != 0):
            print("\t</tr>")
        print("\t<tr>")
    print("\t\t<td name=\"" + names[i] + "\"><a href=\"character.php?character=" + names[i] + "\"><img src=\"renders/" + names[i] + ".png\" height=\"200px\"></a></td>")
    # if ((i+2)%10 == 0):
    #     print("\t</tr>")
    #     print("\t<tr>")
print("\t</tr>")
print("</table>")