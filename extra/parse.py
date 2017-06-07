import json
from pprint import pprint

with open('elements.json') as data_file:
	data = json.load(data_file)
	data_file.close()

print('<!DOCTYPE html><html lang = "en-US"> <head> <title>Mendeleiev</title> <link rel = "stylesheet"   type = "text/css"   href = "styles.css" /> </head> <body>')

print('<table>')


for element in data['elements']:
		tmp = element['number']

		if (58 <= tmp <= 71 or 90 <= tmp <= 103):
			continue

		if (tmp == 1 or tmp == 3 or tmp == 11 or tmp == 19 or tmp == 37 or tmp == 55 or tmp == 87):
			print('<tr>')
		print('<td class="' + element['category'] + '">')
		print('<div class="weight">' + str(round(element['atomic_mass'], 2)) + '</div>')
		print('<div class="symbol">' + element['symbol'] + '</div>')
		print('<div class="number">' + str(element['number']) +'</div>')
		print('</td>')
		if (element['number'] == 1):
			for x in range(16):
				print('<td class="clear"></td>')
		if (element['number'] == 4 or tmp == 12):
			for x in range(10):
				print('<td class="clear"></td>')
		if (tmp == 2 or tmp == 10 or tmp == 18 or tmp == 36 or tmp == 54 or tmp == 86 or tmp == 118):
			print('</tr>')

print('<tr></tr><tr></tr>')

for element in data['elements']:
		tmp = element['number']
		if (not (58 <= tmp <= 71 or 90 <= tmp <= 103)):
			continue
		if (tmp == 58 or tmp == 90):
			print('<tr>')
			for x in range(3):
				print('<td class="clear"></td>')
		print('<td class="' + element['category'] + '">')
		print('<div class="weight">' + str(round(element['atomic_mass'], 2)) + '</div>')
		print('<div class="symbol">' + element['symbol'] + '</div>')
		print('<div class="number">' + str(element['number']) +'</div>')
		print('</td>')
		if (element['number'] == 1):
			for x in range(16):
				print('<td class="clear"></td>')
		if (element['number'] == 4 or tmp == 12):
			for x in range(10):
				print('<td class="clear"></td>')
		if (tmp == 2 or tmp == 10 or tmp == 18 or tmp == 36 or tmp == 54 or tmp == 86 or tmp == 118):
			print('</tr>')
print('</table>')

