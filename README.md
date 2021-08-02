# Stats Aid
This project allows you to get the projected earnings over a given period of days for a given platform, given a dataset of earnings and time earned!
Just include the file and call the projectedEarnings function thus:

```php
projectedEarnings([["amount"=>5000, "timestamp"=>1627795603],["amount"=>6000, "timestamp"=>1627799203],["amount"=>6000, "timestamp"=>1627810003],["amount"=>6000, "timestamp"=>1627813603],["amount"=>6000, "timestamp"=>1627817203],["amount"=>6000, "timestamp"=>1627824403]], 30);
```

With the above code, you can notice the first parameter is the dataset, which is a multi-dimensional array of amounts and timestamps (time earned), while the second parameter is an integer, which represents the number of days after whose projected earnings is to be deduced using basic statistics.

## Contributions
I developed this simple algorithm. Feel free to star the project and don't forget to submit issues and make pull requests in case you want to contribute to it!
Thanks a lot and kudos!!
