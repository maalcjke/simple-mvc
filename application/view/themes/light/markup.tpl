<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{ title }}</title>
  </head>
  <body>
    {% include 'header.tpl' %}
    {{ block('content', mvc.page_body) }}
    {% include 'footer.tpl' %}
  </body>
</html>
