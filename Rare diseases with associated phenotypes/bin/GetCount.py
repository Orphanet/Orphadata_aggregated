#!/usr/bin/env python
import os,subprocess,sys,os.path,json,time

fho_csv = open(str(time.localtime()[0]) + '_' + str(time.localtime()[1]) + '_' + str(time.localtime()[2]) + '_' + str(time.localtime()[3]) + 'h' + str(time.localtime()[4]) + '_products_counter.csv','w')
fho_json = open('samples.json','w')


#fho_csv.write('product;count\n')

public_path = '/env/orphanet/pub/www/orphadata/data/xml/'
private_path = '/env/orphanet/pub/www/orphadata/data/private/'
sample_path = '/env/orphanet/pub/www/orphadata/data/samples/'

list_of_products_xml_private  = [ 'product2' ,
                                  'product4' ,
                                  'product3' ,
                                  'product5' ,
                                  'product6' ,
                                  'product7' ,
                                  'product8' ,
                                  'product9']
#### private
for aDir in list_of_products_xml_private:

        for aXML in os.listdir('/env/orphanet/pub/www/orphadata/data/private/' + aDir):
            if aXML.endswith('xml'):
		filexml = '/env/orphanet/pub/www/orphadata/data/private/' + aDir + '/' + aXML
		fh_xml = open(filexml)
		line = fh_xml.readline()
		test='count'
		while line != '':
			if line.find(test) != -1:
				#fho_csv.write(aXML + ';' + line.split('"')[-2] + '\n')
                                fho_csv.write(('%s\t%s\t%s\n')%(aDir,aXML,line.split('"')[-2]))
				break
			line = fh_xml.readline()
		fh_xml.close()


##### For WWW
list_of_samples = [ 'product4_sample.xml' ,
                    'product4_net_sample.xml' ,
                    'product9_prev_sample.xml']


for aSample in list_of_samples:
        datasample = {}
        url = sample_path + aSample
        sizesample = os.stat(url).st_size / 1024
        sample = aSample.split('_sample')[0]
        datasample["sample"] = sample
        datasample["sizesample"] = sizesample
        datasample["url"] = url
        aJson = json.dumps(datasample)
        json.dump(aJson,fho_json)
fho_json.close()


#### samples
fho_csv.write('\n')
for aXML in os.listdir(sample_path):
        if aXML.endswith('xml'):
                filexml = sample_path + aXML
                fh_xml = open(filexml)
                line = fh_xml.readline()
                test='count'
                while line != '':
                        if line.find(test) != -1:
                                #fho_csv.write(aXML + ';' + line.split('"')[-2] + '\n')
                                fho_csv.write(('sample_path\t%s\t%s\n')%(aXML,line.split('"')[-2]))
                                break
                        line = fh_xml.readline()
                fh_xml.close()






#### public
fho_csv.write('\n')
for aXML in os.listdir(public_path):
        if aXML.endswith('xml'):
                filexml = public_path + aXML
		fh_xml = open(filexml)
		line = fh_xml.readline()
		test='count'
		while line != '':
			if line.find(test) != -1:
				#fho_csv.write(aXML + ';' + line.split('"')[-2] + '\n')
                                fho_csv.write(('public file\t%s\t%s\n')%(aXML,line.split('"')[-2]))
				break
			line = fh_xml.readline()
		fh_xml.close()


##### json files
fho_csv.write('\n')
for aJson in os.listdir('/env/orphanet/pub/www/orphadata/data/export'):
        jsondata = '/env/orphanet/pub/www/orphadata/data/export/' + aJson
        aLinejson = open(jsondata).readlines()
        fho_csv.write(("%s\t%s\n")%(aJson,aLinejson[0].split('{')[3].split(':')[1].split('"')[1]))




fho_csv.close()
