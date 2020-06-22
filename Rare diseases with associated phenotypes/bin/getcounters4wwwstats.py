#!/usr/bin/python
import json,os,os.path,sys


def gettestdiag():
	listfiles = ['/env/orphanet/pub/www/orphadata/data/private/product8/product8_ALL.xml', '/env/orphanet/pub/www/orphadata/data/private/product8/product8_de.xml', '/env/orphanet/pub/www/orphadata/data/private/product8/product8_es.xml' , '/env/orphanet/pub/www/orphadata/data/private/product8/product8_fr.xml' , '/env/orphanet/pub/www/orphadata/data/private/product8/product8_gb.xml' , '/env/orphanet/pub/www/orphadata/data/private/product8/product8_it.xml']
	dicotest = {}

	for afile in listfiles:
		for lines in open(afile):
			if lines.find('<DiagnosticTest id="') != -1:
				idtest = lines.split('<DiagnosticTest id="')[1].split('"')[0]
				if not dicotest.has_key(idtest):
					dicotest[idtest] = 1

				else:
					dicotest[idtest] += 1

	diagtests = len(dicotest)
	return diagtests



def getepidemio():
	
	listfiles = ['/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_ages.xml' , '/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_prev.xml']
	
#	n_ages = 0
#	for lines in open('/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_ages.xml'):
#		if lines.find('<AverageAgeOfOnsetList count="') != -1:
#			count = int(lines.split('<AverageAgeOfOnsetList count="')[1].split('"')[0])
#			n_ages += count



        n_prev = 0
        for lines in open('/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_prev.xml'):
                if lines.find('<PrevalenceList count="') != -1:
                        count = int(lines.split('<PrevalenceList count="')[1].split('"')[0])
                        n_prev += count

        
        epidemio = n_prev
        return epidemio

 
#	epidemio = n_ages + n_prev



def Getdisease():

        for lines in open('/env/orphanet/pub/www/orphadata/data/xml/en_product1.xml'):
		if lines.find('<DisorderList count="') != -1:
			diseases = int(lines.split('<DisorderList count="')[1].split('"')[0])

	
	return diseases


def diseases_genes():

        for lines in open('/env/orphanet/pub/www/orphadata/data/xml/en_product6.xml'):
                if lines.find('<DisorderList count="') != -1:
                        genesdiseases = int(lines.split('<DisorderList count="')[1].split('"')[0])


        return genesdiseases


def diseases_hpo():

        for lines in open('/env/orphanet/pub/www/orphadata/data/xml/en_product4_HPO.xml'):
                if lines.find('<DisorderList count="') != -1:
                        hpodiseases = int(lines.split('<DisorderList count="')[1].split('"')[0])


        return hpodiseases


def drugs():

        for lines in open('/env/orphanet/pub/www/orphadata/data/private/product6/product6.xml'):
                if lines.find('<DrugRegulatoryStatusList count="') != -1:
                        drugs = int(lines.split('<DrugRegulatoryStatusList count="')[1].split('"')[0])


        return drugs


def getGeneAsso_old():
   
    fh = open('disease_gene_relationships.xml')
    line = fh.readline()
    dicogenes = {}
    while line != "":

        if line.find('<Disorder id="') != -1:
            line = fh.readline()
            while line.find("</DisorderGeneAssociationList>") == -1:
                if line.find('<Gene id="') != -1:
                    geneid = line.split('<Gene id="')[1].split('"')[0]
                    dicogenes[geneid] = 1
                            
                line = fh.readline()
        line = fh.readline()
    

    numberOfGeneAsso = len(dicogenes.keys())
    fh.close()    
    return numberOfGeneAsso
	
	

def getGeneAsso():

    numberOfGeneAsso = 0
    for lines in open('/env/orphanet/pub/www/orphadata/data/scripts4orphadata/disease_gene_relationships.xml'):
        if lines.find('<Gene id="') != -1:
            numberOfGeneAsso += 1
    return numberOfGeneAsso
	
	
	
def getHPO():
        
   fh = open('/env/orphanet/pub/www/orphadata/data/scripts4orphadata/disease_HPO_annotations_number.xml')
   for lines in fh:
	if lines.find('<HPODisorderAssociationList count="') > 0 :
		HPOnumber = lines.split('<HPODisorderAssociationList count="')[1].split('"')[0]
		break

   return HPOnumber
		
   


dico4json = {   'diseases' : Getdisease(),
		'genesdiseases' : getGeneAsso(),
		'hpodiseases' : getHPO(),
		'epidemio' : getepidemio(),
		'drugs' : drugs(),
		'testdiags' : gettestdiag() 
}

list4json = []
list4json.append(dico4json)

with open('/env/orphanet/pub/www/orphadata/cgi-bin/counterwww.json','wb') as outfile:
	json.dump(list4json, outfile)

