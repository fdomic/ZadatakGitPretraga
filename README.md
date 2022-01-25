

## Opis projekta i aplikacije

U ovom projekticu cilj je bio napraviti kratki progam koji pomocu kljucne rijeci sa GitHuba issuea izvlaci broj tih rijeci.
Takoder biljezi za {rijec} rocks kao pozitivan rezultat i {rijec} sucks kao negativan , te potom racuna popularnos rijeci od 0 do 10. Te je dodan provaider za twiter za buduće razvijanje.

## Preduslovi za instalaciju

Instalacija composer-a kako bismo mogli kreirati 
projek unutar kojeg koristimo (Php laravel).

Takoder treba instalirati xampp.

Za ovaj projek potrebno je samo prilagoditi bazu podataka,
korišten je mySql i korišteni su podatci:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=results
DB_USERNAME=root
DB_PASSWORD=


## Nacin upotrebe

Treba pokrenuti program sa php artisan serve.

U url treba upisati zeljenu rijec za koju zelimo saznati popularnost,
na primjheru ispod iskoritili smo rijec java: 

 http://127.0.0.1:8000/api/result?term=java

te dobio rezultat:

{
    "data": {
        "id": 5,
        "type": "score",
        "attributes": {
            "term": "java",
            "rocks": 3018,
            "sucks": 6302,
            "score": 3.2381974248927037,
            "updated_at": "2022-01-25T14:32:21.000000Z",
            "created_at": "2022-01-25T14:32:21.000000Z",
            "id": 5
        }
    }
}
