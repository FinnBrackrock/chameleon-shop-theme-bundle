Export wie folgt aufrufen: <?=$data['sExportLink']; ?><br />
Froogle erwartet die Datei im root Verzeichnis, daher kann der link alternativ auch mit "-" anstelle von "/" aufgerufen werden
Note: Froogle scheint nur echte Dateien zu akzeptieren. Lösung: cronjob -> /usr/bin/lynx -source <?=$data['sExportLink']; ?> > /path/to/document/root/somefile.txt
