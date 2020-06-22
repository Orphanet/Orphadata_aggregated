#!/usr/bin/env python
import math,os,os.path,sys,json,datetime

def convert_size(size_bytes):
   if size_bytes == 0:
       return "0B"
   size_name = ("B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB")
   i = int(math.floor(math.log(size_bytes, 1024)))
   p = math.pow(1024, i)
   s = round(size_bytes / p, 2)
   return "%s %s" % (s, size_name[i])

def Get_ORDO():
        id = 1
        listordo = []
	for afile in os.listdir('/env/orphanet/pub/www/orphadata/data/ORDO/'):
                if afile.startswith('ordo_orphanet_') is True and afile.endswith('.zip'):
                        aVersionordo = afile.split('ordo_orphanet_')[1].split('.owl')[0]
                        dico_ordo = {}
                        dico_ordo['anId'] = id
                        dico_ordo['aVersionordo'] = aVersionordo
                        dico_ordo['ordoURL'] = 'http://www.orphadata.org/data/ORDO/' + afile
                        dico_ordo['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/ORDO/' + afile).st_size)
                        aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/ORDO/' + afile)
                        dico_ordo['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
                        for afiletxt in os.listdir('/env/orphanet/pub/www/orphadata/data/ORDO/'):
                                if afiletxt.startswith('ORDO_releaseNotes') is True:
                                        aVersiontxt = afiletxt.split('ORDO_releaseNotes')[1].split('.txt')[0]
                                        if aVersiontxt == aVersionordo:
                                                dico_ordo['aNote'] = 'http://www.orphadata.org/data/ORDO/' + afiletxt
                                                listordo.append(dico_ordo)


                elif afile == 'ordo_orphanet.owl.zip':
                        dico_ordo = {}
                        dico_ordo['anId'] = id
                        dico_ordo['aVersionordo'] = '2.6'
                        dico_ordo['ordoURL'] = 'http://www.orphadata.org/data/ORDO/ordo_orphanet.owl.zip'
                        dico_ordo['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/ORDO/ordo_orphanet.owl.zip').st_size)
                        
                        aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/ORDO/ordo_orphanet.owl.zip')
                        dico_ordo['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
                        dico_ordo['aNote'] = 'http://www.orphadata.org/data/ORDO/ORDO_releaseNotes2.6.txt'
                        listordo.append(dico_ordo)

                id += 1

        listordo_tmp = []
        for k in listordo:
                listordo_tmp.append(k['aVersionordo'])
        listordo_tmp.sort()
        listordo_tmp.reverse()

        listordofinal = []
        for aVersion in listordo_tmp:
               for aDicoOrdo in listordo:
                       aVersiontmp = aDicoOrdo['aVersionordo']
                       if aVersiontmp == aVersion:
                           listordofinal.append(aDicoOrdo)
                           
        return listordofinal

def Process():

   listordo = Get_ORDO()
   with open('/env/orphanet/pub/www/orphadata/cgi-bin/ordo.json','wb') as outfile:
      json.dump(listordo,outfile)

      
if __name__ == "__main__":

   Process()
