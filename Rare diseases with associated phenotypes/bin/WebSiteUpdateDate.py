#!/usr/bin/env python
# -*- coding: utf-8 -*-
import string, sys , os , os.path , shutil , json


def GetLastDate():

    data = json.load(open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product9_ages.json'))
    lastDate= data[0]['aDate']
    return lastDate


def Updater(aDate,listOffiles2update):

    os.chdir('/env/orphanet/pub/www/orphadata/cgi-bin/')
    for aWebsitefile2update in listOffiles2update:
        fhi = open(aWebsitefile2update,"r+")
        aWebsitefile2updateTmp = aWebsitefile2update + '.tmp'
        fho = open(aWebsitefile2updateTmp , "w")
        for line in fhi.readlines():
            if line.find("2011 Orphanet Inserm US14 <br> Last update:") != -1:
                oldPattern = line
                newPattern = "             <span class=\"copyright\">&copy; 2011 Orphanet Inserm US14 <br> Last update:  " + aDate + "</span>\n"
                newline = line.replace(oldPattern , newPattern)
                fho.write(newline)
            else:
                fho.write(line)
        fhi.close()
        fho.close()
        shutil.move(aWebsitefile2updateTmp,aWebsitefile2update)



                
if __name__ == "__main__":
    aDate = GetLastDate()
    listOffiles2update = ["contact.html" ,
                          "epidemio.html" ,
                          "error.html" ,
                          "faq.html" ,
                          "index.html" ,
                          "policy.html" ,
                          "private.html" ,
                          "private_products.html" ,
                          "rare_free.html" ,
                          "sparql.html" ,
                          "index.php" ,
                          "send.php"]
    
    listOffiles2update2 = ["testup.html"]           

    Updater(aDate,listOffiles2update)
