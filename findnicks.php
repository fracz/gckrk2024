<?php
$contents = file_get_contents(__DIR__ . '/index.html');

preg_match_all('#h2.+\?u=(.+?)"#', $contents, $matches);

echo implode(PHP_EOL, array_unique($matches[1]));

/*
kranfagel
gorgony
malpep
Prezes201
Z-DNA
GoGacekGC
Pogliś
Dominik_112
Bogumilo
juleczkap23
Beata1988
Leon17171717
CopernicusHigh
zuzix_854
PL_MASA
soratte
Fishu
StellaStellina13
Lodowq6
niuton
roburoz
Svarträv
_Teodor_
ZbyMar
holoskawina
_DKR
Majki_Obbi
apatyt
Amalteaa
HugeBeck
Perla09
Anderith
Team_SirWonski
seba54
m2mPL
Quard32
chrupek_4
AsereczeKK
1990ds
xMt
bezsenna
nemrodek
Zielony Team
hedonic
pocztapp
Classik13
Piętaszek
Jouka01
Murazor
pigeox69
falcon1984pl
TomekS1976
kretes
MorowyDzik
najlepsi<3
emode
udar2
Justyna94
Byrt
piechurek7
Radek06
semaprint
UnicornCacherPL
Emson_
Dominisia_krk
Kosoff
Milk_Bandit
kluczdoskarbu
elales
barucci
holdasy
Krecik40
M&O&P
zuzajska
daksya
Qinka
LeAPiMi
yuve
karibud
marcin3243
Mom&Pat
POKEMISTRZ
masaj_
kara-kum
Anestezja
leneia
KARSTENPROFI
Geryint
 */
