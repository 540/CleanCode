# [Ley de demeter](https://betterprogramming.pub/demeters-law-don-t-talk-to-strangers-87bb4af11694) 

Llamadas desde el método M permitidas de un objeto A:
- A métodos definidos en ese propio objeto A
- A métodos de los objetos que son pasados como argumentos
- A métodos de objetos que se instancien en el propio método
- A métodos de objetos que se guardan en el objeto A
- A métodos de objetos que son devueltos en los métodos del objeto A
