# Aplikacija eŠalter
## Tim „Coders +1” - osvojeno 3. mesto

Aplikacija nastala na [SICEF hakatonu](http://sicef.info/hakaton/), 24-časovnom takmičenju u programiranju održanom na Elektronskom fakultetu u Nišu, 22. i 23. novembra 2014. godine. 

Učesnici su imali zadatak da naprave **aplikaciju koja će olakšati studiranje**.


## Članovi tima
* Milutin Stanković
* Marko Manojlović
* Miloš Mirković
* Aleksandar Tošić


## Opis aplikacije
eŠalter je aplikacija koja olakšava administraciju, papirologiju i čekanje u redovima ispred šaltera. Na taj način studentima i osoblju na šalteru štedi dragoceno vreme i energiju i olakšava samo studiranje. 

Preko eŠalter aplikacije, student može da naruči dokumenta koja želi da preuzme sa šaltera, da uplati ratu za školarinu, da prijavi i uplati ispite i druga dugovanja ka fakultetu i to vrlo jednostavno u par klikova.


## Tehnologije
* Laravel 4.2 (PHP framework)
* MySQL
* HTML & CSS
* JavaScript
* jQuery


## Uputstvo za pokretanje
Najpre je potrebno [instalirati Laravel](http://laravel.com/docs/4.2/quick) a zatim napraviti MySQL bazu i nazvati je "hakaton" (ime baze se može promeniti u fajlu _/app/config/database.php_, linija 58). Zatim je potrebno preko konzole doći u folder gde se nalazi aplikacija i otkucati sledeću komandu: `php artisan migrate --force --seed`

​Ovo bi trebalo da napravi sve tabele u bazi i da je popuni sample podacima. Nakon ovoga, aplikacija je spremna za rad. Možete se prijaviti sa podacima: 
>**​korisničko ime:** 14161  
>**lozinka:** password​

----------
Više o SICEF-u, organizatoru prvog hakatona na jugu Srbije, možete saznati na sajtu: http://www.sicef.info. 