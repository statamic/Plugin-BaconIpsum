Statamic Bacon Ipsum Plugin
================================

The Bacon Ipsum plugin will generate you steaming piles of glorious bacon ipsum, ready to fill in all the gaps and holes in your content.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `bacon_ipsum` (Github timestamps the download folder).
3. Enjoy.

## Usage

Drop the tag in your template and watch delicious bacon (ipsum) appear right before your very eyes.
    
    {{ bacon_ipsum paragraphs="5" }}

## Parameters

### Paragraphs `paragraphs`
**default: 3**

Pass any integer to choose how many paragraphs of bacon ipsum to generate.

    paragraphs="5"

### Type `type`
**default: meat-and-filler**

Choose which type of bacon ipsum to generate. Available flavors:

- `meat-and-filler`: Meat mixed with miscellaneous "lorem ipsum" filler
- `all-meat`: Meat. All meat, nothing but the meat.


### Sentences `sentences`
*optional*

Override `paragraphs` with a specified number of sentences to generate.


### Start with Lorem `start-with-lorem`
**default: yes**

Set to "yes" to start the first paragraph with "Bacon ipsum dolar sit amet."