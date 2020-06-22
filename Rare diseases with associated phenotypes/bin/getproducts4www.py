#!/usr/bin/python
import math,os,os.path,sys,json,datetime,time



def convert_language(lang):
	
	dico_lang = {	"it" : "Italian",
			"cz" : "Czech",
			"nl" : "Dutch",
			"es" : "Spanish",
			"pl" : "Polish",
			"pt" : "Portuguese",
			"fr" : "French",
			"de" : "German",
			"en" : "English"
			}

	if dico_lang.has_key(lang):
		language = dico_lang[lang]

	return language	


def convert_size(size_bytes):
   if size_bytes == 0:
       return "0B"
   size_name = ("B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB")
   i = int(math.floor(math.log(size_bytes, 1024)))
   p = math.pow(1024, i)
   s = round(size_bytes / p, 2)
   return "%s %s" % (s, size_name[i])



######################################################
######################################################


def GetProducts1_cross():

        listproducts1 = []
        for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
                if aXML.find('_product1.xml')>= 1:
                     listproducts1.append(aXML)
                     
        for aJSON in os.listdir('/env/orphanet/pub/www/orphadata/data/export/'):
                if aJSON.find('_product1.json')>= 1:
                     listproducts1.append(aJSON)

        listproducts1.sort()
		
		
		
        return listproducts1

def Get_product1_xml(id,listproducts,mypath):

        list_dicsa = []
	for aXML in listproducts:
                
		if aXML.find('_product1.xml')>= 1:
			dico = {}
			dico['anId'] = str(id)
			dico['aProduct'] = aXML 
			fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
			line = fh.readline()
			while line != '':
				if line.find('<DisorderList count="') >= 1:
					amount = line.split('<DisorderList count="')[-1].split('">')[0]
					break
				else:
					line = fh.readline()
			dico['anAmount'] = amount
			dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
			dico['aType'] = os.path.splitext(aXML)[-1][1:]
			dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)

                        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
                        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])
                        
			#aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/xml/'+ aXML)
                        #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
		#	dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
                
			dico['aLanguage'] = convert_language(aXML.split('_')[0])
			list_dicsa.append(dico)
			id +=1
        return list_dicsa,id


def Get_product1_json(id,listproducts,mypath):

        list_dicsb = []
	for aJSON in listproducts:

		if aJSON.find('_product1.json')>= 1:
                        dico = {}
                        dico['anId'] = str(id)
                        dico['aProduct'] = aJSON
                        pathfile = '/env/orphanet/pub/www/orphadata/data/export/' + aJSON
                        with open(pathfile) as infile:
                                data = json.load(infile)
                                amount = unicode(data['JDBOR'][0]['DisorderList'][0]['count']).encode('ascii','replace')
                                dico['anAmount'] = amount                        
                        dico['anUrl'] = 'http://www.orphadata.org/data/export/' + aJSON
                        dico['aType'] = os.path.splitext(aJSON)[-1][1:]
                        dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/export/' + aJSON).st_size)

                        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/export/' + aJSON)).split()
                        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])

                        #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/export/' + aJSON)
                        #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
		#	dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
                
                        dico['aLanguage'] = convert_language(aJSON.split('_')[0])
                        list_dicsb.append(dico)
                        id +=1

        return list_dicsb,id


##############################################################
##############################################################

def GetProducts3_class():

        listproducts3 = []
        for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
		if aXML.find('_product3_')>= 1:
                     listproducts3.append(aXML)
                     
        listproducts3.sort()
        return listproducts3


def Get_product3_xml(id,list_dics,listproducts3,mypath):

        dico_class = {'en_product3_146.xml':('Rare Cardiac Diseases ','product3_146_051212017.xsd'),
                      'en_product3_147.xml':('Rare Developmental Anomalies During Embryogenesis ','product3_147_051212017.xsd'),
                      'en_product3_148.xml':('Rare Cardiac Malformations ','product3_148_07122017.xsd'),
                      'en_product3_149.xml':('Rare Sucking Swallowing Disorders ','product3_149_051212017.xsd'),
                      'en_product3_150.xml':('Rare Inborn Errors Of Metabolism ','product3_150_051212017.xsd'),
                      'en_product3_152.xml':('Rare Gastroenterological Diseases ','product3_152_051212017.xsd'),
                      'en_product3_156.xml':('Rare Genetic Diseases ','product3_156_07122017.xsd'),
                      'en_product3_181.xml':('Rare Neurological Diseases ','product3_181_051212017.xsd'),
                      'en_product3_182.xml':('Rare Abdominal Surgical Diseases ','product3_182_05122017.xsd'),
                      'en_product3_183.xml':('Rare Hepatic Diseases ','product3_183_05122017.xsd'),
                      'en_product3_184.xml':('Rare Respiratory Diseases ','product3_184_06122017.xsd'),
                      'en_product3_185.xml':('Rare Urogenital Diseases ','product3_185_06122017.xsd'),
                      'en_product3_186.xml':('Rare Surgical Thoracic Diseases ','product3_186_06122017.xsd'),
                      'en_product3_187.xml':('Rare Skin Diseases ','product3_187_06122017.xsd'),
                      'en_product3_188.xml':('Rare Renal Diseases ','product3_188_06122017.xsd'),
                      'en_product3_189.xml':('Rare Eye Diseases ','product3_189_06122017.xsd'),
                      'en_product3_193.xml':('Rare Endocrine Diseases ','product3_193_06122017.xsd'),
                      'en_product3_194.xml':('Rare Haematological Diseases ','product3_194_06122017.xsd'),
                      'en_product3_195.xml':('Rare Immunological Diseases ','product3_195_06122017.xsd'),
                      'en_product3_196.xml':('Rare Systemic And Rhumatological Diseases ','product3_196_06122017.xsd'),
                      'en_product3_197.xml':('Rare Odontological Diseases ','product3_197_06122017.xsd'),
                      'en_product3_198.xml':('Rare Circulatory System Diseases ','product3_198_06122017.xsd'),
                      'en_product3_199.xml':('Rare Bone Diseases ','product3_199_06122017.xsd'),
                      'en_product3_200.xml':('Rare Otorhinolaryngological Diseases ','product3_200_06122017.xsd'),
                      'en_product3_201.xml':('Rare Infertility ','product3_201_07122017.xsd'),
                      'en_product3_202.xml':('Rare Neoplastic Diseases ','product3_202_07122017.xsd'),
                      'en_product3_203.xml':('Rare Infectious Diseases ','product3_203_07122017.xsd'),
                      'en_product3_204.xml':('Rare Intoxications ','product3_204_07122017.xsd'),
                      'en_product3_205.xml':('Rare Gynaecological And Obstetric Diseases ','product3_205_07122017.xsd'),
                      'en_product3_209.xml':('Rare Surgical Maxillo-facial Diseases ','product3_209_07122017.xsd'),
                      'en_product3_212.xml':('Rare Allergic Disease ','product3_212_07122017.xsd'),
                      'en_product3_216.xml':('Rare Teratologic Disorders ','product3_216_07122017.xsd'),
                      'en_product3_231.xml':('Rare Rheumatologic Diseases Of Childhood ','product3_231_07122017.xsd')
                       }

        
	for aXML in listproducts3:
                for aKey in dico_class.keys():
		        if aXML == aKey:
			        dico = {}
			        dico['anId'] = str(id)
			        dico['aProduct'] = aXML
			        dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
			        dico['aType'] = os.path.splitext(aXML)[-1][1:]
			        dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)

                                aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
                                dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])

                                
			        #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
			        # dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
                                #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
                                
                                dico['aLanguage'] = convert_language('en')
                                dico['schema'] = dico_class[aXML][1]
                                dico['DefProduct'] = dico_class[aXML][0]
                                list_dics.append(dico)
			        id +=1
                        
        return list_dics,id


##############################################################
##############################################################
def Get_product4_xml():

     #   list_products_4 = []
	#for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
    #            if aXML.find('_product4_') != -1:
  #                      list_products_4.append(aXML)
   #     list_products_4.sort()


   
   
	list_products_4 = ['en_product4_HPO.xml' ,
                           'en_product4_HPO_status.xml' ,
			   'fr_product4_HPO.xml' ,
			   'fr_product4_HPO_status.xml' ,
			   'de_product4_HPO.xml' , 
			   'de_product4_HPO_status.xml' , 
			   'es_product4_HPO.xml' ,
			   'es_product4_HPO_status.xml' ,
			   'it_product4_HPO.xml' , 
			   'it_product4_HPO_status.xml' ,
			   'nl_product4_HPO.xml' ,
			   'nl_product4_HPO_status.xml' ,
			   'pt_product4_HPO.xml' , 
			   'pt_product4_HPO_status.xml'
						   ]
   
        id = 1
        list_dict4 = []
        for aXML in list_products_4:
                dico = {}
                dico['anId'] = str(id)
                dico['aProduct'] = aXML
                dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
                dico['aType'] = os.path.splitext(aXML)[-1][1:]
                dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)

                aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
                dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])

                                
                
                #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
                #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
        	#dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
        
                fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
                line = fh.readline()
                while line != '':
                        if line.find('<DisorderList count="') >= 1:
                                amount = line.split('<DisorderList count="')[-1].split('">')[0]
                                break
                        else:
                                line = fh.readline()
                dico['anAmount'] = amount
                dico['aLanguage'] = convert_language(aXML.split('_')[0])
                list_dict4.append(dico)
                id +=1
                        
        return list_dict4

##############################################################
##############################################################
def Get_product6_xml():

        id = 1
        list_dict6 = []
	for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
                if aXML.find('en_product6.xml') != -1:
			dico = {}
			dico['anId'] = str(id)
			dico['aProduct'] = aXML
			dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
			dico['aType'] = os.path.splitext(aXML)[-1][1:]
			dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)

                        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
                        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])
                        
                        #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
                        #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
			#dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
                
			fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
			line = fh.readline()
			while line != '':
				if line.find('<DisorderList count="') >= 1:
					amount = line.split('<DisorderList count="')[-1].split('">')[0]
					break
				else:
					line = fh.readline()
			dico['anAmount'] = amount
			dico['aLanguage'] = convert_language('en')
                        list_dict6.append(dico)
			id +=1
                        
        return list_dict6


##############################################################
##############################################################
def Get_product7_xml():

        id = 1
        list_dict7 = []
	for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
                if aXML.find('en_product7.xml') != -1:
			dico = {}
			dico['anId'] = str(id)
			dico['aProduct'] = aXML
			dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
			dico['aType'] = os.path.splitext(aXML)[-1][1:]
			dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)

                        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
                        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])
                        
                        #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
                        #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
			#dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
                
			fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
			line = fh.readline()
			while line != '':
				if line.find('<DisorderList count="') >= 1:
					amount = line.split('<DisorderList count="')[-1].split('">')[0]
					break
				else:
					line = fh.readline()
			dico['anAmount'] = amount
			dico['aLanguage'] = convert_language('en')
                        list_dict7.append(dico)
			id +=1
                        
        return list_dict7




##############################################################
##############################################################
def Get_product9_xml():

  id = 1
  list_dict9_ages = []
  list_dict9_prev = []
  

  for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/xml/'):
      if aXML.endswith('_ages.xml'):
        dico = {}
        dico['anId'] = str(id)
        dico['aProduct'] = aXML
        dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
        dico['aType'] = os.path.splitext(aXML)[-1][1:]
        dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)
        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])
        fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
        line = fh.readline()
        while line != '':
          if line.find('<DisorderList count="') >= 1:
            amount = line.split('<DisorderList count="')[-1].split('">')[0]
            break
          else:
            line = fh.readline()
        dico['anAmount'] = amount
        dico['aLanguage'] = convert_language(aXML.split('_')[0])
        list_dict9_ages.append(dico)
        id +=1

      elif aXML.endswith('_prev.xml'):

        dico = {}
        dico['anId'] = str(id)
        dico['aProduct'] = aXML
        dico['anUrl'] = 'http://www.orphadata.org/data/xml/' + aXML
        dico['aType'] = os.path.splitext(aXML)[-1][1:]
        dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/xml/' + aXML).st_size)
        aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)).split()
        dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])
        fh = open('/env/orphanet/pub/www/orphadata/data/xml/' + aXML)
        line = fh.readline()
        while line != '':
          if line.find('<DisorderList count="') >= 1:
            amount = line.split('<DisorderList count="')[-1].split('">')[0]
            break
          else:
            line = fh.readline()
        dico['anAmount'] = amount
        dico['aLanguage'] = convert_language(aXML.split('_')[0])
        list_dict9_prev.append(dico)
        id += 1

      else:
        pass

  return list_dict9_ages, list_dict9_prev
        






##############################################################
##############################################################
def Get_samples_xml():
## ('Textual Information' , 'product2_en.xml' , 'product2_en_sample.xml' , '' , ''),
        
		
		# ('Product 9' , 'Epidemiological Data ' , '/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_ages.xml', 'product9_ages_sample.xml', 'img/fair/en_product9_ages_12122017.xsd' , 'img/fair/Schema_product9_ages_18122017.jpg'),
		# ('Product 9' , 'Natural History' , '/env/orphanet/pub/www/orphadata/data/private/product9/en_product9_prev.xml', 'product9_prev_sample.xml', 'img/fair/en_product9_prev_13122017.xsd' , 'img/fair/Schema_product9_prev_19122017.jpg'),

        list_samples = [ ('Product 2' , 'Textual Information' , '/env/orphanet/pub/www/orphadata/data/private/product2/product2_en.xml' , 'product2_en_sample.xml' , 'img/fair/product2.xsd' , 'img/fair/product2.jpg'),
						 ('Product 6' , 'Orphan Drugs' , '/env/orphanet/pub/www/orphadata/data/private/product6/product6.xml' , 'product6_sample.xml', 'img/fair/product6.xsd' , 'img/fair/Product6_30012018.jpg'),
                         ('Product 4' , 'Expert Centers Network' , '/env/orphanet/pub/www/orphadata/data/private/product4/product4_net.xml', 'product4_net_sample.xml', 'img/fair/product4_net.xsd' , 'img/fair/Product4_net_31012018.jpg'),
                         ('Product 4' , 'Expert Centers' , '/env/orphanet/pub/www/orphadata/data/private/product4/product4.xml', 'product4_sample.xml' , 'img/fair/product4.xsd' , 'img/fair/Product4_31012018.jpg'),                         
                         ('Product 8' , 'Tests Diagnostic & Clinical Laboratories' , '/env/orphanet/pub/www/orphadata/data/private/product8/product8_ALL.xml' , 'product8_sample.xml' , 'img/fair/product8.xsd' , 'img/fair/Product8_06022018.jpg'),				 
                         ('Product 7' , 'Biobanks' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_bb.xml' , 'product7_bb_sample.xml' , 'img/fair/product7_bb.jpg', 'img/fair/product7_bb.jpg'),
                         ('Product 7' , 'Variants Biobanks' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_mut.xml', 'product7_mut_sample.xml' , 'img/fair/product7_mut.jpg' , 'img/fair/product7_mut.jpg'),
                         ('Product 7' , 'Patients Registries Network' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_pat_net.xml' , 'product7_pat_net_sample.xml' , 'img/fair/product7_pat_net.jpg' , 'img/fair/product7_pat_net.jpg'),
                         ('Product 7' , 'Patients Registries' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_pat.xml' , 'product7_pat_sample.xml' , 'img/fair/product7_pat.jpg' , 'img/fair/product7_pat.jpg'),
                         ('Product 7' , 'Research Products Network' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_rchp_net.xml' , 'product7_rchp_net_sample.xml' , 'img/fair/product7_rchp_net.jpg' , 'img/fair/product7_rchp_net.jpg'),
                         ('Product 7' , 'Research Products' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_rchp.xml' , 'product7_rchp_sample.xml' , 'img/fair/product7_rchp.jpg' , 'img/fair/product7_rchp.jpg'),
                         ('Product 7' , 'Clinical Trials Network' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_rcl_net.xml', 'product7_rcl_net_sample.xml' , 'img/fair/product7_rcl_net.jpg' , 'img/fair/product7_rcl_net.jpg'),
                         ('Product 7' , 'Clinical Trials' , '/env/orphanet/pub/www/orphadata/data/private/product7/product7_rcl.xml' , 'product7_rcl_sample.xml' , 'img/fair/product7_rcl.jpg' , 'img/fair/product7_rcl.jpg'),						 						 
                         ('Product 3' , 'Patient Organisations Network' , '/env/orphanet/pub/www/orphadata/data/private/product3/product3_net.xml' , 'product3_net_sample.xml', 'img/fair/product3_net.xsd' , 'img/fair/Product3_net_30012018.jpg'),
                         ('Product 3' , 'Patient Organisations' , '/env/orphanet/pub/www/orphadata/data/private/product3/product3.xml', 'product3_sample.xml' , 'img/fair/product3.xsd' , '/img/fair/Product3_29012018.jpg'),
                         ]

        id = 1
        list_dict_samples = []
	for aSample in list_samples:
                idProduct, nameProduct, aXML, aXMLsample, aXSD, aJPG = aSample
                dico = {}
                dico['anId'] = str(id)
                dico['aProduct'] = aXML
		#fh = open(aXML)
		#line = fh.readline()
		#while line != '':
		#	if line.find('<DisorderList count="') >= 1:
		#		amount = line.split('<DisorderList count="')[-1].split('">')[0]
		#		break
		#	else:
		##dico['anAmount'] = amount
                dico['aSample'] = aXMLsample
                dico['idProduct'] = idProduct
                dico['nameProduct'] = nameProduct
                dico['anUrlsample'] = 'http://www.orphadata.org/data/samples/' + aXMLsample
                dico['aSize'] = convert_size(os.stat('/env/orphanet/pub/www/orphadata/data/samples/' + aXMLsample).st_size)

                aTimeList = time.ctime(os.path.getctime('/env/orphanet/pub/www/orphadata/data/samples/' + aXMLsample)).split()
                dico['aDate'] = ("%s %s %s")%(aTimeList[2], aTimeList[1] , aTimeList[-1][-2:])

                #aTime = os.path.getmtime('/env/orphanet/pub/www/orphadata/data/samples/' + aXMLsample)
                #dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).strftime("%w %b %y"))
       		#dico['aDate'] = str(datetime.datetime.fromtimestamp(aTime).year)[-2:]+'/'+str(datetime.datetime.fromtimestamp(aTime).month)+'/'+str(datetime.datetime.fromtimestamp(aTime).day)
        
                dico['aXSD'] = aXSD
                dico['aJPG'] = aJPG
                list_dict_samples.append(dico)
                id +=1
                        
        return list_dict_samples


#############################################################
#############################################################

def WriteJSON(listdics1a , listdics1b ,listdics3 , listdics4 , listdics6 , listdics7 , listdic9_ages, listdic9_prev ,list_dict_samples):



	with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product1_cross_xml.json','wb') as outfile:
	 	json.dump(listdics1a,outfile)

        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product1_cross_json.json','wb') as outfile:
	 	json.dump(listdics1b,outfile)
        
        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product3_class.json','wb') as outfile:
		json.dump(listdics3,outfile)

        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product4_hpo.json','wb') as outfile:
		json.dump(listdics4,outfile)
                
        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product6_genes.json','wb') as outfile:
		json.dump(listdics6,outfile)
                
        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product7_linear.json','wb') as outfile:
		json.dump(listdics7,outfile)

        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product9_ages.json','wb') as outfile:
                json.dump(listdic9_ages,outfile)

        with open('/env/orphanet/pub/www/orphadata/cgi-bin/free_product9_prev.json','wb') as outfile:
                json.dump(listdic9_prev,outfile)

        with open('/env/orphanet/pub/www/orphadata/cgi-bin/samples.json','wb') as outfile:
		json.dump(list_dict_samples,outfile)


#############################################################
#############################################################
def Process():

        ##### Product1
        id = 1
        ## stoppped in order to have the good sort
		## listproducts1 = GetProducts1_cross()
			
	listproducts1 = ['en_product1.xml',
                         'en_product1.json',
                         'fr_product1.xml',
                         'fr_product1.json',
                         'de_product1.xml',
                         'de_product1.json',
                         'es_product1.xml',
                         'es_product1.json',
                         'nl_product1.xml',
                         'nl_product1.json',
                         'it_product1.xml',
                         'it_product1.json',
                         'pt_product1.xml',
                         'pt_product1.json',
                         'pl_product1.xml',
                         'pl_product1.json',
                         'cz_product1.xml',
                         'cz_product1.json']
        
        ##listdics1 = []
        listdics1a,id = Get_product1_xml(id,listproducts1,'/env/orphanet/pub/www/orphadata/data/xml')
        listdics1b,id = Get_product1_json(id,listproducts1,'/env/orphanet/pub/www/orphadata/data/export')

        #### Product3
        id = 1
        listproducts3 = GetProducts3_class()
        listdics3 = []
        listdics3,id = Get_product3_xml(id,listdics3,listproducts3,'/env/orphanet/pub/www/orphadata/data/xml')

        #### Product4
        listdics4 = Get_product4_xml()
 
        #### Product6
        listdics6 = Get_product6_xml()
                
        #### Product7
        listdics7 = Get_product7_xml()

        #### Product9
        listdic9_ages, listdic9_prev = Get_product9_xml()

        ### Samples
        list_dict_samples = Get_samples_xml()

        #### Writing JSONs
        WriteJSON(listdics1a , listdics1b , listdics3 , listdics4 , listdics6 , listdics7 , listdic9_ages, listdic9_prev , list_dict_samples)
        
        
if __name__=="__main__":

        Process()
