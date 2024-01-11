# Esercizio: PHP Dischi JSON

Mostra nella pagina i dischi salvati nel file json.

## dischi.json

``` json
{
    "New Jersey": {
        "artist": "Bon Jovi",
        "release": "1988",
        "image" : "img/1.jpg"
    }
}
```
## main.json
``` js
axios.get('api.php').then((response) => {
    console.log(response.data);
});
```