# twtdstr

Script pour effacer les N+10 derniers tweets.
- créer une app https://developer.twitter.com/en/apps
- demander vos datas à Twitter
- ajouter les trucs Abraham https://github.com/abraham/twitteroauth
- mettre un cron tous les X minutes (15 pour ne pas abuser)

Après plusieurs lancements, il vous restera 10 tweets.
Si vous laissez le cron, à chaque tweet posté, le 10e est effacé dans les X minutes.
Vous pouvez faire un cron que le week-end, ou changer la valeur de 10.
