
<?php

$products = [
        "menottes" => [
                "name" => "Menottes",
                "price" => 4500,
                "weight" => 600 . "g",
                "discount" => "10%",
                "picture_url" => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISERUSERAVFRUVFhcXGBYXFRUVFRUVFhcWFxUWFhgYHSggGBolHRMVITEhJSktLi4uFx8zODMtNygtLisBCgoKDQ0NDw0PDysZFRkrNzcrKystLSsrNzcrLTctKy0rKzc3KysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAABQEDBAYHAv/EAD4QAAIBAgQDBgIHBgYDAQAAAAECAAMRBBIhMQVBUQYTImFxgTKRBxQjQlKhsVNicsHR8BUzgpLC4XOysyT/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAYEQEBAQEBAAAAAAAAAAAAAAAAARExQf/aAAwDAQACEQMRAD8A7jERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBESkCsw8XiwCFB1N/kBc+/wD3POIxN9Bt1kJxrKVAFRlqXDU8gzPmHPL95bEgg6EE6jcSjOp44MxUPcgXNje17jXodDL4qHqZq7f4vb7PDYQX3ZjUUt5lVYgf7jMd+I8apa1eHUKqjfuarB/YPeBuaYth5zKo4kN5HpNL4V2woVX7mqr4et+yrDKT1ynZtxsZsF4E3EwsHir+Ft/1mbKESkQKxEQEREBERAREQEREBERAREQEREBERATFxlWwsOcypGYhrsflAx67toEALtooO3qfITN4fw5aep8Tn4nNrk/yHlPPD6V2Zumg/UyQgIiIEXx3gGHxdM069IMOR2ZT1Vhqp8xNQwVSvgK64TFOalCobYfEH4r/ALGr+9zB5zoci+0nCFxWHei3MXVuauNUYdCCBAxb2kvhK2ZfMaGap2fxjVcMrVP8xc1Op/5KZKt+Yv7iTfDKlmt1H5iSIl4lLxKqsREBERAREQERKFhArEtHEL+IfrLgMCsRKXgVieKlVVF2IA6kgD5mRnEe0mEoKXqV0CjchgQPcfpAlokBw/tpw+vYUsXTYn1H6iTdKurC6sGHUEEflAuREQEh1N7n95v/AGMlzIcjLUdfO49G/wC7wM/h/wAJ9TMqR+BexK9dffnJCAiIgJQyplDA1DB0cmIxijbvw49Xo0mb87yUwZ8a+v8AWY6L9pWf8dQn2RUpj/5k+8v4QfaIPO/ykRORESqrESxXrhfXpAuPUA3MxnxZ5D5zFrVd2YgAa3JAAA33kUnEqtY//koZ1/a1D3dI/wAH3n9QAD1kE2cQ3X8pUYluokYnDMY2rYmmvklIW+bE3lHwGOTVa1GoOjIUJ/1Kf5SiWbG2UnKSQCdNbkDQWkHxR6tZFfDlCb5iHLKrraxGZdQQSNPK090eJ2YU69I0XOi5iGpv/BUGl/3TZvKXkGSpp8NQ3/hfnbpm/X1Mgu4NHWmi1GzOFUMwBAZgBmIB5E3mRhscitkZrX20Ngd7Xta9tbbzw7AAk7DU+gkLgMJhsQ6Y2jUZw3jWzt3ZbLkzGmdnC6G4v5QNvvITtL2jpYWmWJzPqFUc2sSAbbbTnn0h9ocXRDUadZlYEWCgKO7Pw2O5O4OvKY30f4HG1FNbK7s4y5q65Qg5lCy3INzt840e+EYihxGq78ReojJcCzN3bAaMEtuddbcjpMHG4FadfvqIqvSpsuQBM11uL94zbjLdVUdZ0jhfYmgmV6ozsosNMqKOiqNhf5zZaOFRRlVQB0AjByLtPXw9dKdShSGH7u7OwpkOQbACwCi410vzE94bDVRg1x648pVpBmYO5AKEnIlRd72y6WtfbrOtPhUIsVBB3Ft5onbHsolKi9TDU1t96k2tIAnV7fdtvpJgnOxHaT67h0dwoqWNwpurW3K389xymyXnG24QcBg6ONoVszrVzMpNhzVqarfW1mFvPynW+F41a1JKqG6uqsPQi4llGVIvjNMraqBfLowGpKHcgc7b/OSkoRKIdH2KnoQRr7+kk8PXDDz6SFx2HbD3ZVLUdyFBLU+ZKgaledhqOV9p7WtbUXH5frIJ2JF0+InmLy5/iX7hlEgZj4ytlXzO39Zh1MY52sv6zHLX3N5B4C6Wl/hFPM7PyHhHmfvH56exmOQXbu03O5/COvr0Em8PRCKFXYC0qLkREK81HABJ2AvIwsTcnc/l5TJ4k+ir+JvyGv62kVxIkpkU+Koy0weYzfER5hQx9oHjDYT622Z/8hT4U5VWB+N+qgjQbaX6TY0QAWAnjDUQihFFgoAA6AS7AREQLGLwiVVKVFDKdwZAPQeme4ZiwOtFzvprkc8yOR5j012aYfEsNnQ2+IeJfUaj+Y94GChDre2jLqPUaiYFHBJg8Oww9Nmy3bJcs7HTQEnU2AsPICZmGPhNupt7+L/lPdFjYZrX522/u0gi+AFMXVNV8KwyCyvVp5HI3ByHUc/lNsVANhIzAVB3zKN8gJ8tTaSsQIiJQnirTDAqRcEEEdQd57iBxjtF2fr1cZ9WwoGeiSy1HewC+A/DrqM6i9rkATdfo24k706uHqm70KhHIeFvEBYfhbOv+ma/214x3GMqthr98tNXLZcyK1ihB05rl22Kjzte+i9qlXEVsSz5u8ppnAXKFqFmYgD3Y3/eEzOjpkRE0IrtFiu7phreHvEDnopNrnyDZb+V5C8G4xTxDvk1KAXIDDKSSMjZh8Qtr6zZeJYUVaVSmdnVl+YtNd4HxJHpgFgKieGopIDB10N+u35yIk3203mNSxKlyneIWUXKgjMAdiRf+7Sxj+MUqRAd11tpmGY5jlGVfvG52H/U84LgmHo1WrUqQV3BBIJtZmDNYHTUqpJ52EgzmvcWOnPz6ekh8PgMQK7VGrKwYCnTVaeXKC1y9TU52FgBtz6y1T7T0++akVqeEG/2NUHNcAItx9qSLm6iwtruJK8IerWqhjRelSXW9TKHc7CyAkqBqbnXbSUTeAwS0lsNSdSebHqZlSglZVIiIEXxGpdgL/Df5m2gmNh0zVaetwCzA+YUr/yMpxLC53ZCzLezqy2DdDae8JRFMKAScpvc2JJN73sB1MgmpWeUa4uJ6lCIiAiJZxNXKvmdBAiqSWBHmR8vD/KQuH4TXptkXGVHep4FNRUPdU11YgADM2oF2k9KcKXNWd+SDIPXd/5D5yC9wbhS0AbMzsxuzubsx8/6DSSURKEREBMDjPEVw9F6rm2UG3m3ITOBnNu3PH6LYulhqmdkD+NUF83hBPPXVgLDo3USUQPC+1gQY6oaO/hDE3dSbCmCuoZSzFrg7tzm+/RtwT6rgkDDx1PtH65m1sfQWHtNY4VwfD4nijVKCgYdAMyj4KlRbjMw8m0A28BPOdQRbCwiD1ERKEhuJ9l8JiHz1aCs34rWJ9xJmUgaRj+weV1qYKv3LDlUTv0HmqswykeRtrtNL41xHGIBTONqq4xFNGdcijIzZGAGXQ5ipG/9e1zi/wBIHA6jY77NypquvxaIArU6iNrpuje9uslSuocB4GuHBJqVKrNa71WzN6DSwHkBJgTUeyPao1ScNiQqYhCVOU+B8ttR+E6jS58uYG3CVVYiICIiBg8Tw5IDr8SagfiH3l9xt52mJSqBgGXY/wB2PnJmQvEMI9NjVpLmU6vTG5/eTz8ucDJoV8vpM6nUB2MhcLikqLmRrjY9QejA6g+UvqbbG0CWiRwxDdZ5fEt1gZ9WsF3PtI+tULG5lrOf7/rMHiHFVpkIAalZvhpLufM/hXzMgu4/ElAFTWo+iDz5sR0G5kzw7CClTVBrbcnck6sT5k3PvI7gfC2UmtXIaswtp8NNeVNPIddyfaTUoREQERECM7QcR7igz3sdh62Jv7AE+05FiUwteiuIp4h/rRrBgLEoGsNLW5BdbHUnXlbbPpAqHE16WDFRUS7Fi5yqbLrqCCCM6AerdJDdhOB1GxWSqyFKBJsiqEYp4KbXUC9/H65R5TPo6B2Q4MuGoKLeNhmdubOdWPpflJ2UVbSs0EREBERASL7QcLSvRcMgY5Ta/W3UayUlGEDifB+y2IVK+JWvkFMNZFuzXIU3ufIg/redW7KcT+s4SlWPxMtm/jXRvzBnJO02PeniXRDWyIzB1RWdW1PdF12ykZkuOSToP0V11fA+BCiirUAW5O5zGxOtrsR7TMRuMRE0pERASlpWIEVxDgaVD3iM1Kr+0TQnyYbOPIgyOaljKe6U6w6qe7b3U3F/ebNKWgav/iNXnhKw9Mh/5SjY6sT4MFUJ6sUUe5uTNptFpBrA4dja3x1Fw68xT8dT/ewsvsJK8I4HRwwPdp4jqzm7VHPVnOp+ckrSsopaViICIiAgxEDifaHAYjFYqtXpUi3cu2ne2ABByuoB3BU6bHpN3+i6lfDPVI8T1Xv08Jyiw5DT8zNO7UceqYLF1adP4KhIcKBmYBmI3GhtVIHXLN1+jbEUxQaipbNTcscwsxWrd1P5lfVTMzqNxiImlIiICIiAlDKyhgcU7RYtaOMqFa5oKTUznNUArMhzohKHwkrUe1/wnTpvv0XlPqRCBhatWuGtmuXLa+zCaH2x7sYt/sqL3zhjUIUr3bs11OZSbrWUeeUdJu/0W4dkw1XMwa9dyCCSLBVXS/8ADMxG6RETSkREBERAREQEREBERAREQEREBERA0ftJgvq+MTGBQUa6voNDba52zBRbzResgOznaag2Pq4lXWnSKlXRj4wC2ZXa2y5sxsdsxnS+K4IVqL09sykA9DyM5Xw/hOEwlDEpiFtW1GYgXLbhFBNhqQRtdWHQ2yOvI19QbiepoXYHtEq0aWHr1lLklEIN7c1pOeTgXA1sbTfBNCsSkrAREQEtYmqERmYgBQTcmw0la9ZUUs7BVAuSdABOX9uu2AxCNQwneOVdB4Bm7wm7W0voFRtOpHSSjX+Jd1XrVUfC1KmYqy1lzrTVzT8KlrFcx+ZzWnS/o2oZcAhy5c7O9rWsHYkaehnNuG8EOJxFMUGrU1Iu1NjojhQt9NG8NjmIv4gOc7VgMMKVNaa7KAB7SQZERE0EREBERAREQEREBERAREQEREBERATWO2PZ76xSdqag1chWzfC4FyAw8rmx5XmzyhgcR4bhMLSwNUViRiTU8RYgZbE2ufu5RqQdb2IvcSa4Z2/xS50TDGvTw4y1HclavhLDMQq2tYfkZvHGuzVKvmI8DspUsANR+8Oe5+c0fA9icbhqdahSNM06pFyPiNjcXYi+36zInMT9JFGmqZ6Dmo9j3aEOwB+8TYAD11mWv0h4EUe+qO9Nb28SEkkb5Qty3sJpdTs7iaWKpVlwzEUVZQfjZ82YEsRofiJ/XoI3ifA6gSgjoxZKisW7s08qDKCurEOdCfUm941HVE7aYA0jWGJXIu5Kvdb7XW1xv0kZxD6R8EtB6tF+9y8rMgJOigFgLknp0JJABM572g4cK3ekUstMuGphWOcvdRl7sAg3W63JFtDfeZZ4ecSKIGGtZAKoyKTUcKyWt92+a+bUaA+UaMrjfHcfiKSPUNOjSri1Ox7y2ZlXNZdyA3XS9+UxOEcOrYilRw3dqr0XualM2zActLbNu59BckzYuz3YmsQi4hstNCWWnfNkJv8ACff4jr6TeuF8KpYcZaVMKPLnGKw+zfAEwqk3LVG1ZzuT0HQanSTcRNBERAREQEREBERAREQEREBERAREQEREBERAREQKWnlqYO4E9xAsfVE/AvyE9pRUbAD2lyICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiB//Z",
        ],
        "matraque" => [
                "name" => "Matraque",
                "price" => 6000,
                "weight" => 1.5 . "kg",
                "discount" => "10%",
                "picture_url" => "https://www.fightpremium.com/media/catalog/product/cache/1/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/a/matraque/ESP-Baton-Matraque-telescopique-noire-54-cm-(21-pouces)-Poignee-ergonomique-22.jpg",
            ],
        "surin" => [
                "name" => "Surin",
                "price" => 9000,
                "weight" => 6 . "g",
                "discount" => null,
                "picture_url" => "https://art.hearthstonejson.com/v1/256x/BAR_322.jpg",
        ],
];

foreach($products as $product) {
    echo "<div style = 'text-align: center' >";
    echo "<h2>" . $product["name"] . "</h2>";
    echo "<h3>" . formatPrice($product["price"]) . "TTC</h3>";
    echo "<h3>" . priceExcludingVAT($product["price"]) . " HT</h3>";
//    echo "<h3>" . discountedPrice($products[$product]["price"], $products[$product]["discount"]) . " reduct TTC</h3>";
    echo "<h3>" . $product["weight"] . " </h3>";
    echo "<img src =' " . $product["picture_url"] . "' alt=product picture' " . "'>";
    echo "</div>";
}
?>
