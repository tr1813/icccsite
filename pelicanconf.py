#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = u'ICCC'
SITENAME = u'Imperial College Caving Club'
#SITEURL = 'https://union.ic.ac.uk/rcc/caving/topsecret'
SITEURL = '/'

THEME = 'themes/ICTheme'

PATH = 'content'
ARTICLE_EXCLUDES = ['caves', 'cavers']

STATIC_PATHS = ['assets', 'photo_archive']

TIMEZONE = 'Europe/London'

DEFAULT_LANG = u'en'

CATEGORY_SAVE_AS = ''
TAG_SAVE_AS = ''

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None

DEFAULT_PAGINATION = 10
DEFAULT_ORPHANS = 4

DEFAULT_DATE_FORMAT = '%d-%m-%Y'

PLUGIN_PATHS = ["plugins"]
PLUGINS = ['photoarchive', 'acyear', 'inlinephotos', 'cavepeeps', 'subsites', 'oldurl', 'metainserter']

SLUGIFY_SOURCE = 'basename'

ARTICLE_URL = 'articles/{slug}.html'
ARTICLE_SAVE_AS = 'articles/{slug}.html'

FAVICON = "assets/iclogo.png"

DISQUS_SITENAME = u'iccc'

SUBSITES = ["_newzealand", "_slovenia"]
