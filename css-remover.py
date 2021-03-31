import lxml.html

#TODO Try only removing ".*"
# Our html string we want to remove the class attribute from
html_string = '<p class="DumbClass">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>'

# Parse the html
html = lxml.html.fromstring(html_string)

# Print out our "Before"
print (lxml.html.tostring(html))

# .xpath below gives us a list of all elements that have a class attribute
# xpath syntax explained:
# // = select all tags that match our expression regardless of location in doc
# * = match any tag
# [@class] = match all class attributes
for tag in html.xpath('//*[@class]'):
   # For each element with a class attribute, remove that class attribute
   tag.attrib.pop('class')

# Print out our "After"
print (lxml.html.tostring(html))