## UI Tools für REDAXO 5

Ziel des Addons ist es, einige Vendoren und nützliche Erweiterungen für REDAXO 5.x installieren zu können. Damit ist es sehr einfach möglich ein benötigtes Werkzeug für das Backend (und Frontend) zur Verfügung zu stellen.

## PlugIns für das Backend

Diese PlugIns erweitern das Backend um nachfolgende Skripte

- Minicolors
- DateTimePicker
- Selectize

Die Verwendung in yForm ist über die **individuellen Attribute** möglich.  
Weitere Informationen finden sich in der Dokumentation des jeweiligen Plugin.

z.B. Minicolors: `{"class":"minicolors"}`

## Custom Widget-PlugIn

Das Custom Widget-PlugIn erweitert REDAXO um weitere Eingabe-Widgets. 

### IMAGE-LIST-WIDGET


Liefert eine auf Bilder spezialisierte Medialist mit Drag&Drop und Thumbnails. 
![Screenshot](https://raw.githubusercontent.com/FriendsOfREDAXO/ui_tools/assets/imglist.png)
Screenshot IMGLIST

Anwendung in Modulen

```
REX_IMGLIST[1 widget=1]
```

***Anwendung in rex_form***

``php
$field = imglist::addImglistField($rex_form, 'media');
$field->setLabel('Image');
$field->setTooltip(true);
```

___
* Changelog -> [CHANGELOG.md](CHANGELOG.md)
* Lizenz ->  [LICENSE.md](LICENSE.md)


---

### Autor

**Friends Of REDAXO**

* http://www.redaxo.org
* https://github.com/FriendsOfREDAXO

**Projekt-Lead**

[Tim Filler](https://github.com/elricco)

___
### Credits

- [jQuery-minicolors](https://github.com/claviska/jquery-minicolors)
- [selectize](https://github.com/selectize/selectize.js/)
